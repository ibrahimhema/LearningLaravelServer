@extends('layouts.app')
@section('title')
    {{getSetting('siteName')}}
    ||
عرض طلبات عقاراتي
@endsection
@section('header')
    <link href="{{asset('website-design/cus_bu_product/bu_all.css')}}" rel="stylesheet" />
@endsection
@section('content')
    <div class="container">
   

<div class="row justify-content-center">

    <div class="col-md-9 col-sm-9">
@if(is_null($myreq))
    @if(count($myreq)==0)
    <div>لا توجد اي طلبات لديك</div>
    @endif
@else
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h2 class="m-0 font-weight-bold text-primary">عرض طلبات المعاينه</h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم العقار</th>
                                            <th>عدد الغرف</th>
                                            <th>السعر</th>
                                            <th>النوع</th>
                                            <th>تاريخ الاضافه</th>
                                                 <th>المكان</th>
                                                    <th>الطالب للعقار</th>
                                                 <th>تحديد كتمت رؤيته</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>#</th>
                                            <th>اسم العقار</th>
                                            <th>عدد الغرف</th>
                                            <th>السعر</th>
                                            <th>النوع</th>
                                            <th>تاريخ الاضافه</th>
                                                 <th>المكان</th>
                                                    <th>الطالب للعقار</th>
                                                 <th>تحديد كتمت رؤيته</th>
                                         
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       
                                          
                                      @foreach($myreq as $req)
                                    
                                        <tr>
                                            <td>{{$req->id}}</td>
                                                
                                            <td>{{getBuFromId($req->bu_id)->bu_name}}</td>
                                               
                                            <td>{{getBuFromId($req->bu_id)->bu_rooms}}</td>
                                                    
                                           <td>{{getBuFromId($req->bu_id)->bu_price}}</td> 
                                            <td>{{getvalueoftype()[getBuFromId($req->bu_id)->bu_type]}}</td>
                                            <td>{{getBuFromId($req->bu_id)->created_at}}</td>
                                           
                                            <td>{{getBuFromId($req->bu_id)->bu_place}}</td>
                                                    <th>{{getUserNameFromId($req->user_id)->name}}</th>
                                                        @if($req->stutues==0)
                                                 <th><a href="{{url('/user/changeRequestStutues/'.$req->id)}}">اذهب لرؤيته</a>  </th>
                                                @else
                                             <th>  </th>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

        
    @endif
    </div>
           @include('website/bu/pages')
</div>
    </div>
@endsection