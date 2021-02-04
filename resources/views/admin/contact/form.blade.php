
                       @csrf
              
            @if($con !=null)
                  <div class="form-group row text-center">
                            <label for="name" class="col-sm-5 col-form-label text-center  pull-right">{{ __('اسم المرسل') }}</label>

                            <div class="col-sm-5">
                                <input id="contact_name" type="text" class="form-control @error('contact_name') is-invalid @enderror" name="contact_name" value="{{ $con->contact_name}}" required autocomplete="name" autofocus>

                                @error('contact_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <label for="contact_email" class="col-sm-5 col-form-label text-center  pull-right">{{ __(' الاميل') }}</label>

                            <div class="col-sm-5">
                                <input id="contact_email" type="text" class="form-control @error('contact_email') is-invalid @enderror" name="contact_email" value="{{ $con->contact_email }}" required autocomplete="contact_email">

                                @error('contact_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <label for="contact_message" class="col-sm-5 col-form-label text-center  pull-right">{{ __(' الرساله') }}</label>

                            <div class="col-sm-5">
                                <input id="contact_message" type="text" class="form-control @error('contact_message') is-invalid @enderror" name="contact_message" value="{{ $con->contact_message }}" required autocomplete="contact_message">

                                @error('contact_message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                           
                         
                          

                       <div class="form-group row text-center">
                            <label for="contact_type" class="col-sm-5 col-form-label text-center  pull-right">نوع الرساله</label>

                            <div class="col-sm-5">
                                <select id="contact_type"  class="form-control @error('contact_type') is-invalid @enderror" name="contact_type">
                                @if($con->contact_type =="اعجاب")
                                 <option value="like" selected>اعجاب</option>
                                @else
                                      <option value="like">اعجاب</option>
                                    @endif
                                      @if($con->contact_type =="اقتراح")
                             <option value="suggest" selected>اقتراح</option>
                                  @else
                                      <option value="suggest">اقتراح</option>
                                    @endif
                                     @if($con->contact_type =="مشكله")
                                 <option value="problem" selected>مشكله</option>
                                      @else
                                      <option value="problem">مشكله</option>
                                    @endif
                                </select>
                                @error('contact_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            
                           

                            
                              <div class="form-group row text-center">
                            <label for="contact_view" class="col-sm-5 col-form-label text-center  pull-right">{{ __(' تمت الرؤيه ام لا ') }}</label>

                            <div class="col-sm-5">
                                <select id="contact_view" class="form-control @error('bu_status') is-invalid @enderror" name="contact_view" required autocomplete="contact_view">
                                    <option value="0">لم يتم رؤيته</option>
                                    <option value="1">تمت رؤيته</option>
                                            
                                </select>
                                @error('contact_view')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <input type="hidden"  name="id" value="{{$con->id}}">
                        <div class="form-group row mb-0">
                        
                            <div class="col-sm-5 offset-sm-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('حفظ التعديل علي الرساله') }}
                                </button>
                            </div>
                        </div>
                            @endif
                                
                            
                            