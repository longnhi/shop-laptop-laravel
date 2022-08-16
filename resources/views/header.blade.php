<nav class="navbar navbar-expand-lg ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/trang-chu">Laptop Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="main-menu navbar-nav ml-auto">
                <li class="nav-item"><a href="/trang-chu" class="nav-link">Trang chủ</a></li>

                {!! \App\Helpers\Helper::menus_user($menus) !!}

                <!-- <li class="nav-item">
                    <a href="" class="nav-link">Shop</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Homepage 1</a></li>
                        <li><a href="home-02.html">Homepage 2</a></li>
                        <li><a href="home-03.html">Homepage 3</a></li>
                    </ul>
                </li> -->
                <li class="nav-item"><a href="/lien-he" class="nav-link">Liên hệ</a></li>
                <li class="nav-item cta cta-colored"><a href="/gio-hang'" class="nav-link"><span
                            class="icon-shopping_cart"></span>[{{ !is_null(\Session::get('carts')) ? count(\Session::get('carts')) : 0 }}]</a>
                </li>
            </ul>

            <!-- Search -->
            <form action="/search'" method="POST">
                {{ csrf_field() }}
                <div class="search-container">
                    <input type="text" name="keyword" placeholder="Tìm kiếm..." class="search-input">
                    <a href="#" class="search-btn">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
            </form>
        </div>

    </div>
</nav>