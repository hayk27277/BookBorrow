<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <svg width="20px" height="18px">
                <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                      d="M-0.000,-0.000 L20.000,-0.000 L20.000,2.000 L-0.000,2.000 L-0.000,-0.000 Z"></path>
                <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                      d="M-0.000,8.000 L15.000,8.000 L15.000,10.000 L-0.000,10.000 L-0.000,8.000 Z"></path>
                <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                      d="M-0.000,16.000 L20.000,16.000 L20.000,18.000 L-0.000,18.000 L-0.000,16.000 Z"></path>
            </svg>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item ">
                    <a href=""
                       class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium active border-primary border-width-2">
                        Kindles
                    </a>
                </li>
                <li class="nav-item">
                    <a href=""
                       class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium border-primary border-width-2">
                        Paper Books
                    </a>
                </li>
                <li class="nav-item">
                    <a href=""
                       class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium border-primary border-width-2">
                        Electronic
                    </a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <div class="site-search ml-xl-0 ml-md-auto w-r-100 my-2 my-xl-0">
                    <form class="form-inline">
                        <div class="input-group bg-white-100 min-width-380">
                            <div class="d-flex align-content-center justify-content-center w-15">
                                <i class="fa-solid fa-magnifying-glass m-auto" id="submit_search"></i>
                            </div>
                            <input class="form-control bg-white-100 py-2d75 height-4 border-white-100"
                                   id="books_search" type="search" placeholder="Search for Books by Keyword ..."
                                   aria-label="Search"
                            >
                        </div>
                    </form>
                </div>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle"  role="button"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  data-toggle="dropdown" type="button">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end p-2" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('home')}}">
                                Home
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
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
        </div>
    </div>
</nav>
