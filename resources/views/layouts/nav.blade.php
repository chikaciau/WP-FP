            @php
            $Ncategory = ['Food', 'Electronics', 'Beauty', 'Pet'];
            @endphp
            <div class="navbar">
                <div class="logo">
                    <a href="{{ route('home') }}">Barbatos</a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">
                                Category
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @for($a=0;$a<count($Ncategory);$a++) <a class="dropdown-item"
                                    href="{{ route('product_category', ['category' =>$Ncategory[$a] ]) }}">
                                    {{ $Ncategory[$a] }}</a>
                                    @endfor
                            </div>
                        </li>
                        @can('user')
                        <li class="nav-item">
                            <a href="{{ route('cart') }}">
                                <img src="{{ asset('images/cart.png') }}" width="30px" height="30px">
                            </a></li>
                        @endcan

                        @can('admin')
                        <li class="nav-item"><a href="{{ route('product') }}">Manage Product</a></li>
                        @endcan
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                                @can('user')
                                <a class="dropdown-item" href="{{ route('transaction') }}">Transaction</a>
                                @endcan
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </nav>
            </div>
