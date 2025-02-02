<!DOCTYPE html>
<html>
<head>
<title> Alkenan </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('/assets/user/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/assets/user/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/assets/user/css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/assets/user/css/font.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/assets/user/css/li-scroller.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/assets/user/css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/assets/user/css/jquery.fancybox.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/assets/user/css/theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/assets/user/css/style.css')}}">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>


<div id="preloader">
  <div id="status">&nbsp;</div>
</div>

<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
         
            <li><a href="#">تحف وهداية</a></li>
            <li><a href="#">رجالي</a></li>
             <li><a href="#">ستاتي</a></li>
             <li><a href="{{route('electro.contact')}}">الاتصال</a></li>
             <li><a href="{{route('electro.index')}}">الرئيسية</a></li>
            </ul>
          </div>
          <div>

          <div class="header_top_right">
          <a href="#"> <img src="{{asset('/images/white.jfif')}}" alt=""  width=30px; hight=40px;   style="padding-top: 10px;"
           ></a>
          </div>
        </div>
      </div>
     
    </div>
  </header>

<!-- end header-->
@yield('contener')
<!-- top footer-->
<footer id="footer">
    <div class="footer_bottom">
      <center>
      <p style="color:white;"> Mohammad sawafta ::ALKENAN::</p>

</center>
    </div>
  </footer>
</div>
<script src="{{asset('/assets/user/js/jquery.min.js')}}"></script> 
<script src="{{asset('/assets/user/js/wow.min.js')}}"></script> 
<script src="{{asset('/assets/user/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('/assets/user/js/slick.min.js')}}"></script> 
<script src="{{asset('/assets/user/js/jquery.li-scroller.1.0.js')}}"></script> 
<script src="{{asset('/assets/user/js/jquery.newsTicker.min.js')}}"></script> 
<script src="{{asset('/assets/user/js/jquery.fancybox.pack.js')}}"></script> 
<script src="{{asset('/assets/user/js/custom.js')}}"></script>
</body>
</html>