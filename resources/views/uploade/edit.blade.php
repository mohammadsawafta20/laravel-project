@extends('layouts.app')

@section('title') Index @endsection

@section('content')

<form method="POST" action="{{route('uploade.uploood', $post->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">old name image </label>
            <input name="tname" type="text" value="{{$post->filename}}" class="form-control" >
        </div>
        <div class="mb-3">
            <label  class="form-label">new name image</label>
            <textarea name="name" class="form-control" rows="3">{{$post->original_name}}</textarea>
        </div>
        <div class="mb-3">
            <label  class="form-label"> path </label>
            <input name="path" type="text" value="{{$post->file_path}}" class="form-control" >
        </div>
        <div class="mb-3">
        <label  class="form-label">posts   </label>
        <input name="posts" type="text" value="{{$post->posts}}" class="form-control" >
        </div>

        <button class="btn btn-primary">Update</button>
    </form>

    @endsection