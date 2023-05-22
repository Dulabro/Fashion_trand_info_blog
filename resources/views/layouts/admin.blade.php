<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>

  <div id="app">
    <div id="sidenav">
      <div class="wrapper">
        <div class="logo">
          
          <a href="#">Админ</a>
          <a href="#" class="nav-icon pull-right"><i class="fa fa-bars"></i></a>
        </div>
        <div class="menu">
          <ul>
            <!-- <li class=""><a href=" #">Главная</a></li> -->
         
            <li><a href="{{ route('categories') }}">Категории</a></li>
            <li><a href="{{ route('subcategories') }}">Подкатегории</a></li>
            <li><a href="{{ route('posts') }}">Пост</a></li>
            
            @guest
                            @if (Route::has('login'))
                                <li>
                                    <a class="logout" href="{{ route('login') }}">{{ __('Вход') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li>
                                    <a class="logout" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif
                        @else
                      
                             <li>
                            <a class="logout" href="{{ route('register') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Выход') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                                <!-- <li>
                                <a class="logout" href="{{ route('home') }}">{{ __('Сайт') }}</a>
                                </li> -->
                        @endguest
            

          </ul>
        </div>
      </div>
    </div>
  
  </div>
  <main class="py-4" style="padding-left:20rem;">
            @yield('content')
        </main>
  
</body>
</html>

