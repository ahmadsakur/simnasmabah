@extends('layouts.teacherpanel')
@section('content')
<!-- Header -->
<div class="header bg-success pb-6">
   <div class="container-fluid">
      <div class="header-body">
         <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
               <h6 class="h2 text-white d-inline-block mb-0">Teacher Panel</h6>
               <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                     <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  </ol>
               </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
               <button type="button" data-id="{{Auth::user()->id}}" data-name="{{Auth::user()->name}}"
                  data-email="{{Auth::user()->email}}" data-toggle="modal" data-target="#accountModal"
                  class="mt-2 btn btn-sm btn-outline-neutral" id="editAdminButton">Account</button>
            </div>
         </div>
         <!-- Card stats -->
      </div>
   </div>
</div>
{{-- page content --}}
<div class="container-fluid mt--6">
   <div class="row">
      <div class="col-xl-12">
         <div class="card">
            <div class="card-header bg-transparent">
               <div class="row align-items-center">
                  <div class="col">
                     <h6 class="text-uppercase text-muted ls-1 mb-1">Data Siswa</h6>
                     <h5 class="h3 mb-0">Jumlah Siswa</h5>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <!-- Chart -->
               <div class="chart">
                  <canvas id="chart-sales-dark" class="chart-canvas"></canvas>
               </div>
            </div>
         </div>
      </div>
   </div> <!-- row -->
   <div class="row">
      <div class="col-xl-12">
         <div class="card">
            <div class="card-header bg-transparent">
               <div class="row align-items-center">
                  <div class="col">
                     <h6 class="text-light text-uppercase ls-1 mb-1">Rata Rata</h6>
                     <h5 class="h3 mb-0">Nilai Raport</h5>
                  </div>
                  <div class="col">
                     <ul class="nav nav-pills justify-content-end">
                        <li class="nav-item mr-2 mr-md-0" id="toggleMipaButton">
                           <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                              <span class="d-none d-md-block">MIPA</span>
                              <span class="d-md-none">M</span>
                           </a>
                        </li>
                        <li class="nav-item" id="toggleIpsButton">
                           <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                              <span class="d-none d-md-block">IPS</span>
                              <span class="d-md-none">W</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <!-- Chart -->
               <div class="chart">
                  <canvas id="chart-sales" class="chart-canvas"></canvas>
               </div>
            </div>
         </div>
      </div>
   </div> <!-- Row -->
</div>

@endsection