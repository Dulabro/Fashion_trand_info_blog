@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        
        

           

                    <a href="subcategories/create" class="btn btn-primary mb-2">Создать Подкатегорию</a> 
                    @if(count($subcategories) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Category') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subcategories as $subcategory)
                                    <tr>
                                        <td>{{ $subcategory->name }}</td>
                                        <td>{{ $subcategory->category->name }}</td>
                                        <td>

                                        <a href="subcategories/{{$subcategory->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                                        
                                        <form action="subcategories/{{$subcategory->id}}" method="post" style="display: inline-block;" class="d-inline">  
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('{{ __('Are you sure you want to delete this subcategory?') }}')">{{ __('Delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>{{ __('No subcategories found.') }}</p>
                    @endif
        
        </div>
    </div>
</div>
@endsection