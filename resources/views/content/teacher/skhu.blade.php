@extends('layouts.teacherpanel')
@section('content')
<!-- Header -->
<div class="header bg-success pb-6">
   <div class="container-fluid">
      <div class="header-body">
         <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
               <h6 class="h2 text-white d-inline-block mb-0">Download Laporan</h6>
               <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                     <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="#">SKHU</a></li>
                  </ol>
               </nav>
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
            <div class="card-header">
               <div class="row align-items-center">
                  <div class="col-lg-6 col-7">
                     <h6 class="h2 d-inline-block mb-0">Surat Keterangan Hasil Ujian</h6>
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