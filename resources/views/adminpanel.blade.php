<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="robots" content="noindex,nofollow">
   <title>Admin Panel</title>
   <!-- Favicon icon -->
   {{-- <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png"> --}}
   <link href="{{asset('ambleadmin/css/style.min.css')}}" rel="stylesheet">
   {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
</head>

<body>
   <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
      data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
      <header class="topbar" data-navbarbg="skin5">
         <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin6">
               <a class="navbar-brand" href="dashboard.html">
                  <!-- Logo icon -->
                  <b class="logo-icon">
                     <img src="{{asset('ambleadmin/plugins/images/logo-icon.png')}}" alt="homepage" />
                  </b>
                  <span class="logo-text">
                     <img src="{{asset('ambleadmin/plugins/images/logo-text.png')}}" alt="homepage" />
                  </span>
               </a>
               <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i
                     class="ti-menu ti-close"></i></a>
            </div>
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
               <ul class="navbar-nav d-none d-md-block d-lg-none">
                  <li class="nav-item">
                     <a class="nav-toggler nav-link waves-effect waves-light text-white" href="javascript:void(0)"><i
                           class="ti-menu ti-close"></i></a>
                  </li>
               </ul>
               <ul class="navbar-nav ml-auto d-flex align-items-center">
                  <li class="nav-item dropdown">
                     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                     </a>

                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                        </form>
                     </div>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
      <aside class="left-sidebar" data-sidebarbg="skin6">
         <!-- Sidebar scroll-->
         <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
               <ul id="sidebarnav">
                  <!-- User Profile-->
                  <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="index.html" aria-expanded="false"><i class="fas fa-clock fa-fw"
                           aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a></li>
                  <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="profile.html" aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i><span class="hide-menu">Data Pegawai</span></a>
                  </li>
                  <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="basic-table.html" aria-expanded="false"><i class="fa fa-table"
                           aria-hidden="true"></i><span class="hide-menu">Data Siswa</span></a></li>
                  <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="map-google.html" aria-expanded="false"><i class="fa fa-globe" aria-hidden="true"></i><span
                           class="hide-menu">Reset Data Siswa</span></a></li>
                  <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="blank.html" aria-expanded="false"><i class="fa fa-columns" aria-hidden="true"></i><span
                           class="hide-menu">Blank</span></a></li>
               </ul>

            </nav>
            <!-- End Sidebar navigation -->
         </div>
         <!-- End Sidebar scroll-->
      </aside>
      <div class="page-wrapper" style="min-height: 250px;">
         <!-- ============================================================== -->
         <!-- Bread crumb and right sidebar toggle -->
         <!-- ============================================================== -->
         <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
               <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h4 class="page-title text-uppercase font-medium font-14">Profile Page</h4>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="white-box">
                     @yield('content')
                  </div>
               </div>
            </div>
         </div>
         <footer class="footer text-center"> 2021 © SIMNA | SMA N 1 Subah</footer>
      </div>
   </div>
   <!-- Javascript -->
   <script src="{{asset('ambleadmin/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
   <!-- Bootstrap tether Core JavaScript -->
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
   </script>
   <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('ambleadmin/js/app-style-switcher.js')}}"></script>
   <!--Wave Effects -->
   <script src="{{asset('ambleadmin/js/waves.js')}}"></script>
   <!--Menu sidebar -->
   <script src="{{asset('ambleadmin/js/sidebarmenu.js')}}"></script>
   <!--Custom JavaScript -->
   <script src="{{asset('ambleadmin/js/custom.js')}}"></script>
</body>

</html>