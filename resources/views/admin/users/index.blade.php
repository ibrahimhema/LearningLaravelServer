@extends('admin.layouts.newLayout')
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
                                             <th>id</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>created_at</th>
                                            <th>admin or not</th>
                                                <th>my Bulldings</th>
                                                 <th>Edite OR Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>created_at</th>
                                            <th>admin or not</th>
                                                 <th>my Bulldings</th>
                                                <th>Edite OR Delete</th>
                                         
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       
                                          
                                      @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td>{{$user->admin}}</td>
                                                 <td><a href="{{url('/adminpanal/showBu/'.$user->id)}}">{{getCountOfBulldingsForUser($user->id)}}</a></td>
                                                 <th><a href="{{url('/adminpanal/users/'.$user->id.'/edite')}}">edite</a> OR <a href="{{url('/adminpanal/users/'.$user->id.'/delete')}}">delete</a> </th>
                                            
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