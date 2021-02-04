@extends('layouts.app')
@section('title')
    {{getSetting('siteName')}}
    ||
الصفحه الرئيسيه
@endsection
@section('header')
    <link href="{{asset('website-design/cus_bu_product/bu_all.css')}}" rel="stylesheet" />
@endsection
@section('content')
<div class="container">
   

<div class="row justify-content-center">

    <div class="col-md-9 col-sm-9">
    @if(isset($user))
     
   <div class="alert alert-danger" style="direction:rtl">
  عرض العقارات التي تم انشائها بواسطه المستخدم {{$user->name}}
   </div>
@endif
    @include('website.bu.shareFileForOneBu')

   <!---------->
</div>
   
    @include('website/bu/pages')
    
    </div>



</div> <!-- row.// -->
 <div class="text-center">
   {{ $bus->links() }}
   
</div>

    </div>
@endsection