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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
</head>
<body>
<div id="app">



  
        <main class="py-4">
            @yield('content')
            
        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
           
            $(document).ready(function() {
  	 	

           /* the Responsive menu script */
                $('body').addClass('js');
                     var $menu = $('#menu'),
                           $menulink = $('.menu-link'),
                           $menuTrigger = $('.has-subnav > a');
                   
               $menulink.click(function(e) {
                       e.preventDefault();
                       $menulink.toggleClass('active');
                       $menu.toggleClass('active');
               });
           
               var add_toggle_links = function() { 		
                    if ($('.menu-link').is(":visible")){
                        if ($(".toggle-link").length > 0){
                        }
                        else{
                            $('.has-subnav > a').before('<span class="toggle-link"> Open submenu </span>');
                            $('.toggle-link').click(function(e) {		
                               var $this = $(this);
                               $this.toggleClass('active').siblings('ul').toggleClass('active');
                           });	
                        }
                    }
                   else{
                       $('.toggle-link').empty();
                   }
                }
               add_toggle_links();
               $(window).bind("resize", add_toggle_links);	
                   
                   });
        </script>
    </div>
</body>
</html>
