@extends('layouts.teacherpanel')
@section('content')
<div class="header bg-success pb-6">
   <div class="container-fluid">
      <div class="header-body">
         <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
               <h6 class="h2 text-white d-inline-block mb-0">Data Siswa</h6>
               <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                     <li class="breadcrumb-item"><a href="#"><i class="fas fa-graduation-cap"></i></a></li>
                     <li class="breadcrumb-item"><a href="#">{{Auth::user()->class}}</a></li>
                  </ol>
               </nav>
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
            <div class="table-responsive py-4">
               <table class="table table-flush" id="datatable-basic">
                  <thead class="thead-light">
                     <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>No Peserta</th>
                        <th>Wali Murid</th>
                     </tr>
                  </thead>
                  <tbody>
                     @forelse($students as $key => $student)
                     <tr>
                        <td style="width: 4%"> {{ $key + 1 }} </td>
                        <td> {{ $student->NIS }} </td>
                        <td> {{ $student->nama }} </td>


                        <td> {{ $student->TTL }} </td>
                        <td> {{ $student->no_peserta }} </td>
                        <td> {{ $student->wali_murid}}</td>
                     </tr>
                     @empty
                     <tr>
                        <td colspan="7" align="center">Data Tidak Ditemukan</td>
                     </tr>
                     @endforelse
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
               &copy; 2021 <a href="#" class="font-weight-bold ml-1" target="_blank">SIMNA | SMA N 1 Subah</a>
            </div>
         </div>
      </div>
   </footer>
</div>
@endsection