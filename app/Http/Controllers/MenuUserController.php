<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Slider\SliderService;

class MenuUserController extends Controller
{
    protected $menuService;
    protected $sliderService;

    public function __construct(SliderService $sliderService, MenuService $menuService) {
        $this->sliderService = $sliderService;
        $this->menuService = $menuService;
    }

    public function index(Request $request, $id, $slug = '') {
        $menu = $this->menuService->getId_User($id);
        $product = $this->menuService->getProduct_User($menu, $request);
        $slider = $this->sliderService->show_user();

        return view('menu', [
            'title' => $menu->name,
            'sliders' => $slider,
            'products' => $product,
            'menus' => $menu
        ]);
    }
}
