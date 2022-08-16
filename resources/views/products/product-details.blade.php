@extends('layout')

@section('çontent')

<div class="hero-wrap hero-bread"
    style="background-image: url('{{asset('/template/users/images/bg-11.jpg')}}');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ URL::to('/trang-chu')}}">Trang chủ</a>
                    </span> <span class="mr-2"><a
                            href="/danh-muc/{{ $products->menu->id }}-{{ Str::slug($products->menu->name) }}.html">{{ $products->menu->name }}</a></span>
                    <span></span></p>
                <h1 class="mb-0 bread">{{ $title }}</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <form action="/them-gio-hang" method="post">
            {{ @csrf_field() }}
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="{{ $products->thumb }}" class="image-popup"><img src="{{ $products->thumb }}"
                            class="img-fluid" alt="Colorlib Template"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>{{ $products->name }}</h3>
                    <p class="price"><span style="color: #82ae46;"><?php echo number_format($products->price_sale); ?>
                            VNĐ</span></p>
                    <p>{{ $products->description}}</p>
                    <div class="row mt-4">
                        <div class="input-group col-md-6 d-flex mb-3">
                            <input type="number" id="quantity" name="quantity" class="form-control input-number"
                                value="1" min="1" max="100">
                            <input type="hidden" name="product_id" value="{{ $products->id }}">
                        </div>
                    </div>

                    <div class="form-group" style="padding-top: 30px;">
                        <input type="submit" value="Thêm giỏ hàng" class="btn btn-primary py-3 px-5">
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Sản Phẩm</span>
                <h2 class="mb-4">Sản phẩm tham khảo</h2>
                <p>Laptop, sản phẩm kết nối con người với công việc, thông tin thế giới bên ngoài.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($products_more as $key => $product_more)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="/san-pham/{{ $product_more->id }}-{{ Str::slug($product_more->name, '-') }}.html"
                        class="img-prod">
                        <img class="img-fluid" src="{{ asset($product_more->thumb) }}" alt="{{ $product_more->name }}">
                        <span class="status">Giảm</span>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">{{ $product_more->name }}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price-dc"
                                        style="font-size: 12px;"><?php echo number_format($product_more->price_sale); ?>
                                        VNĐ</span>
                                    <span class="price-sale"><?php echo number_format($product_more->price_sale); ?>
                                        VNĐ</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection