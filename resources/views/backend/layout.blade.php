<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <title>Blog-App Panel</title>
</head>
<body>
    
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <img src="{{ asset('backend/images/beyaz-logo-yeni.png') }}" alt="logo" width="155">
                </li>
                <li>
                    <a href="{{ route('backend.default.index') }}"><i class="fa fa-home" aria-hidden="true"></i>   
                        Anasayfa
                    </a>
                </li>
              
                <li>
                    <a href="{{ route('backend.category.index') }}"><i class="fa fa-list-alt" aria-hidden="true"></i> Kategori</a>
                </li>
                <li>
                    <a href="{{ route('backend.blog.index') }}"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
                        Blog</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('frontend.default.index') }}" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i>
                        Website</a>
                  </li>

                    @guest
                    @if (Route::has('login'))
                        <li>
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li>
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                
                <li style="color:#fff">
                    <i class="fa fa-user" aria-hidden="true"></i>
                        {{ Auth::user()->name }}

                </li>

                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                    {{ __('Logout') }}
                </a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>

            @endguest
                
               
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

            {{-- MOBİLE SLİDER  --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id='mobileNavbarHeader'>
            <a class="navbar-brand" href="#"><img src="{{ asset('frontend/images/siyah-logo.png') }}" alt="logo" width="155"></a>
            <button class="navbar-toggler" style="float: right;" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    
                    <li  class="nav-item">
                        <a class="nav-link" href="{{ route('backend.default.index') }}"><i class="fa fa-home" aria-hidden="true"></i>   
                            Anasayfa
                        </a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.category.index') }}"><i class="fa fa-list-alt" aria-hidden="true"></i> Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.blog.index') }}" class="nav-link"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
                            Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.default.index') }}" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i>
                            Website</a>
                      </li>
    
                        @guest
                        @if (Route::has('login'))
                            <li>
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
    
                        @if (Route::has('register'))
                            <li>
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                    
                    <li style="color:#333">
                        <i class="fa fa-user" aria-hidden="true"></i>
                            {{ Auth::user()->name }}
    
                    </li>
    
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        {{ __('Logout') }}
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </li>
    
                @endguest
                    
                   
                </ul>
            </div>
          </nav>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('content')
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

   

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>