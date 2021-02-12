<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="author" content="Creative Tim">
   <title>Admin Panel</title>
   <!-- Favicon -->
   <link rel="icon" href="{{asset('argon/img/brand/favicon.png')}}" type="image/png">
   <!-- Fonts -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
   <!-- Icons -->
   <link rel="stylesheet" href="{{asset('argon/vendor/nucleo/css/nucleo.css')}}" type="text/css">
   <link rel="stylesheet" href="{{asset('argon/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}"
      type="text/css">
   <!-- Page plugins -->
   <link rel="stylesheet" href="{{asset('argon/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
   <link rel="stylesheet" href="{{asset('argon/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
   <!-- Argon CSS -->
   <link rel="stylesheet" href="{{asset('argon/css/argon.css?v=1.1.0')}}" type="text/css">

</head>

<body>
   <!-- Sidenav -->
   <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
      <div class="scrollbar-inner">
         <!-- Brand -->
         <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="/adminpanel">
               <img src="argon/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
               <!-- Sidenav toggler -->
               <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                  <div class="sidenav-toggler-inner">
                     <i class="sidenav-toggler-line"></i>
                     <i class="sidenav-toggler-line"></i>
                     <i class="sidenav-toggler-line"></i>
                  </div>
               </div>
            </div>
         </div>
         <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
               <!-- Nav items -->
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link" href="{{route('adminpanel')}}">
                        <i class="fa fa-home text-info" aria-hidden="true"></i>
                        <span class="nav-link-text">Dashboard</span>
                     </a>
                  </li>
                  {{-- <li class="nav-item">
                     <a class="nav-link" href="#nilai-akhir" data-toggle="collapse" role="button" aria-expanded="false"
                        aria-controls="nilai-akhir">
                        <i class="ni ni-trophy text-info"></i>
                        <span class="nav-link-text">Nilai Akhir</span>
                     </a>
                     <div class="collapse" id="nilai-akhir">
                        <ul class="nav nav-sm flex-column">
                           <li class="nav-item">
                              <a href="/finalraport" class="nav-link">Raport</a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">Ujian Sekolah</a>
                           </li>
                        </ul>
                     </div>
                  </li> --}}
                  <li class="nav-item">
                     <a class="nav-link" href="#navbar-dashboards" data-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="navbar-dashboards">
                        <i class="fas fa-chart-bar text-danger" aria-hidden="true"></i>
                        <span class="nav-link-text">Kelola Nilai</span>
                     </a>
                     <div class="collapse" id="navbar-dashboards">
                        <ul class="nav nav-sm flex-column">
                           <li class="nav-item">
                              <a href="/finalraport" class="nav-link">Nilai Akhir</a>
                           </li>
                           <li class="nav-item">
                              <a href="/raport" class="nav-link">Raport</a>
                           </li>
                           <li class="nav-item">
                              <a href="/ujiansekolah" class="nav-link">Ujian Sekolah</a>
                           </li>
                           <li class="nav-item">
                              <a href="/ujianpraktek" class="nav-link">Ujian Praktek</a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/siswa">
                        <i class="ni ni-hat-3 text-info"></i>
                        <span class="nav-link-text">Data Siswa</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/guru">
                        <i class="ni ni-badge text-red"></i>
                        <span class="nav-link-text">Data Guru</span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </nav>
   <!-- Main content -->
   <div class="main-content" id="panel">
      <!-- Topnav -->
      <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
         <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <!-- Navbar links -->
               <ul class="navbar-nav align-items-center ml-md-auto">
                  <li class="nav-item d-xl-none">
                     <!-- Sidenav toggler -->
                     <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                        data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                           <i class="sidenav-toggler-line"></i>
                           <i class="sidenav-toggler-line"></i>
                           <i class="sidenav-toggler-line"></i>
                        </div>
                     </div>
                  </li>
               </ul>
               <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                  <li class="nav-item dropdown">
                     <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="media align-items-center">
                           <span class="avatar avatar-sm rounded-circle">
                              <img alt="Image placeholder"
                                 src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&rounded=true">
                           </span>
                           <div class="media-body ml-2 d-none d-lg-block">
                              <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                           </div>
                        </div>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right">
                        {{-- <button type="button" class="dropdown-item" data-toggle="modal" data-target="#accountModal">
                           <i class="ni ni-single-02"></i>
                           <span>Profile</span>
                        </button>
                        <button type="button" class="dropdown-item" data-toggle="modal" data-target="#settingsModal">
                           <i class="ni ni-settings-gear-65"></i>
                           <span>Settings</span>
                        </button> --}}
                        {{-- <div class="dropdown-divider"></div> --}}
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                           <i class="ni ni-user-run"></i>
                           <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                        </form>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- Page content -->
      @yield('content')

   </div>
   <!-- Argon Scripts -->
   <!-- Core -->
   {{-- <script src="argon/vendor/jquery/dist/jquery.min.js"></script> --}}
   <script src="{{asset('argon/vendor/jquery/jquery.min.js')}}"></script>
   <script src="argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <script src="argon/vendor/js-cookie/js.cookie.js"></script>
   <script src="argon/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/jquery-scroll-lock@3.1.3/jquery-scrollLock.min.js"></script>
   <!-- Optional JS -->
   <script src="argon/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
   <script src="argon/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="argon/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
   <script src="argon/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
   <script src="argon/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
   <script src="argon/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
   <script src="argon/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
   <script src="argon/vendor/nouislider/distribute/nouislider.min.js"></script>
   <!-- Chart Js -->
   <script src="argon/vendor/chart.js/dist/Chart.min.js"></script>
   <script src="argon/vendor/chart.js/dist/Chart.extension.js"></script>
   <!-- Argon JS -->
   <script src="argon/js/argon.js"></script>
   @stack('customscripts')
   @include('sweetalert::alert')


</body>

</html>