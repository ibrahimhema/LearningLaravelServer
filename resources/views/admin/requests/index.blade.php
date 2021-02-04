@extends('admin.layouts.newLayout')
@section('header')
     <link href="{{asset('/admin-design/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')
     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Show Requsts on bulding</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>bu name</th>

                                            <th>status</th>
                                                 <th>user name</th>
                                            <th>created_at</th>
                                                 <th> Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>bu name</th>

                                            <th>status</th>
                                            <th>user name</th>
                                            <th>created_at</th>
                                            <th> Delete</th>
                                         
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       
                                          
                                      @foreach($requests as $request)
                                        <tr>
                                            <td>{{$request->id}}</td>
                                            <td>{{$request->bu->bu_name}}</td>

                                            <td>{{$request->stutues}}</td>
                                            <td>{{$request->user->name}}</td>
                                            <td>{{$request->created_at}}</td>
                                                 <th> <a href="{{url('/adminpanal/request/'.$request->id.'/delete')}}">delete</a> </th>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$requests->links()}}
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