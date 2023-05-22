@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <a href="categories/create" class="btn btn-primary mb-2">Создать Категории</a> 
            <br>
                <div class="panel panel-default">
                 

                    <div class="panel-body">
                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                  


                                            <a href="categories/{{$category->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="categories/{{$category->id}}" method="post" style="display: inline-block;" class="d-inline">  
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection