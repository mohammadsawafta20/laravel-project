@extends('layouts.app')

@section('title') showstore @endsection

@section('content')
<table class="table mt-4">
        <thead>
        <tr>
           
            <th scope="col">name</th>
            <th scope="col">password</th>
            <th scope="col">email</th>

        </tr>
        </thead>
        <tbody>
       
               @foreach($post as $post)

            <tr>
                        <!-- <td>{{$post->updated_at->format('y-m-d')}}</td> -->

                
                <td>{{$post->name}}</td>
                <td>{{$post->password}}</td>
               <td>{{$post->email}}</td>
              
            
                <td>
                <a href="{{route('posts.editestore', $post->id ,$post->email)}}" class="btn btn-primary">Edit</a> 
       
              </td>
            </tr>
     

    @endforeach
        </tbody>
    </table>


@endsection