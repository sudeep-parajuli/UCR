<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield ("title") </title>

	<link rel="icon" href="{{asset('image/ucr-logo.jpeg')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js')}}"></script>
	<script src="{{ asset('js/jquery.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css?v=').time()}}">
	

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://kit.fontawesome.com/0e795e03f2.js" crossorigin="anonymous"></script>
</head>
<body>
    
         <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">

  			<div class="container-fluid">
                <img src="{{asset('image/ucr-logo.jpeg')}}" id="ucr-logo" alt="UCR-Logo">
                <a class="navbar-brand" href="{{url('/')}}">UCR</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about')}}">About Us</a>
                        </li>
                        @if(auth()->check() && auth()->user()->user_type <> 0 )
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('return')}}">Manager page</a>
                        </li>
						@endif
						@if(auth()->check() && auth()->user()->user_type == 2 )
						<li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard')}}">Manager Dashboard</a>
                        </li>
                        @endif
					@if(auth()->check() && auth()->user()->user_type == 0)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('bookinglist')}}">Your Detail</a>
                        </li>
						@endif
						<li class="nav-item">
                            <a class="nav-link" href="{{route('alldevice')}}">All Device</a>
                        </li>
						
						
						@if(auth()->check() && auth()->user()->user_type == 2)
						<li class="nav-item">
                            <a class="nav-link" href="{{route('device_add_form')}}">Add Device</a>
                        </li>

						<li class="nav-item">
                            <a class="nav-link" href="{{route('userrentalstore')}}">Rental Return</a>
                        </li>
						@endif
						
                    </ul>
						@if(auth()->check() && (auth()->user()->user_type == 0 || auth()->user()->user_type == 1))
                   <a href="{{route('cartitem')}}"> <button type="button" class="btn position-relative">
                        <img src="{{asset('image/cart.jpg')}}" alt="" id="cart">
                        <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-danger">
                          Your Cart
                            <span class="visually-hidden">unread messages</span></a>
                        </span>
                    </button>
                            @endif
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fname }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                </div>
           
          
                    
        </nav>

        <main class="py-4 main-body">
            @yield('content')
        </main>
    </div>
                                    
    <footer id="footer">
            <i class="fab fa-twitter logo"></i>
            <i class="fab fa-facebook logo"></i>
            <i class="fab fa-instagram logo"></i>
            <i class="fas fa-envelope logo"></i><br>
			

            <a href="{{url('/contact')}}">Contact US</a>
            <p>© Copyright 2022 UCR</p>

        </footer>
                                    
         
                                    

</body>
</html>
