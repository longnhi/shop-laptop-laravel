<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Cart\CartService;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService) {
        $this->cartService = $cartService;
    }

    public function index(Request $request) {
        $result = $this->cartService->create($request);

        if ($result == false) {
            return redirect()->back();
        }

        return redirect('/gio-hang');
    }

    public function show() {
        $product = $this->cartService->getProduct();
        return view('carts.list', [
            'title' => "Giỏ Hàng",
            'products' => $product,
            'carts' => Session::get('carts')
        ]);
    }

    public function update(Request $request) {
        $this->cartService->update($request);

        return redirect('/gio-hang');
    }

    public function remove($id = 0) {
        $this->cartService->remove($id);

        return redirect('/gio-hang');
    }

    public function addCart(Request $request) {
        $result = $this->cartService->addCart($request);

        return redirect()->back();
        // return view('carts.checkout', [
        //     'title' => "Thanh toán thành công"
        // ]);
    }
}