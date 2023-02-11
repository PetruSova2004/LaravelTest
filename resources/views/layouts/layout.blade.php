<header class="header_area">
    @section('header')
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand logo_h" href="{{route('index')}}"><img src="public/assets/img/logo.png"
                                                                                  alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                            <li class="nav-item active"><a class="nav-link" href="{{route('index')}}">Home</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true"
                                   aria-expanded="false">Shop</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link"
                                                            href="{{route('show.products')}}">Products</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="checkout.blade.php">Product
                                            Checkout</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                                            href="confirmation.blade.php">Confirmation</a></li>
                                    <li class="nav-item"><a class="nav-link" href="cart.blade.php">Shopping Cart</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true"
                                   aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.blade.php">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-blog.blade.php">Blog
                                            Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true"
                                   aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    @guest()
                                        <li class="nav-item"><a class="nav-link" href={{route('login')}}>Login</a></li>
                                        <li class="nav-item"><a class="nav-link" href={{route('register')}}>Register</a>
                                        </li>
                                    @endguest
                                    @auth()
                                        <li class="nav-item"><a class="nav-link"
                                                                href="{{route('logout')}}">Logout</a></li>
                                    @endauth

                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.blade.php">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href={{route('subscribe')}}>Subscribe</a></li>
                        </ul>

                        @auth()
                            <ul class="nav-shop">
                                <li class="nav-item">
                                    <button><i class="ti-search"></i></button>
                                </li>

                                @if(\Illuminate\Support\Facades\Auth::user()->is_admin)
                                    <li class="nav-item"><a class="nav-link" href={{route('admin.index')}}>Admin</a></li>
                                @endif
                                <li class="nav-item">
                                    <a href={{route('show.cart')}}>
                                        <button><i class="ti-shopping-cart"></i><span
                                                class="nav-shop__circle">{{$count}}</span>
                                        </button>
                                    </a>
                                </li>
{{--                                <a href={{route('favorites')}}>--}}
                                    <li class="nav-item">
                                        <button><i class="ti-heart"></i><span
                                                class="nav-shop__circle">0</span></button>
                                    </li>
{{--                                </a>--}}

                                <li class="nav-item"><a class="button button-header" href="#">Buy Now</a></li>
                                @endauth
                            </ul>
                    </div>
                </div>
            </nav>
        </div>
    @show
</header>

<main role="main">

    <div class="container">
        @include('layouts.alerts')
    </div>

    @yield('content')

</main>


