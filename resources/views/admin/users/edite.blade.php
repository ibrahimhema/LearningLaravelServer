@extends('admin.layouts.newLayout')


        
        
@section('content')
    <div>Add users</div>
        <form method="POST" action="{{ url('/adminpanal/users/update')}}" >
        
         @include('admin/users/form')
         </form>
@endsection