@extends('layouts.app')
@section('title')
    {{getSetting('siteName')}}
    ||
صفحه العرض
@endsection
@section('header')
    <link href="{{asset('website-design/cus_bu_product/bu_all.css')}}" rel="stylesheet" />
   
@endsection
@section('content')
<div class="container">
   

<div class="row justify-content-center">
 
    <div class="col-md-9 col-sm-9">
      
    <h4><a href="{{url('/showAllBu')}}">الصفحه الرئيسيه</a></h4>
   
         <div>
          @if($buInfo->bu_image !="" || $buInfo->bu_image !=null)
        <img src="{{showImageIfexists($buInfo->bu_image)}}" class="img-responsive" >
       
    @else
        
        <img src="{{showImageIfexists()}}" class="img-responsive">
    @endif
        </div>     
    <div class="card border-success mx-sm-1 p-3 text-center" style="background-color:#2abb9b">
                <div class="card border-success shadow text-success p-3 my-card "><span class="fa fa-eye" aria-hidden="true" style="color:white"></span></div>
                     <div class="text-success text-center mt-3" style="color:white"><h1>تفاصيل العقار</h1></div>
                <div class="text-success text-center mt-3" style="color:white"><h1>{{$buInfo->bu_name}}</h1></div>
        <div class="text-success text-center mt-3" style="color:white"><h1>  {{App\User::find($buInfo->user_id)->name}}</h1></div>

                <div class="text-success text-center mt-2" style="color:white"><h3>{{$buInfo->bu_place}}</h3></div>
                       <div class="text-success mt-2" style="color:white"><h3>{{$buInfo->bu_price}}</h3></div>
                           <div class="text-success text-center mt-2" style="color:white"><h3>{{$buInfo->bu_meta}}</h3></div>
                             <div class="text-success text-center mt-2" style="color:white"><h3>{{getValueOfRent()[$buInfo->bu_rent]}}</h3></div>
                                <div class="text-success text-center mt-2" style="color:white"><h3>{{getValueOfType()[$buInfo->bu_type]}}</h3></div>
            </div>
              
<div id="googleMap" style="width:100%;height:400px;"></div>
    <div style="margin-top:10px;margin-bottom:10px">
  
  @if(!is_null(Auth::user()))
       @if(Auth::user()->id ==$buInfo->user_id)
             <a href="{{url('/sendRequest/'.$buInfo->id.'/'.Auth::user()->id)}}" onclick="return false;">
         <button class="btn btn-primary" style="width:100%"><h2>هذا العقار خاص بك</h2></button>
        </a>
        @elseif(!checkIfRequestSent(Auth::user()->id,$buInfo->id))
          <a href="{{url('/sendRequest/'.$buInfo->id.'/'.Auth::user()->id)}}">
          <button class="btn btn-primary" style="width:100%"><h2>ارسال طلب معاينه</h2></button>
        </a>
            
        @else
         <a href="{{url('/sendRequest/'.$buInfo->id.'/'.Auth::user()->id)}}" onclick="return false;">
          <button class="btn btn-primary" style="width:100%"><h2>تم ارسال طلب المعاينه من قبل</h2></button>
        </a>
        @endif
  @else

      <a href="{{url('/sendRequest/'.$buInfo->id.'/'.'0')}}" onclick="return false;">
         <button class="btn btn-primary" style="width:100%"><h2>سجل دخولك اولا</h2></button>
        </a>
   @endif
            
    </div>
        <h1 style="margin-top:20px">****** عقارات مشابهه ******</h1>
        @include('website.bu.shareFileForOneBu',['bus'=>$busametype])
  
   
</div>
   
 @include('website/bu/pages')
    
    </div>



</div> <!-- row.// -->
 

  
        
@endsection
@section('footer')
 
<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng({{$buInfo->bu_latitude}},{{$buInfo->bu_langtiude}}),
  zoom:5
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

@endsection