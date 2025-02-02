@extends('layouts.app')

@section('title') Index @endsection

@section('content')
    <div class="text-center">
        <a href="{{route('posts.create')}}" class="btn btn-success">Create Post</a>

      
    </div>

    <table class="table mt-4">
        <thead>
        <tr>
           
            <th scope="col">image</th>
            <th scope="col">post</th>
            <th scope="col">user name</th>
            <th scope="col">gender</th>

        </tr>
        </thead>
        <tbody>
       


        <form action="{{ route('electro.search') }}" method="GET">
    <input type="text" name="search" placeholder="Search user name">
    <button type="submit">Search</button>
</form>



               @foreach($poo as $post)

            <tr>
         
                <td><img src="{{asset('/images/'.$post->name)}}" alt="Mountain" width="50px" height="50px">
</td>
                <td>{{$post->job}}</td>
               <!-- <td>{{$post->updated_at->format('y-m-d')}}</td> -->
               <td>{{$post->phone}}</td>
               <td>{{$post->post1}}</td>
            
                <td>
                    
                
                    <a href="{{route('posts.show', $post->id)}}" class="btn btn-info">View</a>
                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Edit</a>

                    <form style="display: inline;" method="POST" action="{{route('posts.destroy', $post->id)}}">
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



