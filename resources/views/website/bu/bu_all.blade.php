@extends('layouts.app')
@section('title')
    {{getSetting('siteName')}}
    ||
الصفحه الرئيسيه
@endsection
@section('header')
    <link href="{{asset('website-design/cus_bu_product/bu_all.css')}}" rel="stylesheet" />
    <style>
    
    </style>
  
   
@endsection
@section('content')
<div class="container">
   

<div class="row justify-content-center">

    <div class="col-md-9 col-sm-9">
    @if(isset($array))
        @if(!empty($array))
   <div class="alert alert-danger" style="direction:rtl">
   @foreach($array as $key=>$value)
       @if($key=='bu_rent')
           <a href="{{url('/serach?'.$key.'='.$value)}}">
            {{getname()[$key] ." => ".getvalueofrent()[$value]}}
            </a>
        @elseif($key=='bu_type')
         <a href="{{url('/serach?'.$key.'='.$value)}}">
            {{getname()[$key] ." => ".getvalueoftype()[$value]}}
            </a>
       @else
         <a href="{{url('/serach?'.$key.'='.$value)}}">
             {{getname()[$key] ." => ".$value}}
             </a>
      @endif
   @endforeach
   </div>
@endif
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