<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        @yield('title')
    </title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin-design/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin-design/css/sb-admin-2.min.css')}}" rel="stylesheet">
     <link href="{{asset('admin-design/sweet-alert/sweetalert2.css')}}" rel="stylesheet">
     
    @yield('header')

</head>
    
    
    <body id="page-top" style="direction:rtl">
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">لوحه التحكم {{Auth::user()->name}}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/adminpanal')}}">
                <span>الصفحه الرئيسيه</span>
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            @include('admin/layouts.nav')

            <!-- Nav Item - Utilities Collapse Menu -->
           

            <!-- Divider -->
            <hr class="sidebar-divider">

          
           

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            
           

        </ul>
        <!-- End of Sidebar -->
         <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
             <!-- Topbar -->
             <div>
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="width:100%">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                         <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                           
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">{{getCountOfBulldingsDisabled()}}</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                    @foreach(\App\Bu::where('bu_status',0)->get() as $key => $bu)
                                <a class="dropdown-item d-flex align-items-center" href="{{url('/adminpanal/bu/'.$bu->id.'/edite')}}">
                                    
                                     <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                         
                                           
                                    <div style="">
                                   
                                        <div class="small text-gray-500">{{$bu->created_at}}</div>
                                        <span class="font-weight-bold">{{$bu->bu_name}}</span>
                                             
                                           
                                    </div>
                                
                                          
                                       
                                </a>
                               @endforeach
                               
                                <a class="dropdown-item text-center small text-gray-500" href="{{url('adminpanal/showDisabledBu')}}">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">{{getCountUnReadMessage()}}</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                              لديك  {{getCountUnReadMessage()}} غير مقرؤه
                                </h6>
                                    @foreach(getUnReadMessage() as $key=>$value)
                                <a class="dropdown-item d-flex align-items-center" href="{{url('/adminpanal/contact/'.$value->id.'/edite')}}">
                                    
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">{{$value->contact_name}}</div>
                                        <div class="small text-gray-500">{{str_limit($value->contact_message,15)}}</div>
                                              <div class="small text-gray-500">{{$value->created_at}}</div>
                                    </div>
                                </a>
                                @endforeach
                               
                               
                               
                                <a class="dropdown-item text-center small text-gray-500" href="{{url('/adminpanal/contact/show')}}">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->name}}</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{url('/adminpanal/users/'.auth()->user()->id.'/edite')}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    ملفي الشخصي
                                </a>
                                <a class="dropdown-item" href="{{url('/adminpanal/showsettings')}}">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    الاعدادات
                                </a>

                                <div class="dropdown-divider"></div>
                                    <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                       <button type="submit"> <a class="dropdown-item" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                     تسجيل الخروج
                                </a>
                                    </button>
                                    </form>
                                
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
</div>
     <div class="container-fluid">  
        
        @include('admin/layouts/flashmessage')
@yield('content')


            </div>  
            </div>
                  
        </div>
         <!-- Begin Page Content -->
       
        <!-- Content Wrapper -->
    </div>
          
           
        
           <!-- Bootstrap core JavaScript-->
           
    <script src="{{asset('admin-design/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin-design/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin-design/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin-design/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('admin-design/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('admin-design/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('admin-design/js/demo/chart-pie-demo.js')}}"></script>
       <script>
  
   
    $(document).ready(function(){
    
     $(".sweet").show();
   setTimeout(function(){
    $(".sweet").hide();
  
   },2000);
    });
 
  
   </script>
          
  @yield('footer')
</body>

</html>
        
        
        