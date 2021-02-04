@extends('layouts.app')

@section('title')
   {{getSetting('siteName')}}
@endsection
@section('header')
<link rel="stylesheet" href="{{asset('website-design/main/css/reset.css')}}"> <!-- CSS reset -->
	<link rel="stylesheet" href="{{asset('website-design/main/css/style.css')}}"> <!-- Resource style -->
	<script src="{{asset('website-design/main/js/modernizr.js')}}"></script>
@endsection
@section('content')
    
    <div class="banner text-center">
  <div class="container">
    <div class="banner-info">
      <h1>{{getSetting('siteName')}}</h1>
         <form class="form-search-in-bu" action="{{url('/serach')}}" method="GET">
       @csrf
        <div class="row text-center" style="margin-bottom:10px">
        
             <div class="col-md-4 col-sm-4 col-xs-12">
             <input type="text"  class="form-control" name="bu_price" placeholder="ادخل السعر"/>
     </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <input id="bu_square" type="text" class="form-control" name="bu_square" placeholder="ادخل المساحه">
     </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
         <select id="bu_type" class="form-control " name="bu_type" >
                                <option value="0">شقه</option>
                                <option value="1">فيلا</option>
                                <option value="2">شاليه</option>
         </select>
     </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-6 col-xs-12">
            <select id="bu_rent"  class="form-control" name="bu_rent">
                                <option value="0">ايجار</option>
                                <option value="1">تمليك</option>
                                </select>
        </div>
            <div class="col-sm-6 col-xs-12">
            <button type="submit" class="btn btn-primary">
                                    {{"بحث في العقارات"}}
                                </button>
        </div>
        </div>
         </form>
    
      <a class="banner_btn" href="{{url('/user/add')}}">اضافه عقار</a> </div>
  </div>
</div>
    <div class="main">
    <div class="content_white">
      <h2>خدمات العقارات</h2>
      <p style="margin-top:10px">كل العقارات بجميع الاسعار والمساحات والانواع فيلا او شقه او شاليه .كل ما تريد ستجده هنا</p>
    </div>
    <ul class="cd-items cd-container">
    @foreach(App\Bu::where('bu_status',1)->get() as $bu)
		<li class="cd-item">
		
             @if($bu->bu_image !="" || $bu->bu_image !=null)
        <img src="{{showImageIfexists($bu->bu_image)}}" alt="Item Preview">
       
    @else
        
        <img src="{{showImageIfexists()}}" alt="Item Preview">
      
    @endif
    
			<a href="#0" data-id="{{$bu->id}}"  class="cd-trigger">اعرض المزيد</a>
		</li> <!-- cd-item -->

	@endforeach
		
	</ul> <!-- cd-items -->
<div class="cd-quick-view">
		<div class="cd-slider-wrapper">
			<ul class="cd-slider">
				<li class="selected"><img src="website-design/main/img/item-1.jpg" class="imagebox" alt="Product 1"></li>
				
			</ul> <!-- cd-slider -->

			<!-- cd-slider-navigation -->
		</div> <!-- cd-slider-wrapper -->

		<div class="cd-item-info">
			<h2 class="product-title"></h2>
			<p class="product-dis"></p>

			<ul class="cd-item-action">
				<li class="pricebox"></li>					
				<li><a class="learnMore" href="#0">اعرف المزيد</a></li>	
			</ul> <!-- cd-item-action -->
		</div> <!-- cd-item-info -->
		<a href="#0" class="cd-close">Close</a>
	</div> <!-- cd-quick-view -->
<div class="about-info">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="block-heading-two">
          <h2><span>عن الشركه</span></h2>
        </div>
        <p style="line-height:30px"> شركه متخصصه في مجال العقارات انشاءت في عام 1997 ونقوم بعرض جميع العقارات كل الانواع والاسعار حسب امكانيات
        العميل شركه متخصصه في مجال العقارات انشاءت في عام 1997 ونقوم بعرض جميع العقارات كل الانواع والاسعار حسب
        امكانيات العميل </p>
        <br>
        <p style="line-height:30px"> شركه متخصصه في مجال العقارات انشاءت في عام 1997 ونقوم بعرض جميع العقارات كل الانواع والاسعار حسب امكانيات
        العميل شركه متخصصه في مجال العقارات انشاءت في عام 1997 ونقوم بعرض جميع العقارات كل الانواع والاسعار حسب
        امكانيات العميل </p>
        <a class="banner_btn" href="about.html">Read More</a> </div>
      <div class="col-md-4">
        <div class="block-heading-two">
          <h3><span>مميزات الشركه </span></h3>
        </div>
        <div class="panel-group" id="accordion-alt3">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3"> <i class="fa fa-angle-right"></i>بعرض جميع العقارات كل الانواع والاسعار حسب امكانيات</a> </h4>
            </div>
            <div id="collapseOne-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3"> <i class="fa fa-angle-right"></i> بعرض جميع العقارات كل الانواع والاسعار حسب امكانيات</a> </h4>
            </div>
            <div id="collapseTwo-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3"> <i class="fa fa-angle-right"></i> بعرض جميع العقارات كل الانواع والاسعار حسب امكانيات </a> </h4>
            </div>
            <div id="collapseThree-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3"> <i class="fa fa-angle-right"></i> بعرض جميع العقارات كل الانواع والاسعار حسب امكانيات</a> </a> </h4>
            </div>
            <div id="collapseFour-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="highlight-info">
  <div class="overlay spacer">
    <div class="container text-center">
      <div class="row text-center">
        <div class="col-sm-4 col-xs-6"> <i class="fa fa-smile-o fa-5x"></i>
          <h4>120+ عميل لدينا</h4>
        </div>
        <div class="col-sm-4 col-xs-6"> <i class="fa fa-check-square-o fa-5x"></i>
          <h4>600+ عمليات بيع</h4>
        </div>
        
        <div class="col-sm-4 col-xs-6"> <i class="fa fa-map-marker fa-5x"></i>
          <h4>3 مكاتب</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="testimonial-area">
  <div class="testimonial-solid">
    <div class="container">
      <h2>اراء العملاء</h2>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class=""> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic" data-slide-to="2" class=""> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic" data-slide-to="3" class=""> <a href="#"></a> </li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <p>شركه متخصصه في مجال العقارات انشاءت في عام 1997 ونقوم بعرض جميع العقارات كل الانواع والاسعار حسب امكانيات
        العميل شركه متخصصه في مجال العقارات انشاءت في عام 1997 ونقوم بعرض جميع العقارات كل الانواع والاسعار حسب
        امكانيات العميل</p>
            <p><strong>- John Doe -</strong></p>
          </div>
          <div class="item">
             <p>شركه متخصصه في مجال العقارات انشاءت في عام 1997 ونقوم بعرض جميع العقارات كل الانواع والاسعار حسب امكانيات
        العميل شركه متخصصه في مجال العقارات انشاءت في عام 1997 ونقوم بعرض جميع العقارات كل الانواع والاسعار حسب
        امكانيات العميل</p>
            <p><strong>- Jane Doe -</strong></p>
          </div>
          <div class="item">
  <p>شركه متخصصه في مجال العقارات انشاءت في عام 1997 ونقوم بعرض جميع العقارات كل الانواع والاسعار حسب امكانيات
        العميل شركه متخصصه في مجال العقارات انشاءت في عام 1997 ونقوم بعرض جميع العقارات كل الانواع والاسعار حسب
        امكانيات العميل</p>            <p><strong>- John Smith -</strong></p>
          </div>
          <div class="item">
  <p>شركه متخصصه في مجال العقارات انشاءت في عام 1997 ونقوم بعرض جميع العقارات كل الانواع والاسعار حسب امكانيات
        العميل شركه متخصصه في مجال العقارات انشاءت في عام 1997 ونقوم بعرض جميع العقارات كل الانواع والاسعار حسب
        امكانيات العميل</p>            <p><strong>- Linda Smith -</strong></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('footer')
    <script src="{{asset('website-design/main/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('website-design/main/js/velocity.min.js')}}"></script>
    <script>
        function urlhome(){
            return "{{Request::root()}}";
        }
        function noUrlimage(){
            return "{{Request::root().getSetting('no-image')}}";
        }
    </script>
<script src="{{asset('website-design/main/js/main.js')}}"></script> 
@endsection