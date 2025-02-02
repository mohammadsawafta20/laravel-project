@extends('master')
@section('contener')

<!--///////////////////////////////////////-->
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
       
        
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
             
              <li class="googleplus"><a href="#"></a></li>
          
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
      
        </div>
      </div>
    </div>
    <br><br>
  </section>
  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="{{asset('/assets/user/images/slider_img3.jpg')}}" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">أفضل العطور النسائية لعام 2024
              </a></h2>
              <p>العديد من النساء يبحثن عن أفضل العطور النسائية لعام 2024 من علامات تجارية عالمية، حيث يمكن اختبارها على المعصم لتحديد كيفية تفاعل رائحتها مع جسدك. يعتمد اختيار العطر المفضل على ذوقكِ الشخصي، وهو قرار يحتاج إلى اهتمام خاص لضمان الثقة والراحة. من الأمور المهمة أيضًا تجربة العطور على بشرتكِ لفترة قصيرة قبل اتخاذ قرار نهائي، ويُفضل طلب عينات من العطور المرغوبة لتسهيل عملية الاختيار.

</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="{{asset('assets/user/images/ch.png')}}" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html"> عطر سي اتش من كارولينا هيريرا تواليت 100 مل Carolina Herrera CH For Men
              </a></h2>
              <p>عطر رجالي مميز شرقي تم اصدارة 2009

تتكون تركيبته العطرية من العشب ، البرغموت ، الجريب فروت ، المكونات الخشبية ، جوزة الطيب ، البنفسج ، الزعفران ، الياسمين ، السكر ، الجلد ، الفانيليا ، الجلد المدبوغ ، العنبر ، خشب الكشمير ، خشب الصندل ونجيل الهند.

يمنحك رائحة عطرية خلابة تصعب مقاومتها.

عطر انيق مناسب لكل الأوقات.</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="{{asset('assets/user/images/waqi.jpg')}}" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html"> فيشي واقي شمس للبشرة الجافة 50 مل</a></h2>
              <p>وصف المنتج
أفضل حماية من أشعة الشمس الضارة UVA و UVB مع عامل الوقاية SPF 50  الذي يتحكّم بلمعان البشرة ويدوم طويلاً
يترك لمسة نهائية جافة من دون لمعة للرجال والنساء أصحاب البشرة المختلطة إلى الدهنية والذين يبحثون عن منتج وقاية من الشمس لا يعطي البشرة مظهرًا لامعًا
تركيبة خالية من البارابين، قليلة التسبّب بالحساسية وقد تمّ اختبارها على البشرة الحسّاسة تحت إشراف أطبّاء الجلد.
لا تتسبّب بظهور الزؤان.
تحتوي على  مياه فيشي الحرارية ذات الخصائص التي تعمل على تلطيف البشرة وتقويتها وتجديدها.
طريقة الاستخدام:

توضع كريم التحكم باللمعان قبل التعرض لأشعة الشمس
توضع بكمية وافرة بشكل مستمر خاصة بعد السباحة او التعرق او التنشيف بمنشفة
</p></div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="{{asset('assets/user/images/sa3a.jpg')}}" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html"> ساعات رولكس النسائية </a></h2>
              <p>الساعات الجديدة لعام ٢٠٢٤
