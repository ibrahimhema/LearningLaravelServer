@extends('admin.layouts.newLayout')


        
        
@section('content')
    <div>Settings For Website</div>
       
@if($settings !=null)
    <form action="{{url('/adminpanal/savesettings')}}" method="POST">
       @csrf
    @foreach($settings as $setting)
                        <div class="form-group row text-center">
                            <label for="name" class="col-sm-5 col-form-label text-center  pull-right" >{{ $setting->slug }}</label>

                         <div class="col-sm-5">
                                <input id="name" type="text" class="form-control @error($setting->settingname) is-invalid @enderror" name="{{ $setting->settingname }}" value="{{ $setting->value }}" required autocomplete="name" autofocus>

                                @error($setting->settingname)
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @endforeach
                         <div class="col-sm-5 offset-sm-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('حفظ التعديل ') }}
                                </button>
                            </div>
                        </form>
                    @endif


                       
       
@endsection