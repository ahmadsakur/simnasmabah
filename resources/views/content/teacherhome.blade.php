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
         </div>
         <!-- Card stats -->
         <div class="row">
            <div class="col-xl-3 col-md-6">
               <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Total traffic</h5>
                           <span class="h2 font-weight-bold mb-0">350,897</span>
                        </div>
                        <div class="col-auto">
                           <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                              <i class="ni ni-active-40"></i>
                           </div>
                        </div>
                     </div>
                     <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span class="text-nowrap">Since last month</span>
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-6">
               <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                           <span class="h2 font-weight-bold mb-0">2,356</span>
                        </div>
                        <div class="col-auto">
                           <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                              <i class="ni ni-chart-pie-35"></i>
                           </div>
                        </div>
                     </div>
                     <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span class="text-nowrap">Since last month</span>
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-6">
               <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                           <span class="h2 font-weight-bold mb-0">924</span>
                        </div>
                        <div class="col-auto">
                           <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                              <i class="ni ni-money-coins"></i>
                           </div>
                        </div>
                     </div>
                     <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span class="text-nowrap">Since last month</span>
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-6">
               <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                           <span class="h2 font-weight-bold mb-0">49,65%</span>
                        </div>
                        <div class="col-auto">
                           <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                              <i class="ni ni-chart-bar-32"></i>
                           </div>
                        </div>
                     </div>
                     <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span class="text-nowrap">Since last month</span>
                     </p>
                  </div>
               </div>
            </div>
         </div> <!-- row -->
      </div>
   </div>
</div>
{{-- page content --}}
<div class="container-fluid mt--6">
   <div class="row">
      <div class="col-xl-12">
         <div class="card">
            <div class="card-header">
               <div class="row align-items-center">
                  <div class="col-lg-6 col-7">
                     <h6 class="h2 d-inline-block mb-0">Surat Kelulusan</h6>
                  </div>
                  <div class="col-lg-6 col-5 text-right">
                     <a href="#" class="btn btn-sm btn-success"><i class="fa fa-chevron-down" aria-hidden="true"></i>
                        Download All</a>
                  </div>
               </div>
            </div>
            <div class="card-body p-0">
               <div class="table-responsive table-invoice">
                  <table class="table table-striped">
                     <tbody>
                        <tr>
                           <th>Nomor Surat</th>
                           <th>Nama Lengkap</th>
                           <th>Status</th>
                           <th>Due Date</th>
                           <th>Action</th>
                        </tr>
                        <tr>
                           <td><a href="#">INV-87239</a></td>
                           <td class="font-weight-600">Kusnadi</td>
                           <td>
                              <div class="badge badge-warning">Unpaid</div>
                           </td>
                           <td>July 19, 2018</td>
                           <td>
                              <a href="#" class="btn btn-sm btn-primary">SKHU</a>
                           </td>
                        </tr>
                        <tr>
                           <td><a href="#">INV-48574</a></td>
                           <td class="font-weight-600">Hasan Basri</td>
                           <td>
                              <div class="badge badge-success">Paid</div>
                           </td>
                           <td>July 21, 2018</td>
                           <td>
                              <a href="#" class="btn btn-sm btn-primary">Detail</a>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div> <!-- Row -->
   <div class="row">
      <div class="col-xl-12">
         <div class="card">
            <div class="card-header">
               <div class="row align-items-center">
                  <div class="col-lg-6 col-7">
                     <h6 class="h2 d-inline-block mb-0">Surat Keterangan Lulus Ujian</h6>
                  </div>
                  <div class="col-lg-6 col-5 text-right">
                     <a href="#" class="btn btn-sm btn-success"><i class="fa fa-chevron-down" aria-hidden="true"></i>
                        Download All</a>
                  </div>
               </div>
            </div>
            <div class="card-body p-0">
               <div class="table-responsive table-invoice">
                  <table class="table table-striped">
                     <tbody>
                        <tr>
                           <th>Nomor Surat</th>
                           <th>Nama Lengkap</th>
                           <th>Status</th>
                           <th>Due Date</th>
                           <th>Action</th>
                        </tr>
                        <tr>
                           <td><a href="#">INV-87239</a></td>
                           <td class="font-weight-600">Kusnadi</td>
                           <td>
                              <div class="badge badge-warning">Unpaid</div>
                           </td>
                           <td>July 19, 2018</td>
                           <td>
                              <a href="#" class="btn btn-sm btn-primary">SKHU</a>
                           </td>
                        </tr>
                        <tr>
                           <td><a href="#">INV-48574</a></td>
                           <td class="font-weight-600">Hasan Basri</td>
                           <td>
                              <div class="badge badge-success">Paid</div>
                           </td>
                           <td>July 21, 2018</td>
                           <td>
                              <a href="#" class="btn btn-sm btn-primary">Detail</a>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div> <!-- Row -->
</div>

@endsection