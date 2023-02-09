
<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container-fluid px-5">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mt-2 mx-auto mb-2 mb-lg-0">
                <a class="h1 text-dark" href="{{ route('index') }}">Amazing E-Grocery</a>
            </ul>
            <form class="d-flex">
                @auth
                    <a class="btn btn-info m-2" href="{{ route('logout') }}">@lang('greeting.logout')</a>
                @endauth
                @guest
                    @if (Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register')
                    @else
                        <a class="btn btn-primary m-2" href="{{ route('login') }}">@lang('greeting.login')</a>
                        <a class="btn btn-primary m-2" href="{{ route('register') }}">@lang('greeting.register')</a>
                    @endif
                @endguest
            </form>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-warning bg-opacity-50">
    <div class="container-fluid px-3">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                @auth
                    <li class="nav-item mx-3">
                        <a class="nav-link mx-5 h4 text-dark" aria-current="page" href="{{ route('home') }}">@lang('greeting.home')</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link mx-5 h4 text-dark" aria-current="page" href="{{ route('cart') }}">@lang('greeting.cart')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-5 h4 text-dark" aria-current="page" href="{{ route('profile') }}">@lang('greeting.profile')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-5 h4 text-dark" aria-current="page" href="{{ route('search') }}">search</a>
                    </li>
                    @if (Auth::user()->role->role_name == 'admin')
                        <li class="nav-item">
                            <a class="nav-link mx-5 h4 text-dark" aria-current="page"
                                href="{{ route('account_maintenance') }}">@lang('greeting.am')</a>
                        </li>
                    @endif
                @endauth
            </ul>
        </div>
    </div>
</nav>
