@extends('layouts.app')
@section('title')
    {{getSetting('siteName')}}
    ||
صفحه اضافه عقار
@endsection
@section('header')
     <link href="{{asset('website-design/cus_bu_product/bu_all.css')}}" rel="stylesheet" />
   
@endsection
@section('content')
<div class="container">
   

<div class="row justify-content-center">
 
    <div class="col-md-9 col-sm-9">
      
    <h4><a href="{{url('/showAllBu')}}">الصفحه الرئيسيه</a></h4>
   
         <div>تمت الاضافه بنجاح</div>
         <div class="alert alert-success">تمت الاضافه بنجاح</div>
  
   
</div>
   
 @include('website/bu/pages')
    
    </div>



</div> <!-- row.// -->
 

  
        
@endsection
@section('footer')
@endsection