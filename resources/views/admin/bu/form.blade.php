
                       @csrf
              
            @if($bu !=null)
                  <div class="form-group row text-center">
                            <label for="name" class="col-sm-5 col-form-label text-center  pull-right">{{ __('اسم العقار') }}</label>

                            <div class="col-sm-5">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="bu_name" value="{{ $bu->bu_name}}" required autocomplete="name" autofocus>

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
                                <input id="bu_rooms" type="text" class="form-control @error('bu_rooms') is-invalid @enderror" name="bu_rooms" value="{{ $bu->bu_rooms }}" required autocomplete="bu_rooms">

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
                                <input id="bu_price" type="text" class="form-control @error('bu_price') is-invalid @enderror" name="bu_price" value="{{ $bu->bu_price }}" required autocomplete="bu_price">

                                @error('bu_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                           
                            @if(isset($bu->bu_image) && $bu->bu_image !='')
                                
                               
                            <div class="form-group row text-center">
                            <label for="bu_price" class="col-sm-5 col-form-label text-center  pull-right">{{ __('صوره العقار') }}</label>

                            <div class="col-sm-5">
                                 <img src="{{Request::root().'/website-design/bu-images/'.$bu->bu_image}}" style="width:100px">
                                   
                            </div>
                        </div>
                            
                                 @endif
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
                                <option value="0" {{$bu->bu_rent==0?'selected':''}}>ايجار</option>
                                <option value="1" {{$bu->bu_rent==1?'selected':''}}>تمليك</option>
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
                                <input id="bu_square" type="text" class="form-control @error('bu_square') is-invalid @enderror" name="bu_square" value="{{ $bu->bu_square }}" required autocomplete="bu_square">

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
                                <option value="0" {{$bu->bu_type==0?'selected':''}}>شقه</option>
                                <option value="1" {{$bu->bu_type==1?'selected':''}}>فيلا</option>
                                <option value="2" {{$bu->bu_type==2?'selected':''}}>شاليه</option>
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
                               
                                <select id="bu_place" class="form-control @error('bu_type') is-invalid @enderror" name="bu_place">
                                <option value="assuit">assuit</option>
                                    <option value="assuit" {{$bu->bu_place=='assuit'?'selected':''}}>assuit</option>
                                    <option value="ابانوب" {{$bu->bu_place=='ابانوب'?'selected':''}}>ابانوب</option>
                                    <option value="أبوتيج" {{$bu->bu_place=='أبوتيج'?'selected':''}} >أبوتيج</option>
                                    <option value="الاباديري"{{$bu->bu_place=='الاباديري'?'selected':''}} >الاباديري</option>
                                    <option value="العوامر"{{$bu->bu_place=='العوامر'?'selected':''}} >العوامر</option>
                                    <option value="اسيوط الجديده"{{$bu->bu_place=='اسيوط الجديده'?'selected':''}} >اسيوط الجديده</option>
                                    <option value="اسيوط"{{$bu->bu_place=='اسيوط'?'selected':''}} >اسيوط</option>
                                    <option value="بني حسين"{{$bu->bu_place=='بني حسين'?'selected':''}} >بني حسين</option>
                                    <option value="دايروت"{{$bu->bu_place=='دايروت'?'selected':''}} >دايروت</option>
                                    <option value="درونكه"{{$bu->bu_place=='درونكه'?'selected':''}} >درونكه</option>
                                    <option value="الفتح"{{$bu->bu_place=='الفتح'?'selected':''}} >الفتح</option>
                                    <option value="الغنايم"{{$bu->bu_place=='الغنايم'?'selected':''}} >الغنايم</option>
                                    <option value="القوصية"{{$bu->bu_place=='القوصية'?'selected':''}} >القوصية</option>
                                    <option value="الزاويه"{{$bu->bu_place=='الزاويه'?'selected':''}} >الزاويه</option>
                                    <option value="منفلوط"{{$bu->bu_place=='منفلوط'?'selected':''}} >منفلوط</option>
                                    <option value="منقباد"{{$bu->bu_place=='منقباد'?'selected':''}} >منقباد</option>
                                    <option value="ريفه"{{$bu->bu_place=='ريفه'?'selected':''}} >ريفه</option>
                                    <option value="ساحل سليم"{{$bu->bu_place=='ساحل سليم'?'selected':''}} >ساحل سليم</option>
                                    <option value="صرفه"{{$bu->bu_place=='صرفه'?'selected':''}} >صرفه</option>
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
                                <input id="bu_small_dis" type="textarea"  class="form-control @error('bu_small_dis') is-invalid @enderror" value ="{{$bu->bu_small_dis}}" name="bu_small_dis" required autocomplete="bu_small_dis">

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
                                <input id="bu_meta" type="textarea" class="form-control @error('bu_meta') is-invalid @enderror" name="bu_meta" value ="{{$bu->bu_meta}}" required autocomplete="bu_meta">

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
                                <input id="bu_langtiude" type="text" class="form-control @error('bu_langtiude') is-invalid @enderror" name="bu_langtiude" required value ="{{$bu->bu_langtiude}}" autocomplete="bu_langtiude">

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
                                <input id="bu_latitude" type="text" class="form-control @error('bu_latitude') is-invalid @enderror" name="bu_latitude" required value ="{{$bu->bu_latitude}}" autocomplete="bu_latitude">

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
                                <input id="bu_long_dis" type="textarea" class="form-control @error('bu_long_dis') is-invalid @enderror" name="bu_long_dis" value ="{{$bu->bu_long_dis}}" required autocomplete="bu_long_dis">

                                @error('bu_long_dis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            
                            
                              <div class="form-group row text-center">
                            <label for="bu_status" class="col-sm-5 col-form-label text-center  pull-right">{{ __('حاله العقار ') }}</label>

                            <div class="col-sm-5">
                                <select id="bu_status" class="form-control @error('bu_status') is-invalid @enderror" name="bu_status" required autocomplete="bu_status">
                                    <option value="0" {{$bu->bu_status==0?'selected':''}}>غير مفعل</option>
                                    <option value="1" {{$bu->bu_status==1?'selected':''}}>مفعل</option>
                                            
                                </select>
                                @error('bu_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <input type="hidden"  name="id" value="{{$bu->id}}">
                        <div class="form-group row mb-0">
                        
                            <div class="col-sm-5 offset-sm-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('حفظ التعديل علي العقار') }}
                                </button>
                            </div>
                        </div>
                            @endif
                                
                            
                            