@extends('layouts.app')

@section('content')
<style>


/* Please ❤ this if you like it! */


/* ======================================== * 
		        BEST VIEWED FULLSCREEN
   https://codepen.io/ig_design/full/MRbJWW
 * ======================================== */

 @import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=devanagari,latin-ext');


:root {
	--white: #ffffff;
	--black: #000000;
	--dark-blue: #1f2029;
	--dark-light: #424455;
	--red: #da2c4d;
	--yellow: #f8ab37;
	--grey: #ecedf3;
}

/* #Primary
================================================== */

body{
	width: 100%;
	height: 100vh;
	background: var(--dark-blue);
	overflow-x: hidden;
    font-family: 'Poppins', sans-serif;
	font-size: 16px;
	line-height: 30px;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
p{
    font-family: 'Poppins', sans-serif;
	font-size: 16px;
	line-height: 30px;
	color: var(--white);
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
::selection {
	color: var(--white);
	background-color: var(--black);
}
::-moz-selection {
	color: var(--white);
	background-color: var(--black);
}
mark{
	color: var(--white);
	background-color: var(--black);
}
.color-yellow {
    color: var(--yellow);
}
.size-18{
    font-size: 18px;
}
.opacity-40{
	opacity: 0.4;
}
.opacity-60{
	opacity: 0.6;
}
.section {
    position: relative;
	width: 100%;
	display: block;
	z-index: 30 !important;
}
.over-hide {
    overflow: hidden;
}
.padding-top-bottom {
	padding-top: 90px;
	padding-bottom: 90px;
}
.hero-center-section{
	position: fixed;
	top: 50%;
	left: 0;
	width: 100%;
	z-index: 10;
	transform: translateY(-50%);
	opacity: 0;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.hero-center-section.show{
	opacity: 1;
}
.hero-center-section .left-text{
	position: absolute;
	top: -50%;
	left: -20px;
	height: 200%;
	z-index: 1;
    font-family: 'Poppins', sans-serif;
	font-weight: 900;
	text-align: center;    
	-webkit-writing-mode: vertical-lr;
    writing-mode: vertical-lr;
    font-size: 7vw;
    line-height: 1;
    color: rgba(200,200,200,.1);
    background: linear-gradient(90deg, rgba(200,200,200,0), rgba(200,200,200,0.1));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
	line-height: 1;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.hero-center-section.show .left-text{
	left: 0;
}

.z-bigger {
	z-index: 30 !important;
}

.img-wrap {
	position: relative;
	width: 100%;
	overflow: hidden;
	border-radius: 4px;
	box-shadow: 0 3px 5px rgba(0, 0, 0, 0.02);
	display: block;
	transform: scale(1.03);
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.hero-center-section.show .img-wrap{
	transform: scale(1);
}
.img-wrap img {
	width: 100%;
	height: auto;
	display: block;
}

/* #Cursor
================================================== */
.cursor,
.cursor2,
.cursor3{
	position: fixed;
	border-radius: 50%;	
	transform: translateX(-50%) translateY(-50%);
	pointer-events: none;
	left: -100px;
	top: 50%;
	mix-blend-mode: difference;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
	z-index: 9999999;
}
.cursor{
	background-color: var(--white);
	height: 0;
	width: 0;
	z-index: 9999999;
}
.cursor2,.cursor3{
	height: 36px;
	width: 36px;
	z-index:99998;
	-webkit-transition:all 0.3s ease-out;
	transition:all 0.3s ease-out
}
.cursor2.hover,
.cursor3.hover{
	-webkit-transform:scale(2) translateX(-25%) translateY(-25%);
	transform:scale(2) translateX(-25%) translateY(-25%);
	border:none
}
.cursor2{
	border: 2px solid var(--white);
	box-shadow: 0 0 12px rgba(255, 255, 255, 0.2);
}
.cursor2.hover{
	background: rgba(255,255,255,1);
	box-shadow: 0 0 0 rgba(255, 255, 255, 0.2);
}

.link-to-page {
	position: fixed;
    top: 30px;
    right: 30px;
    z-index: 20000;
    cursor: pointer;
    width: 50px;
}
.link-to-page img{
	width: 100%;
	height: auto;
	display: block;
}
.slide-buttons{
	position: relative;
	padding: 0;
	margin: 0 auto;
	text-align: center;
  /* width: 580px; */
  max-width: 100%;
	padding-left: 20px;
	padding-right: 20px;
	list-style: none;
}
.slide-buttons li{
	position: relative;
	padding: 0;
	margin: 0 auto;
	text-align: center;
	margin: 60px 0;
	display: block;
	list-style: none;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.slide-buttons li a{
	position: relative;
	display: inline-block;
    font-family: 'Poppins', sans-serif;
	font-weight: 900;
	font-size: 100px;
	line-height: 1;
	text-transform: uppercase;
	-webkit-text-stroke: 2px var(--white);
    text-stroke: 2px var(--white);
    -webkit-text-fill-color: transparent;
    text-fill-color: transparent;
    color: transparent;
	opacity: 0.3;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.slide-buttons li.active a{
	opacity: 1;
}
.slide-buttons li a:hover{
	text-decoration: none;
}
.slide-buttons li a:focus,
.slide-buttons li a:active{
	border: none;
	outline: none;
	box-shadow: none;
}
.slide-buttons li a::before {
	position: absolute;
	top: 0;
	left: 0;
    font-family: 'Poppins', sans-serif;
	font-weight: 900;
	font-size: 100px;
	line-height: 1;
	overflow: hidden;
	text-transform: uppercase;
	padding: 0;
	max-height: 0;
	-webkit-text-stroke: transparent;
    text-stroke: transparent;
    -webkit-text-fill-color: var(--white);
    text-fill-color: var(--white);
	color: var(--white);
	content: attr(data-hover);
	-webkit-transition: max-height 0.4s;
	-moz-transition: max-height 0.4s;
	transition: max-height 0.4s;
}
.slide-buttons li.active a::before,
.slide-buttons li a:active::before,
.slide-buttons li a:focus::before {
	max-height: 100%;
}


.bottom-right{
	position: fixed;
	bottom: 50px;
	right: 30px;
	z-index: 1000;
}
.switch,
.circle {
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
} 
.switch {
	width: 80px;
	height: 4px;
	border-radius: 27px;
	background-image: linear-gradient(298deg, var(--red), var(--yellow));
	position: relative;
	display: block;
	margin: 0 auto;
	text-align: center;
	opacity: 1;
	transform: translate(0);
    transition: all 300ms linear;
    transition-delay: 1900ms;
}
.circle {
	cursor: pointer;
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	left: 0;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	background: var(--dark-light);
	box-shadow: 0 4px 4px rgba(26,53,71,0.25), 0 0 0 1px rgba(26,53,71,0.07);
}
.circle:hover {
	box-shadow: 0 8px 8px rgba(26,53,71,0.25), 0 0 0 1px rgba(26,53,71,0.07);
}
.circle:before {
	position: absolute;
	font-family: 'unicons';
	content: '\eac1';
	top: 0;
	left: 0;
	z-index: 2;
	font-size: 20px;
	line-height: 40px;
	text-align: center;
	width: 100%;
	height: 40px;
	opacity: 1;
	color: var(--grey);
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.circle:after {
	position: absolute;
	font-family: 'unicons';
	content: '\eb8f';
	top: 0;
	left: 0;
	z-index: 2;
	font-size: 20px;
	line-height: 40px;
	text-align: center;
	width: 100%;
	height: 40px;
	color: var(--yellow);
	opacity: 0;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.switched {
}
.switched .circle {
	left: 40px;
	box-shadow: 0 4px 4px rgba(26,53,71,0.25), 0 0 0 1px rgba(26,53,71,0.07);
	background: var(--dark);
}
.switched .circle:hover {
	box-shadow: 0 8px 8px rgba(26,53,71,0.25), 0 0 0 1px rgba(26,53,71,0.07);
}
.switched .circle:before {
	opacity: 0;
}
.switched .circle:after {
	opacity: 1;
}
body.light{
	background: var(--white);
}
body.light p{
	color: var(--dark-blue);
}
body.light h3{
	color: var(--dark);
}
body.light .cursor,
body.light .cursor2,
body.light .cursor3{
	mix-blend-mode: difference;
	z-index: 9999999 !important;
}
body.light .cursor.hover,
body.light .cursor2.hover,
body.light .cursor3.hover{
}
body.light .cursor{
	background-color: var(--dark-blue);
}
body.light .cursor2{
	height: 16px;
	width: 16px;
	background-color: var(--dark-blue);
	box-shadow: 0 0 12px rgba(0, 0, 0, 0.2);
	mix-blend-mode: difference;
	border-color: transparent;
}
body.light .cursor.hover,
body.light .cursor2.hover,
body.light .cursor3.hover{
	opacity: 0;
}
body.light .cursor2.hover{
	background: rgba(0,0,0,1);
	box-shadow: 0 0 0 rgba(0, 0, 0, 0.2);
}
body.light .slide-buttons li a{
	-webkit-text-stroke: 2px var(--dark-blue);
    text-stroke: 2px var(--dark-blue);
    -webkit-text-fill-color: transparent;
    text-fill-color: transparent;
    color: transparent;
	opacity: 1;
}
body.light .slide-buttons li a::before {
	-webkit-text-stroke: transparent;
    text-stroke: transparent;
    -webkit-text-fill-color: var(--dark-blue);
    text-fill-color: var(--dark-blue);
	color: var(--dark-blue);
}
body.light .hero-center-section.show{
	margit-top: 0;
	opacity: 0.9;
}
body.light .hero-center-section .left-text{
    color: rgba(0,0,0,.16);
    background: linear-gradient(90deg, rgba(0,0,0,0), rgba(0,0,0,0.16)); 
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* #Media
================================================== */


@media (max-width: 1199px) { 
	.hero-center-section .left-text{
		font-size: 13vw;
	}
	.slide-buttons li{
		margin: 50px 0;
	}
	.slide-buttons li a{
		font-size: 80px;
	}
	.slide-buttons li a::before {
		font-size: 80px;
	}	
}

@media (max-width: 991px) { 
	.hero-center-section .left-text{
		font-size: 16vw;
	}
}

@media (max-width: 767px) {
	.cursor,
	.cursor2,
	.cursor3{
		display: none;
	}
	.hero-center-section .left-text{
		display: none;
	}
	.slide-buttons li{
		margin: 40px 0;
	}
	.slide-buttons li a{
		font-size: 60px;
		font-weight: 700;
	}
	.slide-buttons li a::before {
		font-size: 60px;
		font-weight: 700;
	}	
}

@media (max-width: 575px) {
	.slide-buttons li a{
		font-size: 50px;
		font-weight: 700;
	}
	.slide-buttons li a::before {
		font-size: 50px;
		font-weight: 700;
	}	
}



/* Please ❤ this if you like it! */




.block-fluid-main{
  position: relative;
  display: block;
  overflow: hidden;
  width: calc(100% - 40px);
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
  /* max-width: 1140px; */
  padding: 100px 0;
}
.block-row{
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}
.block-row:hover .block-col{
  opacity: 0.1;
}
.block-col{
  position: relative;
  width: 100%;
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%;
  transition: opacity 250ms linear;
}
.block-row .block-col:hover{
  opacity: 1;
}
.block{
  position: relative;
  display: block;
  width: 100%;
  overflow: hidden;
  cursor: pointer;
  padding: 15px;
}
.block-in{
  position: relative;
  display: block;
  width: 100%;
  overflow: hidden;
  border-radius: 6px;
  cursor: pointer;
}
.block-in img{
  display: block;
  width: 100%;
  height: auto;
  transition: transform 250ms linear;
}
.block-col:hover .block-in img{
  transform: scale(1.1) rotate(-3deg);
}

.hover-text{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  z-index: 100;
  pointer-events: none;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  text-align: center;
    -ms-flex-item-align: center;
    align-self: center;
  mix-blend-mode: difference;
}
.hover-text h2{
  font-family: 'Poppins', sans-serif;
  font-weight: 800;
  font-size: 8vw;
  line-height: 1;
  color: #fff;
  opacity: 0;
  transform: scale(0.8);
  transition: transform 250ms linear, opacity 250ms ease;
}
.block-col:hover + .hover-text h2{
  opacity: 1;
  transform: scale(1);
}


.logo {
	position: fixed;
	top: 25px;
	left: 25px;
	display: block;
	z-index: 1000;
	transition: all 250ms linear;
}
.logo img {
	height: 26px;
	width: auto;
	display: block;
	transition: filter 250ms 700ms linear;
}


@media (max-width: 767px) {
  .block-col{
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .hover-text h2{
    font-size: 12vw;
  }
}

</style>
@if (isset($categories))
@foreach ($categories as $category)
<div class="hero-center-section">
		<div class="left-text">{{ $category->name }}</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="img-wrap">
						<img src="{{ asset('images/' . $category->image) }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
	@elseif(isset($subcategories))
	@foreach ($subcategories as $subcategory)
	<div class="hero-center-section">
		<div class="left-text">{{ $subcategory->name }}</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="img-wrap">
						<img src="{{ asset('images/' . $subcategory->image) }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
    @endif
		
	<div class="section padding-top-bottom over-hide z-bigger">
		<ul class="slide-buttons">
		<li class="">
				<a href="{{ url('/') }}" class="hover-target" data-hover="">Главная</a>
			</li>
			@if (isset($categories))
			@foreach ($categories as $category)
			<li class="">
				<a href="{{ route('category.show', ['id' => $category->id]) }}" class="hover-target" data-hover="{{ $category->name }}">{{ $category->name }}</a>
			</li>
	
			@endforeach
			@elseif(isset($subcategories))
			@foreach ($subcategories as $subcategory)
			<li class="">
						<a href="{{ route('subcategory.show', ['id' => $subcategory->id]) }}" class="hover-target" data-hover="{{ $subcategory->name }}">{{ $subcategory->name }}</a>
					</li>
			@endforeach
		</ul>
		

		
		</div>
		@endif
		
		@if(isset($posts))
			<div class="block-fluid-main">
			<div class="block-row">
			@foreach ($posts as $post)
		
			
			<div class="block-col">
			<a href="{{route('post.show',['post' => $post->id]) }}">
				<div class="block">
					<div class="block-in">
						<img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" alt="">
					</div>
				</div>
				</a>
			</div>
			<div class="hover-text">
				<h2>{{$post->title}}</h2>
			</div>
			
			@endforeach
			</div>
			</div>
			@endif
		
	<!-- Page cursor
	================================================== -->
	
	<div class='cursor' id="cursor"></div>
	<div class='cursor2' id="cursor2"></div>
	<div class='cursor3' id="cursor3"></div> 
		
	<!-- Link to page
	================================================== -->


			
	<!-- Dark/light switch
	================================================== -->
	
	<div class="bottom-right">								
		<div class="switch">
			<div class="circle hover-target"></div>
		</div>									
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    





(function($) { "use strict";
	
	//Page cursors

    document.getElementsByTagName("body")[0].addEventListener("mousemove", function(n) {
        t.style.left = n.clientX + "px", 
		t.style.top = n.clientY + "px", 
		e.style.left = n.clientX + "px", 
		e.style.top = n.clientY + "px", 
		i.style.left = n.clientX + "px", 
		i.style.top = n.clientY + "px"
    });
    var t = document.getElementById("cursor"),
        e = document.getElementById("cursor2"),
        i = document.getElementById("cursor3");
    function n(t) {
        e.classList.add("hover"), i.classList.add("hover")
    }
    function s(t) {
        e.classList.remove("hover"), i.classList.remove("hover")
    }
    s();
    for (var r = document.querySelectorAll(".hover-target"), a = r.length - 1; a >= 0; a--) {
        o(r[a])
    }
    function o(t) {
        t.addEventListener("mouseover", n), t.addEventListener("mouseout", s)
    }


	//Switch light/dark
	
	$(".switch").on('click', function () {
		if ($("body").hasClass("light")) {
			$("body").removeClass("light");
			$(".switch").removeClass("switched");
		}
		else {
			$("body").addClass("light");
			$(".switch").addClass("switched");
		}
	});
	
	$(document).ready(function() {	
		
		/* Hero Case study images */			
		
		$('.slide-buttons li:nth-child(1)').on('mouseenter', function() {
			$('.slide-buttons li.active').removeClass('active');
			$('.hero-center-section.show').removeClass("show");
			$('.hero-center-section:nth-child(1)').addClass("show");
			$('.slide-buttons li:nth-child(1)').addClass('active');
		})
		$('.slide-buttons li:nth-child(2)').on('mouseenter', function() {
			$('.slide-buttons li.active').removeClass('active');
			$('.hero-center-section.show').removeClass("show");
			$('.hero-center-section:nth-child(2)').addClass("show");
			$('.slide-buttons li:nth-child(2)').addClass('active');
		})
		$('.slide-buttons li:nth-child(3)').on('mouseenter', function() {
			$('.slide-buttons li.active').removeClass('active');
			$('.hero-center-section.show').removeClass("show");
			$('.hero-center-section:nth-child(3)').addClass("show");
			$('.slide-buttons li:nth-child(3)').addClass('active');
		})
		$('.slide-buttons li:nth-child(4)').on('mouseenter', function() {
			$('.slide-buttons li.active').removeClass('active');
			$('.hero-center-section.show').removeClass("show");
			$('.hero-center-section:nth-child(4)').addClass("show");
			$('.slide-buttons li:nth-child(4)').addClass('active');
		})
		$('.slide-buttons li:nth-child(5)').on('mouseenter', function() {
			$('.slide-buttons li.active').removeClass('active');
			$('.hero-center-section.show').removeClass("show");
			$('.hero-center-section:nth-child(5)').addClass("show");
			$('.slide-buttons li:nth-child(5)').addClass('active');
		})
		$('.slide-buttons li:nth-child(6)').on('mouseenter', function() {
			$('.slide-buttons li.active').removeClass('active');
			$('.hero-center-section.show').removeClass("show");
			$('.hero-center-section:nth-child(6)').addClass("show");
			$('.slide-buttons li:nth-child(6)').addClass('active');
		})
		$('.slide-buttons li:nth-child(1)').trigger('mouseenter')   
		
	});
	
})(jQuery); 
</script>
@endsection
