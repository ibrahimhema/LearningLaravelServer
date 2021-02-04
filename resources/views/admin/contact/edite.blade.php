@extends('admin.layouts.newLayout')


        
        
@section('content')
    <div>التعديل علي الرساله </div>
        <form method="POST" action="{{ url('/adminpanal/contact/update')}}" enctype="multipart/form-data">
        
         @include('admin/contact/form')
         </form>
    <br>
    <div class="container">
    <div class="row">

        <div class="col-md-12 text-right">
            <button class="btn btn-danger" onclick="$('.form-replay').slideToggle(500)">اضافه رد</button>

            <div class="form-replay" style="display: none;margin-top: 20px">
                <form method="post" action="{{ url('/adminpanal/message/replay')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <textarea class="form-control" name="replay" placeholder="enter your replay"></textarea>
                        <input type="hidden" name="email" value="{{ $con->contact_email}}">
                        <input type="hidden" name="name" value="{{ $con->contact_name}}">
                        <button type="submit" class="form-control btn btn-success">ارسال</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection