@extends('layouts.app')

@section('title') add new post @endsection

@section('content')

<h1>Create Post</h1>
 <hr>

    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <div class="mb-3">

            <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                        <button type="submit" class="btn btn-success"  >uploade</button>

                    </div>
            <!-- <input name="name" type="text" placeholder="name user " maxlength="250" class="form-control" value="" > -->
        </div>
        @error('name')
     <div class="alert alert-danger">{{ $message }}</div>
 @enderror

        <div class="mb-3">
            <label  class="form-label">post news:</label>
            <textarea name="job" maxlength="250" placeholder="jobs user" class="form-control"  rows="3" ></textarea>
        </div>
        @error('job')
     <div class="alert alert-danger">{{ $message }}</div>
 @enderror
        <div class="mb-3">
            <label class="form-label">name user:</label>
            <input name="phone" type="text" maxlength="500" placeholder="user name" class="form-control" value="" >
        </div>
        @error('phone')
     <div class="alert alert-danger">{{ $message }}</div>
 @enderror
        <div class="mb-3">
            <label  class="form-label">Gender </label>
            <select name="post1" class="form-control">
                <option  value="male">male</option>
                <option value="female">female</option>
            </select>
        </div>
  <hr>

  <hr>
       
        <button class="btn btn-success"  >add</button>
    </form>


@endsection
