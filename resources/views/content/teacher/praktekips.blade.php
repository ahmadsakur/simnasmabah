@extends('layouts.teacherpanel')
@section('content')
<!-- Header -->
<div class="header bg-success pb-6">
   <div class="container-fluid">
      <div class="header-body">
         <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
               <h6 class="h2 text-white d-inline-block mb-0">Nilai Siswa</h6>
               <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                     <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="#">Ujian Praktek</a></li>
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
            {{-- <div class="card-header">
               <h3 class="mb-0">{{Auth::user()->class}}</h3>
            <p class="text-sm mb-0">
               Tabel nilai Ujian Praktek untuk kelas {{Auth::user()->class}}
            </p>
         </div> --}}
         <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic2">
               <thead class="thead-light">
                  <tr>
                     <th>Nama</th>
                     <th>Kelas</th>
                     <th>AGM</th>
                     <th>INDO</th>
                     <th>EN</>
                     <th>JAWA</th>
                     <th>SENI</th>
                     <th>PJOK</th>
                     <th>PKWU</th>
                  </tr>
               </thead>
               <tbody>
                  @forelse($socials as $social)
                  <tr>
                     <td> {{ $social->nama }} </td>
                     <td> {{ $social->Kelas }} </td>
                     <td> {{ $social->agama }}</td>
                     <td> {{ $social->bahasa_indonesia }}</td>
                     <td> {{ $social->bahasa_inggris }}</td>
                     <td> {{ $social->bahasa_jawa }}</td>
                     <td> {{ $social->seni_budaya }}</td>
                     <td> {{ $social->PJOK }}</td>
                     <td> {{ $social->PKWU }}</td>
                  </tr>
                  @empty
                  <tr>
                     <td colspan="17" align="center">Data Nilai tidak di temukan</td>
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