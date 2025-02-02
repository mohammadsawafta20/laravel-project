@extends('layouts.app')

@section('title') Edit @endsection

@section('content')

<form method="POST" action="{{route('posts.updatee', $post->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">image</label>
            <input name="name" type="text" value="{{$post->name}}" class="form-control" >
        </div>
        <div class="mb-3">
            <label  class="form-label">post</label>
            <textarea name="job" class="form-control" rows="3">{{$post->job}}</textarea>
        </div>
        <div class="mb-3">
            <label  class="form-label">user name </label>
            <input name="phone" type="text" value="{{$post->phone}}" class="form-control" >
        </div>
        <div class="mb-3">
            <label  class="form-label">gender </label>
            <input name="post1" type="text" value="{{$post->post1}}" class="form-control" >
        </div>
     
        <button class="btn btn-primary">Update</button>
    </form>


@endsection
