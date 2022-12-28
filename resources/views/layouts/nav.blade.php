            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('images/logo.png')  }}" width="125px"></}}a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li class="nav-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a href="products.html">Products</a></li>
                        <li class="nav-item"><a href="">About</a></li>
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
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="{{ route('logout') }}">Cart</a>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </nav>
            </div>
