@extends('layouts.app')

@section('content')
<style>
@import url(https://fonts.googleapis.com/css?family=Merriweather:300,900);

*, *:before, *:after{
  box-sizing: border-box;
  font: 300 1em/1.5 'Merriweather', serif; color: #242424;
  padding: 0; margin: 0;
}

html, body{background: rgb(236, 240, 241);}

.content{
  width: 850px; 
  margin: auto;
  margin-bottom: 350px; /* Same height as footer */
  padding: 100px 0;
}
  h1{
    color: #111;
    font-size: 3em;
    font-weight: 900;
    padding: 0 0 20px 0;
  }
  h2{
    color: #111;
    font-size: 2em;
    font-weight: 900;
    padding: 0 0 15px 0;
  }
  p{
    font-size: 1.25em;
    padding: 0 0 40px 0;
  }

.fixed_footer{
  width: 100%;
  height: 350px;
  background: #111;
  position: fixed; left: 0; bottom: 0;
  z-index: -100;
}
   .fixed_footer p{
    color: #696969;
    column-count: 2;
    column-gap: 50px;
    font-size: 1em;
    font-weight: 300;
  }
.py-4 {
 padding: 0;
}
</style>


<main class="content" role="main">
  <h1>{{ $post->title }}</h1>
  <p>{!! $post->body !!}</p>

</main>

<footer class="fixed_footer">
  <div class="content">
 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ducimus nemo quo totam neque quis soluta nisi obcaecati aliquam saepe dicta adipisci blanditiis quaerat earum laboriosam accusamus nesciunt! Saepe ex maxime enim asperiores nisi. Obcaecati nostrum nobis laudantium aliquam commodi veniam magni similique ullam quis pariatur voluptatem harum id error.</p>
  </div>
</footer>


@endsection

  