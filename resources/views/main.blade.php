<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body class="goto-here">


    @include('header')
    <!-- END nav -->

    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">

            @foreach ($sliders as $slider)
            <div class="slider-item" style="background-image: url('{{ asset($slider->thumb)}}');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2"> {{ $slider->name }} </h1>
                            <h2 class="subheading mb-4"> {{ $slider->asset }} </h2>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row no-gutters ftco-services">
                <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-shipped"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Miễn phí giao hàng</h3>
                            <span>Đối với đơn hàng trên 18.000.000 triệu</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-award"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Cam kết chất lượng</h3>
                            <span>Chất lượng sản phẩm</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-customer-service"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Hỗ trợ</h3>
                            <span>Hỗ trợ 24/7</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-category ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                        style="background-image: url('{{ asset('/template/users/images/lenovo.jpg')}}');">
                        <div class="text px-3 py-1">
                            <h2 class="mb-0"><a
                                    href="/danh-muc/4-lenovo.html">Lenovo</a>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                        style="background-image: url('{{ asset('/template/users/images/hp.jpg')}}');">
                        <div class="text px-3 py-1">
                            <h2 class="mb-0"><a
                                    href="/danh-muc/3-hp.html">Hp</a>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                        style="background-image: url('{{ asset('/template/users/images/asus.jpg')}}');">
                        <div class="text px-3 py-1">
                            <h2 class="mb-0"><a
                                    href="/danh-muc/1-asus.html">Asus</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Sản Phẩm Nổi Bật</span>
                    <h2 class="mb-4">Sản Phẩm Của Chúng Tôi</h2>
                    <p>Laptop, sản phẩm kết nối con người với công việc, thông tin thế giới bên ngoài.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                @include('products.list')

            </div>

            <!-- <div class="text text-center">
                <input type="hidden" value="1" id="page">
                <p><a href="#" onclick="loadMore_user()" class="btn btn-primary">Shop now</a></p>
            </div> -->

    </section>

    <footer class="ftco-footer ftco-section">
        @include('footer')
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>

    <script src="{{ asset('/template/users/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/template/users/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('/template/users/js/popper.min.js') }}"></script>
    <script src="{{ asset('/template/users/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/template/users/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('/template/users/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('/template/users/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('/template/users/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/template/users/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/template/users/js/aos.js') }}"></script>
    <script src="{{ asset('/template/users/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('/template/users/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('/template/users/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="{{ asset('/template/users/js/google-map.js') }}"></script>
    <script src="{{ asset('/template/users/js/main.js') }}"></script>

    <script src="{{ asset('/template/users/js/public_user.js') }}"></script>

</body>

</html>