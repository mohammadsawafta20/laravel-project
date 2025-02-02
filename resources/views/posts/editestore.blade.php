
@extends('layouts.app')

@section('title') Index @endsection

@section('content')


<form method="POST" action="{{route('posts.udpost', $post->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">name</label>
            <input name="name" type="text" value="{{$post->name}}" class="form-control" >
        </div>
        <div class="mb-3">
            <label  class="form-label">email</label>
            <textarea name="job" class="form-control" rows="3">{{$post->email}}</textarea>
        </div>
        <div class="mb-3">
            <label  class="form-label">password</label>
            <input name="phone" type="text" value="{{$post->password}}" class="form-control" >
        </div>
        <div class="mb-3">
        
        </div>

        <button class="btn btn-primary">Update</button>
    </form>

    @endsection