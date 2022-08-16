<?php
namespace App\Http\Services\Cart;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use App\Jobs\SendMail;

class CartService
{
    public function create($request)
    {
        $qty = (int)$request->input('quantity');
        $product_id = (int)$request->input('product_id');

        if ($qty <= 0 || $product_id <= 0) {
            Session::flash('error', 'Số lượng hoặc sản phẩm không chính xác');
            return false;
        }

        $carts = Session::get('carts');
        if (is_null($carts)) {
            Session::put('carts', [
                $product_id => $qty
            ]);
            return true;
        } 

        $exists = Arr::exists($carts, $product_id);
        if ($exists) {
            $carts[$product_id] = $carts[$product_id] + $qty;
            Session::put('carts', $carts);
            return true;
        }

        $carts[$product_id] = $qty;
        Session::put('carts', $carts);
        return true;
    }

    public function getProduct() {
        $carts = Session::get('carts');
        if (is_null($carts)) return [];

        $product_id = array_keys($carts);
        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1)
            ->whereIn('id', $product_id)
            ->get();
    }

    public function update($request) {
        Session::put('carts', $request->input('quantity'));

        return true;
    }

    public function remove($id) {
        $carts = Session::get('carts');
        unset($carts[$id]);
        Session::put('carts', $carts);
        return true;
    }

    public function addCart($request) {
        try {
            DB::beginTransaction();
            $carts = Session::get('carts');
            if (is_null($carts)) 
                return false;

            $customer = Customer::create([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'email' => $request->input('email'),
                'note' => $request->input('note')
            ]);

            $this->infoProductCart($carts, $customer->id);

            DB::commit();
            Session::flash('success', 'Đặt hàng thành công');

            // SendMail::dispatch($request->input('email'))->delay(now()->addSeconds(2));

            Session::forget('carts');
        } catch (\Exception $err) {
            DB::rollBack();
            Session::flash('error', 'Đặt hàng không thành công. Vui lòng thử đặt lại!!!');
            return false;
        }
        return true;
    }

    protected function infoProductCart($carts, $customer_id) {
        $product_id = array_keys($carts);
        $products = Product::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1)
            ->whereIn('id', $product_id)
            ->get();

        $data = [];
        foreach ($products as $product) {
            $data[] = [
                'customer_id' => $customer_id,
                'product_id' => $product->id,
                'quantity' => $carts[$product->id],
                'price' => $product->price_sale
            ];
        }

        return Cart::insert($data);
    }

    public function getCustomer()
    {
        return Customer::orderByDesc('id')->paginate(10);
    }

    public function changeCustomer($customer)
    {
        $customer->status=2;
        $customer->save();
        return true;
    }

    public function getProductForCart($customer)
    {
        return $customer->carts()->with(['product'=>function($query){
            $query->select('id','name','thumb');
        }])->get();
    }

    public function getCustomerAll()
    {
        return Customer::withCount('carts')->orderByDesc('id')->paginate(10);
    }
}