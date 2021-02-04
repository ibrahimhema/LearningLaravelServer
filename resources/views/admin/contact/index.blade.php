@extends('admin.layouts.newLayout')
@section('title')
    عرض الرسائل
@endsection
@section('header')
     <link href="{{asset('/admin-design/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')
     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>contact_name</th>
                                            <th>contact_email</th>
                                            <th>contact_message</th>
                                            <th>contact_type</th>
                                            <th>created_at</th>
                                                 <th>Edite OR Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>#</th>
                                            <th>contact_name</th>
                                            <th>contact_email</th>
                                            <th>contact_message</th>
                                            <th>contact_type</th>
                                            <th>created_at</th>
                                                 <th>Edite OR Delete</th>
                                         
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       
                                          
                                      @foreach($contacts as $con)
                                        <tr>
                                            <td>{{$con->id}}</td>
                                            <td>{{$con->contact_name}}</td>
                                            <td>{{$con->contact_email}}</td>  
                                            <td>{{$con->contact_message}}</td>
                                            <td>{{$con->contact_type}}</td>
                                            <td>{{$con->created_at}}</td>
                                           
                                                 <th><a href="{{url('/adminpanal/contact/'.$con->id.'/edite')}}">edite</a> OR <a href="{{url('/adminpanal/contact/'.$con->id.'/delete')}}">delete</a> </th>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

    
    
@endsection


@section('footer')
    
      <!-- Page level plugins -->
    <script src="admin-design/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="admin-design/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="admin-design/js/demo/datatables-demo.js"></script>
@endsection