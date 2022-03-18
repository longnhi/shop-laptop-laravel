<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Slider\SliderService;
use App\Http\Services\Product\ProductService;


class MainUserController extends Controller
{
    protected $slider;
    protected $menu;
    protected $product;

    public function __construct(SliderService $slider, MenuService $menu, ProductService $product) {
        $this->slider = $slider;
        $this->menu = $menu;
        $this->product = $product;
    }

    public function index() {
        return view('main', [
            'title' => 'Website bán giày',
            'sliders' => $this->slider->show_user(),
            'menus' => $this->menu->show_user(),
            'products' => $this->product->get_user()
        ]);
    }

    // public function loadProductUser(Request $request) {
    //     $page = $request->input('page', 0);

    //     $result = $this->product->get_user($page);

    //     dd($result);

    //     // if (count($result) != 0) {
    //     //     $html = view('product.list', ['products' => $result ])->render();

    //     //     return response()->json(['html' => $html]);
    //     // }
    //     // return response()->json(['html' => '']);
    // }
}
