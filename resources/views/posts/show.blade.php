@extends('layouts.app')

@section('title') Show @endsection

@section('content')
    <div class="card mt-4">
        <div class="card-header">
            Post Info
           
        </div>
        <div class="card-body">
            <center>
            <a class="card-title"><img src="{{asset('/images/'.$post->name)}}" alt="Mountain" width="200px" height="200px"></a>
            <p class="card-text">{{$post->job}}</p>
            <p class="card-text">{{$post->phone}}</p>
</center>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Post Creator Info
        </div>
        <div class="card-body">
            <h5 class="card-title">gender:{{$post->post1}}</h5>
            <p class="card-text">devlop by :mohammad sawafta </p>
           
        </div>
    </div>
@endsection



