@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
    <div class="container-fostrap">
  

    

    </div>
    </div>
    <div class="col-12">
                <a href="posts/create" class="btn btn-primary mb-2">Создать пост</a> 
                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Заголовок</th>
                            <th>Дата публикации</th>
                            <th>Дата создание</th>
                            <th colspan="2">Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ date('Y-m-d', strtotime($post->published_at)) }}</td>
                            <td>{{ date('Y-m-d', strtotime($post->created_at)) }}</td>
                            <td>
                            <a href="posts/{{$post->id}}" class="btn btn-primary">Посмотреть</a>
                            <a href="posts/{{$post->id}}/edit" class="btn btn-primary">Изменить</a>
                            <form action="posts/{{$post->id}}" method="post" class="d-inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Удалить</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
    </div>
</div>
@endsection