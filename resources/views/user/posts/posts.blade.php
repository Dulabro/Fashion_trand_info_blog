@extends('layouts.app')

@section('content')
<style>


/* Post Index */
#postIndex {
  margin: 3em auto;
}

article {
  margin-top: -0.063em;
}

article a {
  display: block;
  padding: 2.374em 2.5em 2.5em 2.5em;
  overflow: hidden;
  border-top: .063em solid #ccc;
  border-bottom: .063em solid #ccc;
}

article a:hover {
  background: #eee;
  border-top: #666 solid .25em;
  padding: 2.187em 2.5em 2.5em 2.5em;
}

.postImg {
  float: left;
  width: 25%;
  box-sizing: border-box;
  padding-right: 2em;
}

.postImg img {
  width: 100%;
}

article a h2 {
  color: #222;
  float: right; 
  width: 75%;
}

article a:hover h2 {
  color: #157EBF;
}

article a p {
  color: #444;
  float: right; 
  width: 75%;
}

article a:hover p {
  color: #222;
}

@media only screen and (max-width: 750px) {
  #postIndex {
    width: 100%;
  }

  article a {
    padding: 2.374em 1.5em 2.5em 1.5em;
  }

  article a:hover {
    padding: 2.187em 1.5em 2.5em 1.5em;
  }
}

@media only screen and (max-width: 481px) {
  .postImg {
    display: none;
  }

  article a p, article a h2 {
    width: 100%;
  }

} 
</style>
<div class="container">
  <section id="postIndex" class="widthWrapper">
  @foreach($posts as $post)
    <article>
      <a href="{{route('post.show',['post' => $post->id]) }}">
        <div class="postImg">
          <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" />
        </div>
        <h2>{{ $post->title }}</h2>
        <p>{!! $post->body !!}</p>
      </a>
    </article>
    @endforeach
  </section> 
</div>
@endsection