<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;

class ProductUserController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService) {
        $this->productService = $productService;
    }

    public function index($id = '', $slug = '') {
        $product = $this->productService->show_user($id);
        $product_more = $this->productService->show_more($id);

        return view('products.product-details', [
            'title' => $product->name,
            'products' => $product,
            'products_more' => $product_more
        ]);
    }

    public function search(Request $request) {
        $product_search = $this->productService->search($request);
        $keyword = $request->keyword;

        return view('products.search', [
            'title' => "Tìm kiếm sản phẩm",
            'keyword' => $keyword,
            'products' => $product_search
        ]);
    }
}
