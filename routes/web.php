<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;

use App\Http\Controllers\MainUserController;
use App\Http\Controllers\MenuUserController;
use App\Http\Controllers\ProductUserController;
use App\Http\Controllers\CartController;

Route::get('generate', function (){
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    echo 'ok';
});

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);
Route::get('admin/users/login/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('main', [MainController::class, 'index']);

        #Menu
        Route::prefix('menus')->group(function () {
            Route::get('add', [MenuController::class, 'create']);
            Route::post('add', [MenuController::class, 'store']);
            Route::get('list', [MenuController::class, 'index']);
            Route::get('edit/{menu}', [MenuController::class, 'show']);
            Route::post('edit/{menu}', [MenuController::class, 'update']);
            Route::DELETE('destroy', [MenuController::class, 'destroy']);
        });

        #San Pham
        Route::prefix('products')->group(function () {
            Route::get('add', [ProductController::class, 'create']);
            Route::post('add', [ProductController::class, 'store']);
            Route::get('list', [ProductController::class, 'index']);
            Route::get('edit/{product}', [ProductController::class, 'show']);
            Route::post('edit/{product}', [ProductController::class, 'update']);
            Route::DELETE('destroy', [ProductController::class, 'destroy']);
        });

        #Upload Hinh
        Route::post('upload/services', [\App\Http\Controllers\Admin\UploadController::class, 'store']);

        #Slider
        Route::prefix('sliders')->group(function () {
            Route::get('add', [SliderController::class, 'create']);
            Route::post('add', [SliderController::class, 'store']);
            Route::get('list', [SliderController::class, 'index']);
            Route::get('edit/{slider}', [SliderController::class, 'show']);
            Route::post('edit/{slider}', [SliderController::class, 'update']);
            Route::DELETE('destroy', [SliderController::class, 'destroy']);
        });

        #Cart
        Route::get('customers', [\App\Http\Controllers\Admin\CartController::class,'index']);

        Route::get('customers/view/{customer}', [\App\Http\Controllers\Admin\CartController::class,'show']);
        Route::get('customers/vanchuyen/{customer}', [\App\Http\Controllers\Admin\CartController::class,'change']);

        Route::get('test', [\App\Http\Controllers\Admin\CartController::class,'index']);
    });
});

Route::get('/', [App\Http\Controllers\MainUserController::class, 'index']);
Route::get('/trang-chu', [App\Http\Controllers\MainUserController::class, 'index']);

// Route::post('/services/load-product-user', [App\Http\Controllers\MainUserController::class, 'loadProductUser']);

Route::get('danh-muc/{id}-{slug}.html', [App\Http\Controllers\MenuUserController::class, 'index']);

Route::get('san-pham/{id}-{slug}.html', [App\Http\Controllers\ProductUserController::class, 'index']);
Route::post('/search', [App\Http\Controllers\ProductUserController::class, 'search']);

Route::post('/them-gio-hang', [App\Http\Controllers\CartController::class, 'index']);
Route::get('/gio-hang', [App\Http\Controllers\CartController::class, 'show']);
Route::post('/cap-nhat-gio-hang', [App\Http\Controllers\CartController::class, 'update']);
Route::get('/gio-hang/delete/{id}', [App\Http\Controllers\CartController::class, 'remove']);

Route::post('/gio-hang', [App\Http\Controllers\CartController::class, 'addCart']);

Route::get('/thanh-toan', [App\Http\Controllers\CartController::class, 'checkout']);

Route::get('/lien-he', [App\Http\Controllers\MainUserController::class, 'contact']);