@extends('layouts.admin')

@section('content')
<form method="POST" action="" enctype="multipart/form-data">
    @csrf

    <select id="post" class="form-control @error('post_id') is-invalid @enderror" name="post_id" required>
                                    <option value="">Select a post</option>
                                    @foreach($posts as $post)
                                        <option value="{{ $post->id }}" {{ old('post') == $post->id ? 'selected' : '' }}>{{ $post->name }}</option>
                                    @endforeach
                                </select>

    <div class="form-group">
        <label for="photos">Photos</label>
        <input type="file" name="photos[]" class="form-control-file" id="photos" multiple>
    </div>

    <button type="submit" class="btn btn-primary">Create Post</button>
</form>
@endsection