العثور على ساعتك من رولكس
شكّل ساعتك من رولكس</p>
            </div>
          </div>
        </div>
      </div> 
 
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>اكسسوارات رجالي</span></h2>
        
          <div class="latest_post_container">
        
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
              <li>
                
              @foreach($posts as $post)
                <div class="media"> <a href="{{route('electro.contact')}}" class="media-left"> <img alt="" src="{{asset('/images/'.$post->name)}}"> </a>
                  <div class="media-body"> <a href="{{route('electro.contact')}}" class="catg_title">{{$post->job}}</a> </div>
                  @endforeach
                </div>
                            </li>
              
            </ul>
       
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>

  </section> 

  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
              
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
           
            </div>
          </div>
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
          
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                   
                  </li>
                </ul>
                <ul class="spost_nav">
                
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
          
                <ul class="business_catgnav">
                 
                </ul>
                <ul class="spost_nav">
                
                </ul>
              </div>
            </div>
          </div>
          <div class="single_post_content">
            <h2><span>اكسسوارات ستاتي</span></h2>
            <ul class="#">
            <li>
       
       @foreach($users as $user)
              <div  class="#"> <a href="#" class="media-left">
                <div id="contenr"style="  background-color: #f0f8ff		;padding-top: 20px;width: 430px;height: 180px;">
                  <div id="onel" style=" ">

                  <img alt="" style="width: 100px;height: 100px;" src="{{asset($user->file_path.$user->original_name)}}"> </a>
                  </div>
                  <div id="towr" style="">
                  {{$user->posts}}

                  </div>



            
              <div style="width: 400px;padding-top: 15px;"  class="#">  </div>
                </div>
                <hr>
                
      @endforeach
    

            </div>
          </li>
           
             
            </ul>
          </div>
          <div class="single_post_content">
            <div class="single_post_content_left">
              <ul class="business_catgnav">
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
               
              
              </ul>
            </div>
          </div>
        </div>
      </div>
      <br>

      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
          <br>
            <h2><span> ادوات منزلية وتحف</span></h2>
            <ul class="spost_nav">
          
              <div style="color:black;text-align: center;padding-top: 12px;width:" > <a href="#" >
                <div style=" background-color: #f0f8ff		;padding-top: 6px;width: 200px;height: 177;"  >
                 <img style="width:100px;height:100px;" alt="" src="{{asset('/images/breq.png')}}"> </a>
              <div style="padding-left: 11px;padding-top: 15px;padding-bottom:15px;">  <a href="#" >ابريق تسخين ايطالي فقط  <mark>35</mark>شيكل بدل <del>50</del></a>  </div>

               </div >
               <hr style="border-top: 1px dotted  black;">
            
               <div style="color:black;text-align: center;" > <a href="#" >
                <div style=" background-color: #f0f8ff		;padding-top: 11px;width: 200px;height: 180px;"  >
                 <img style="width:100px;height:100px;" alt="" src="{{asset('/images/d2et.jpg')}}"> </a>
              <div style="padding-left: 11px;padding-top: 15px;padding-bottom:15px;">  <a href="#" >   طنجرة ضغط كهربائية 6 لتر 90 شيكل     </a>  </div>

               </div>
               <hr style="border-top: 1px dotted  black;">
            
            <div style="color:black;text-align: center;" > <a href="#" >
             <div style=" background-color: #f0f8ff		;padding-top: 11px;width: 200px;height: 180px;"  >
              <img style="width:100px;height:100px;" alt="" src="{{asset('/images/tost.jfif')}}"> </a>
           <div style="padding-left: 11px;padding-top: 15px;padding-bottom:15px;">  <a href="#" >توست كهربائي بسعر 90 شيكل </a>  </div>

            </div>
                       </ul>
          </div>
       
        
      </div>
    </div>
  </section>
<!--  new posts  -->
<style>

#onel{float:left;width:100px;padding-left:7px;}
#towr{margin:0 auto;width:250px;height: 100px;padding-top:30px;padding-left:25px;}
body {
  background-color:#f0f8ff;
}
#myDIV {
  height:350px;
  display: grid;
  grid-template-columns: auto auto auto auto;
  gap: 10px;
  background-color: #f0f8ff;
  padding: 10px;
  row-gap: 30px;
}
#myDIV div {

  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}
</style> 
<div id="myDIV">
  <div class="item1"><img style="width:100px;height:100px;" alt="" src="{{asset('/images/game.jpg')}}"></div>
  <div class="item2"><img style="width:100px;height:100px;" alt="" src="{{asset('/images/sofag.jpg')}}"></div>
  <div class="item3"><img style="width:100px;height:100px;" alt="" src="{{asset('/images/mqiaj.jfif')}}"></div>
  <div class="item4"><img style="width:100px;height:100px;" alt="" src="{{asset('/images/bag.jpg')}}"></div>
  <div class="item5"><img style="width:100px;height:100px;" alt="" src="{{asset('/images/jebs2.jfif')}}"></div>
  <div class="item6"><img style="width:100px;height:100px;" alt="" src="{{asset('/images/breq.png')}}"></div>
  <div class="item6"><img style="width:100px;height:100px;" alt="" src="{{asset('/images/tost.jfif')}}"></div>
  <div class="item6"><img style="width:100px;height:100px;" alt="" src="{{asset('/images/jebs.jpg')}}"></div>
</div>
<!--end new posts -->
  @endsection