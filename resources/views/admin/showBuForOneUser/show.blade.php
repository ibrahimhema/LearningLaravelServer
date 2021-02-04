@extends('admin.layouts.newLayout')
@section('header')
     <link href="{{asset('/admin-design/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
@endsection

@section('content')
     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                           

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Enable')">مفعله</button>
  <button class="tablinks" onclick="openCity(event, 'Disable')">غير مفعله</button>
  
</div>

<div id="Enable" class="tabcontent">
  <br>
   <h3>{{$username}} : عقارات تمت اضافتها بواسطه المستخدم </h3>
    <br>
  <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>bu_name</th>
                                            <th>bu_rooms</th>
                                            <th>price</th>
                                            <th>type</th>
                                            <th>created_at</th>
                                            <th>status</th>
                                            <th>langtiude</th>
                                             <th>latitude</th>
                                            <th>bu_small_dis</th>
                                                 <th>bu_place</th>
                                                 <th>Edite OR Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>#</th>
                                            <th>bu_name</th>
                                            <th>bu_rooms</th>
                                            <th>price</th>
                                            <th>type</th>
                                            <th>created_at</th>
                                            <th>status</th>
                                            <th>langtiude</th>
                                             <th>latitude</th>
                                            <th>bu_small_dis</th>
                                                    <th>bu_place</th>
                                                 <th>Edite OR Delete</th>
                                         
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       
                                          
                                      @foreach($bus1 as $bu)
                                        <tr>
                                            <td>{{$bu->id}}</td>
                                            <td>{{$bu->bu_name}}</td>
                                            <td>{{$bu->bu_rooms}}</td>  
                                            <td>{{$bu->bu_price}}</td>
                                            <td>{{$bu->bu_type}}</td>
                                            <td>{{$bu->created_at}}</td>
                                            <td>{{$bu->bu_status}}</td>
                                            <td>{{$bu->bu_langtiude}}</td>
                                            <td>{{$bu->bu_latitude}}</td>
                                            <td>{{$bu->bu_small_dis}}</td>
                                                    <th>{{$bu->bu_place}}</th>
                                                 <th><a href="{{url('/adminpanal/bu/'.$bu->id.'/edite')}}">edite</a> OR <a href="{{url('/adminpanal/bu/'.$bu->id.'/delete')}}">delete</a> </th>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
</div>

<div id="Disable" class="tabcontent">
<br>
   <h3>{{$username}} : عقارات تمت اضافتها بواسطه المستخدم </h3>
    <br>
  <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>bu_name</th>
                                            <th>bu_rooms</th>
                                            <th>price</th>
                                            <th>type</th>
                                            <th>created_at</th>
                                            <th>status</th>
                                            <th>langtiude</th>
                                             <th>latitude</th>
                                            <th>bu_small_dis</th>
                                                 <th>bu_place</th>
                                                 <th>Edite OR Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>#</th>
                                            <th>bu_name</th>
                                            <th>bu_rooms</th>
                                            <th>price</th>
                                            <th>type</th>
                                            <th>created_at</th>
                                            <th>status</th>
                                            <th>langtiude</th>
                                             <th>latitude</th>
                                            <th>bu_small_dis</th>
                                                    <th>bu_place</th>
                                                 <th>Edite OR Delete</th>
                                         
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       
                                          
                                      @foreach($bus0 as $bu)
                                        <tr>
                                            <td>{{$bu->id}}</td>
                                            <td>{{$bu->bu_name}}</td>
                                            <td>{{$bu->bu_rooms}}</td>  
                                            <td>{{$bu->bu_price}}</td>
                                            <td>{{$bu->bu_type}}</td>
                                            <td>{{$bu->created_at}}</td>
                                            <td>{{$bu->bu_status}}</td>
                                            <td>{{$bu->bu_langtiude}}</td>
                                            <td>{{$bu->bu_latitude}}</td>
                                            <td>{{$bu->bu_small_dis}}</td>
                                                    <th>{{$bu->bu_place}}</th>
                                                 <th><a href="{{url('/adminpanal/bu/'.$bu->id.'/edite')}}">edite</a> OR <a href="{{url('/adminpanal/bu/'.$bu->id.'/delete')}}">delete</a> </th>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
        <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
@endsection