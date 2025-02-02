
<!DOCTYPE html>
<html>
<head>
    <title>the page user ::</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div>
welcome : {{$email}} <br>
<center>
   <a href="{{ route('auth.login') }}"><h5>Sign out</h5></a>
</center>

</div>
<div>
<hr>
<a href="{{ route('posts.index') }}">   <h2>table news </h2></a>
<br>
<a href="{{ route('uploade.imageshow') }}"> <h2>table all post </h2></a>
<hr>
<a href="{{ route('posts.regester') }}"><h5>add new user </h5></a>
<br>
<a href="{{ route('posts.showstore') }}"><h5>add new user </h5></a>

</div>
<div >

</div>

</div>
</body>

</html>