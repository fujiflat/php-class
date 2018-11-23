
      <nav class="navbar navbar-expand-lg navbar-light bg-dark taxt-muted">
        <div class="container">
            <a class="navbar-brand text-light" href="{{ url('/') }}">
                {{config('app.name','Kazuaki')}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/services">Service</a>
                          </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/practice">practice</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link text-light" href="/posts">posts</a>
                     </li>
                              
                  </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto  bg-light">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <li><a href="/dashboard" class="text-dark ml-4" style="text-decoration:none">Dashboard</a></li>
                                <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>