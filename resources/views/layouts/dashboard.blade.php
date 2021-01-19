<!DOCTYPE html>
<html>

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
   <link rel="stylesheet" href="{{asset('argon/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"')}}>
   <link rel=" stylesheet" href="{{asset('argon/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">
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
                     <a class="nav-link" href="#">
                        <i class="ni ni-shop text-primary"></i>
                        <span class="nav-link-text">Dashboard</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <i class="ni ni-trophy text-info"></i>
                        <span class="nav-link-text">Kelola Nilai</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#navbar-dashboards" data-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="navbar-dashboards">
                        <i class="ni ni-bullet-list-67 text-info"></i>
                        <span class="nav-link-text">Nilai Raport</span>
                     </a>
                     <div class="collapse" id="navbar-dashboards">
                        <ul class="nav nav-sm flex-column">
                           <li class="nav-item">
                              <a href="#" class="nav-link">Semester I</a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">Semester II</a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">Semester III</a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">Semester IIII</a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">Semester IIIII</a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">Semester IIIIII</a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#ujian" data-toggle="collapse" role="button" aria-expanded="false"
                        aria-controls="ujian">
                        <i class="ni ni-align-left-2 text-orange"></i>
                        <span class="nav-link-text">Nilai Ujian</span>
                     </a>
                     <div class="collapse" id="ujian">
                        <ul class="nav nav-sm flex-column">
                           <li class="nav-item">
                              <a href="#" class="nav-link">Ujian Sekolah</a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">Ujian Praktik</a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <i class="ni ni-hat-3 text-info"></i>
                        <span class="nav-link-text">Data Siswa</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <i class="ni ni-badge text-red"></i>
                        <span class="nav-link-text">Data Wali Kelas</span>
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
                        <a href="#!" class="dropdown-item">
                           <i class="ni ni-single-02"></i>
                           <span>Profile</span>
                        </a>
                        <a href="#!" class="dropdown-item">
                           <i class="ni ni-settings-gear-65"></i>
                           <span>Settings</span>
                        </a>
                        <div class="dropdown-divider"></div>
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
      <!-- Header -->
      <!-- Header -->
      <div class="header bg-primary pb-6">
         <div class="container-fluid">
            <div class="header-body">
               <div class="row align-items-center py-4">
                  <div class="col-lg-6 col-7">
                     <h6 class="h2 text-white d-inline-block mb-0">Datatables</h6>
                     <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                           <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                           <li class="breadcrumb-item"><a href="#">Tables</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Datatables</li>
                        </ol>
                     </nav>
                  </div>
                  <div class="col-lg-6 col-5 text-right">
                     <a href="#" class="btn btn-sm btn-neutral">New</a>
                     <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Page content -->
      <div class="container-fluid mt--6">
         <!-- Table -->
         <div class="row">
            <div class="col">
               <div class="card">
                  <!-- Card header -->
                  <div class="card-header">
                     <h3 class="mb-0">Datatable</h3>
                     <p class="text-sm mb-0">
                        This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal
                        setup in order to get started fast.
                     </p>
                  </div>
                  <div class="table-responsive py-4">
                     <table class="table table-flush" id="datatable-basic">
                        <thead class="thead-light">
                           <tr>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Office</th>
                              <th>Age</th>
                              <th>Start date</th>
                              <th>Salary</th>
                           </tr>
                        </thead>
                        <tfoot>
                           <tr>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Office</th>
                              <th>Age</th>
                              <th>Start date</th>
                              <th>Salary</th>
                           </tr>
                        </tfoot>
                        <tbody>
                           <tr>
                              <td>Tiger Nixon</td>
                              <td>System Architect</td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2011/04/25</td>
                              <td>$320,800</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="card">
                  <!-- Card header -->
                  <div class="card-header">
                     <h3 class="mb-0">Action buttons</h3>
                     <p class="text-sm mb-0">
                        This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal
                        setup in order to get started fast.
                     </p>
                  </div>
                  <div class="table-responsive py-4">
                     <table class="table table-flush" id="datatable-buttons">
                        <thead class="thead-light">
                           <tr>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Office</th>
                              <th>Age</th>
                              <th>Start date</th>
                              <th>Salary</th>
                           </tr>
                        </thead>
                        <tfoot>
                           <tr>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Office</th>
                              <th>Age</th>
                              <th>Start date</th>
                              <th>Salary</th>
                           </tr>
                        </tfoot>
                        <tbody>
                           <tr>
                              <td>Tiger Nixon</td>
                              <td>System Architect</td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2011/04/25</td>
                              <td>$320,800</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!-- Footer -->
         <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
               <div class="col-lg-6">
                  <div class="copyright text-center text-lg-left text-muted">
                     &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1"
                        target="_blank">Creative
                        Tim</a>
                  </div>
               </div>
            </div>
         </footer>
      </div>
   </div>
   <!-- Argon Scripts -->
   <!-- Core -->
   <script src="argon/vendor/jquery/dist/jquery.min.js"></script>
   <script src="argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <script src="argon/vendor/js-cookie/js.cookie.js"></script>
   <script src="argon/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
   <script src="argon/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
   <!-- Optional JS -->
   <script src="argon/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
   <script src="argon/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="argon/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
   <script src="argon/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
   <script src="argon/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
   <script src="argon/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
   <script src="argon/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
   <script src="argon/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
   <!-- Argon JS -->
   <script src="argon/js/argon.js?v=1.1.0"></script>
   <!-- Demo JS - remove this in your project -->
   <script src="argon/js/demo.min.js"></script>
</body>

</html>