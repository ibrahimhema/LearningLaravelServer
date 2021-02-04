@extends('admin.layouts.newLayout')


        
        
@section('content')
    <div>Add users</div>
        <form method="POST" action="{{ url('/adminpanal/bu/update')}}" enctype="multipart/form-data">
        
         @include('admin/bu/form')
         </form>
@endsection