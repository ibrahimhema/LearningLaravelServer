@extends('layouts.app')
@section('title')
    {{getSetting('siteName')}}
    ||
 اضافه عقار
@endsection
@section('header')
     <link href="{{asset('website-design/cus_bu_product/bu_all.css')}}" rel="stylesheet" />
   
@endsection
@section('content')
<div class="container">
   

<div class="row justify-content-center">
 
    <div class="col-md-9 col-sm-9">
      
    <h4><a href="{{url('/showAllBu')}}">الصفحه الرئيسيه</a></h4>
   

        <form method="POST" action="{{ url('/user/store')}}" enctype="multipart/form-data">
        
           @csrf

                        <div class="form-group row text-center">
                            <label for="name" class="col-sm-5 col-form-label text-center  pull-right">{{ __('اسم العقار') }}</label>

                            <div class="col-sm-5">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="bu_name" value="{{ old('bu_name') }}" required autocomplete="name" autofocus>

                                @error('bu_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <label for="bu_rooms" class="col-sm-5 col-form-label text-center  pull-right">{{ __('عدد الغرف') }}</label>

                            <div class="col-sm-5">
                                <input id="bu_rooms" type="text" class="form-control @error('bu_rooms') is-invalid @enderror" name="bu_rooms" value="{{ old('bu_rooms') }}" required autocomplete="bu_rooms">

                                @error('bu_rooms')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <label for="bu_price" class="col-sm-5 col-form-label text-center  pull-right">{{ __('سعر العقار') }}</label>

                            <div class="col-sm-5">
                                <input id="bu_price" type="text" class="form-control @error('bu_price') is-invalid @enderror" name="bu_price" required autocomplete="bu_price">

                                @error('bu_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 <div class="form-group row text-center">
                            <label for="bu_image" class="col-sm-5 col-form-label text-center  pull-right">{{ __('صوره العقار') }}</label>

                            <div class="col-sm-5">
                                <input id="bu_image" type="file" class="form-control @error('bu_image') is-invalid @enderror" name="bu_image" value=''>

                                @error('bu_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       <div class="form-group row text-center">
                            <label for="bu_rent" class="col-sm-5 col-form-label text-center  pull-right">{{ __(' ايجار ام لا') }}</label>

                            <div class="col-sm-5">
                                <select id="bu_rent"  class="form-control @error('bu_rent') is-invalid @enderror" name="bu_rent">
                                <option value="0">ايجار</option>
                                <option value="1">تمليك</option>
                                </select>
                                @error('bu_rent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            
                            <div class="form-group row text-center">
                            <label for="bu_square" class="col-sm-5 col-form-label text-center  pull-right">{{ __('مساحه العقار') }}</label>

                            <div class="col-sm-5">
                                <input id="bu_square" type="text" class="form-control @error('bu_square') is-invalid @enderror" name="bu_square" required autocomplete="bu_square">

                                @error('bu_square')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            
                            
                            
                            <div class="form-group row text-center">
                            <label for="bu_type" class="col-sm-5 col-form-label text-center  pull-right">{{ __('نوع العقار') }}</label>

                            <div class="col-sm-5">
                               
                                <select id="bu_type" class="form-control @error('bu_type') is-invalid @enderror" name="bu_type" required autocomplete="bu_type">
                                <option value="0">شقه</option>
                                <option value="1">فيلا</option>
                                <option value="2">شاليه</option>
                                </select>
                                @error('bu_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                             <div class="form-group row text-center">
                            <label for="bu_place" class="col-sm-5 col-form-label text-center  pull-right">{{ __('مكان العقار') }}</label>

                            <div class="col-sm-5">
                               
                                <select id="bu_place" class="form-control @error('bu_place') is-invalid @enderror" name="bu_place">
                                    <option value="assuit" >assuit</option>
                                    <option value="ابانوب" >ابانوب</option>
                                    <option value="أبوتيج"  >أبوتيج</option>
                                    <option value="الاباديري">الاباديري</option>
                                    <option value="العوامر">العوامر</option>
                                    <option value="اسيوط الجديده" >اسيوط الجديده</option>
                                    <option value="اسيوط">اسيوط</option>
                                    <option value="بني حسين" >بني حسين</option>
                                    <option value="دايروت" >دايروت</option>
                                    <option value="درونكه" >درونكه</option>
                                    <option value="الفتح">الفتح</option>
                                    <option value="الغنايم"{>الغنايم</option>
                                    <option value="القوصية" >القوصية</option>
                                    <option value="الزاويه" >الزاويه</option>
                                    <option value="منفلوط" >منفلوط</option>
                                    <option value="منقباد" >منقباد</option>
                                    <option value="ريفه" >ريفه</option>
                                    <option value="ساحل سليم">ساحل سليم</option>
                                    <option value="صرفه" >صرفه</option>
                                </select>
                                @error('bu_place')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            
                             <div class="form-group row text-center">
                            <label for="bu_small_dis" class="col-sm-5 col-form-label text-center  pull-right">{{ __(' وصف قصير للعقار') }}</label>

                            <div class="col-sm-5">
                                <input id="bu_small_dis" type="textarea"  class="form-control @error('bu_small_dis') is-invalid @enderror" name="bu_small_dis" required autocomplete="bu_small_dis">

                                @error('bu_small_dis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            
                            
                             <div class="form-group row text-center">
                            <label for="bu_meta" class="col-sm-5 col-form-label text-center  pull-right">{{ __('معلومات عن العقار ') }}</label>

                            <div class="col-sm-5">
                                <input id="bu_meta" type="textarea" class="form-control @error('bu_meta') is-invalid @enderror" name="bu_meta" required autocomplete="bu_meta">

                                @error('bu_meta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            
                            
                             <div class="form-group row text-center">
                            <label for="bu_langtiude" class="col-sm-5 col-form-label text-center  pull-right">{{ __('خط العرض ') }}</label>

                            <div class="col-sm-5">
                                <input id="bu_langtiude" type="text" class="form-control @error('bu_langtiude') is-invalid @enderror" name="bu_langtiude" required autocomplete="bu_langtiude">

                                @error('bu_langtiude')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            
                            
                             <div class="form-group row text-center">
                            <label for="bu_latitude" class="col-sm-5 col-form-label text-center  pull-right">{{ __('خط الطول') }}</label>

                            <div class="col-sm-5">
                                <input id="bu_latitude" type="text" class="form-control @error('bu_latitude') is-invalid @enderror" name="bu_latitude" required autocomplete="bu_latitude">

                                @error('bu_latitude')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="form-group row text-center">
                            <label for="bu_long_dis" class="col-sm-5 col-form-label text-center  pull-right">{{ __('وصف طويل للعقار') }}</label>

                            <div class="col-sm-5">
                                <input id="bu_long_dis" type="textarea" class="form-control @error('bu_long_dis') is-invalid @enderror" name="bu_long_dis" required autocomplete="bu_long_dis">

                                @error('bu_long_dis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                        
                            <div class="col-sm-5 offset-sm-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('حفظ العقار') }}
                                </button>
                            </div>
                        </div>
         </form>
  
  
   
</div>
   
 @include('website/bu/pages')
    
    </div>



</div> <!-- row.// -->
 

  
        
@endsection
@section('footer')
@endsection