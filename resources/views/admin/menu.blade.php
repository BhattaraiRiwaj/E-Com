<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="images/icon/logo.png" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <!--dashboard-->
                <li class="@yield('dashboard_select')">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>
                    </a>
                </li>
                </li>
                <!--category-->
                <li class="@yield('category_select')">
                    <a href="{{ route('category') }}">
                        <i class="fas fa-list"></i>
                    </a>
                </li>
                <!--coupon-->
                <li class="@yield('coupon_select')">
                    <a href="{{ route('coupon.index') }}">
                        <i class="fas fa-tags"></i>
                    </a>
                </li>
                <!--size-->
                <li class="@yield('size_select')">
                    <a href="{{ route('size.index') }}">
                        <i class="fa fa-sitemap" aria-hidden="true"></i>
                    </a>
                </li>
                <!--color-->
                <li class="@yield('color_select')">
                    <a href="{{ route('color.index') }}">
                        <i class="fas fa-paint-brush"></i>
                    </a>
                </li>
                <!--Products-->
                <li class="@yield('product_select')">
                    <a href="{{ route('product.index')}}">
                        <i class="fab fa-product-hunt"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        {{ Config::get('constants.site_name') }}
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <!--Dash board-->
                <li class="@yield('dashboard_select')">
                    <a href="{{ route('dashboard')}}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>

                <!--category-->
                <li class="@yield('category_select')">
                    <a href="{{ route('category')}}">
                        <i class="fas fa-list"></i> Category
                    </a>
                </li>

                <!--coupon-->
                <li class="@yield('coupon_select')">
                    <a href="{{ route('coupon.index')}}">
                        <i class="fas fa-tags"></i> Coupon
                    </a>
                </li>

                <!--size-->
                <li class="@yield('size_select')">
                    <a href="{{ route('size.index')}}">
                        <i class="fa fa-sitemap" aria-hidden="true"></i> Size
                    </a>
                </li>

                <!--color-->
                <li class="@yield('color_select')">
                    <a href="{{ route('color.index')}}">
                        <i class="fas fa-paint-brush"></i> Color
                    </a>
                </li>

                <!--product-->
                <li class="@yield('product_select')">
                    <a href="{{ route('product.index')}}">
                        <i class="fab fa-product-hunt"></i>Product</a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->