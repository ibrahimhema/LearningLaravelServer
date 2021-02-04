<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    

    <title>
    موقع عقارات |
        @yield('title')
       
    </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>One</title>
<link href="{{asset('website-design/css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{asset('website-design/css/flexslider.css')}}" rel="stylesheet" />
<link href="{{asset('website-design/css/style.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('website-design/css/font-awesome.min.css')}}">
<script src="{{asset('website-design/js/jquery.min.js')}}"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>

   @yield('header')
   
</head>
<body style="direction:rtl">



            <div class="header">
              <div class="container"> <a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-paper-plane"></i> عقار</a>
                <div class="menu"> <a class="toggleMenu" href="#"><img src="website-design/images/nav_icon.png" alt="" /> </a>
                  <ul class="nav" id="nav">
                    <li class="current"><a href="{{url('/')}}">الصفحه الرئيسيه</a></li>
                    <li><a href="{{url('/contact')}}"> اتصل بنا</a></li>
                   <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    ايجار <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @foreach(getValueOftype() as $key=>$value)
                                    <a class="dropdown-item" href="{{ url('/serach?bu_rent=0&bu_type='.$key) }}">
                                        {{ __($value) }}
                                    </a>
                                    @endforeach    
                                </div>
                                     
                                   
                            </li>
                    <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    تمليك <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @foreach(getValueOftype() as $key=>$value)
                                    <a class="dropdown-item" href="{{ url('/serach?bu_rent=1&bu_type='.$key) }}">
                                        {{ __($value) }}
                                    </a>
                                    @endforeach    
                                </div>
                                     
                                   
                            </li>
                         <li><a href="{{url('/showAllBu')}}"> كل العقارات</a></li>
                           @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('تسجيل عضويه جديده') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    <div class="clear"></div>
                  </ul>
                  
                </div>
              </div>
            </div>
   
     
          
              

              

        <main class="py-4">
         
            @yield('content')
        </main>
            
    
    </div>

            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- firstAd -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-8112446552917199"
                 data-ad-slot="2885500673"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
    <!-- footer start -->
    <div class="footer">
  <div class="footer_bottom">
    <div class="follow-us"> <a class="fa fa-facebook social-icon" href=" {{getSetting('facebook')}}"></a> <a class="fa fa-twitter social-icon" href=" {{getSetting('twitter')}}"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
    <div class="copy">
      <p>حقوق الملكيه &copy; 2020 ( {{getSetting('siteName')}} ). Devloped by <a href=" {{getSetting('facebook')}}" rel="nofollow">Ibrahim Farag</a></p>
    </div>
  </div>

</div>
    <!-- footer end -->
     <script type="text/javascript" src="{{asset('website-design/js/responsive-nav.js')}}"></script>
            
        <script src="{{asset('website-design/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('website-design/js/jquery.flexslider.js')}}"></script>

    @yield('footer')


</body>
</html>
