
<header>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</header>


<form action="{{route('uploade.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
<center>
    <div class="mb-3">
        <br>
  <label for="formFile" class="form-label"><h5>create post </h5></label>
 
</center> <hr>
  <input class="form-control" name="file_upload"  type="file" id="formFile">
  <input class="form-control form-control-lg"  name="posts" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">

    <button type="submit">Upload</button>
</div>

</form>
