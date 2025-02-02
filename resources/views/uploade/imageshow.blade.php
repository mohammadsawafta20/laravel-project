
@extends('layouts.app')

@section('title') imageshow @endsection

@section('content')

<a href="{{route('uploade.create')}}" class="btn btn-success">Create Post</a>

<table class="table mt-4">


        <thead>
        <tr>
         
            <th scope="col">imageView</th>
           
            <th scope="col">posts</th>

        </tr>
        </thead>
        <tbody>
       


        @foreach($users as $user)
            <tr>
        
                <td>
                    <img src="{{asset($user->file_path.$user->original_name)}}" alt="Mountain" width="50px" height="50px">

</td>
                <td>  {{$user->create_at}}</td>
             
                <td> {{$user->posts}}</td>
    
       
    
                <td>
                    
                

                    <a href="{{route('uploade.edit', $user->id)}}" class="btn btn-primary">Edit</a>

                    <form style="display: inline;" method="POST" action="{{route('uploade.destroy', $user->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </td>
            </tr>
     
            @endforeach

        </tbody>
    </table>


@endsection