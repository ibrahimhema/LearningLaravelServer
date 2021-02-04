@extends('admin.layouts.newLayout')


        
        
@section('content')
    <div>Add users</div>
        <form method="POST" action="{{ url('/adminpanal/users/store')}}" >
        
           @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-6 col-form-label text-center  pull-right">{{ __('الاسم') }}</label>

                            <div class="col-sm-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-6 col-form-label text-center  pull-right">{{ __('البريد الالكتروني') }}</label>

                            <div class="col-sm-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-6 col-form-label text-center  pull-right">{{ __('كلمه المرور') }}</label>

                            <div class="col-sm-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-sm-6 col-form-label text-center  pull-right">{{ __(' تاكيد كلمخ المرور') }}</label>

                            <div class="col-sm-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                        
                            <div class="col-sm-6 offset-sm-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('حفظ العضو ') }}
                                </button>
                            </div>
                        </div>
         </form>
@endsection