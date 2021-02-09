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
                     <li class="breadcrumb-item"><a href="#">Raport</a></li>
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
               Tabel nilai Raport untuk kelas {{Auth::user()->class}} dimulai dari semester 1 sampai dengan 6
            </p>
         </div> --}}
         <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
               <thead class="thead-light" id="thead-raport" data-kelas={{Auth::user()->class}}>
                  <tr>
                     <th>Nama</th>
                     <th>Kelas</th>
                     <th>Semester</th>
                     <th>AGM</th>
                     <th>PPKn</th>
                     <th>IND</th>
                     <th>MTK</th>
                     <th>SEJ</th>
                     <th>EN</th>
                     <th>SENI</th>
                     <th>PJOK</th>
                     <th>PRAK</th>
                     <th>JAWA</th>
                     <th>MTK</th>
                     <th>BIO</th>
                     <th>FIS</th>
                     <th>KIM</th>
                     <th>Peminatan</th>
                  </tr>
               </thead>
               <tbody>
                  @forelse($raports as $item)
                  <tr>
                     <td> {{ $item->nama }} </td>
                     <td> {{ $item->Kelas }} </td>
                     <td> {{ $item->semester }} </td>
                     <td> {{ $item->agama }}</td>
                     <td> {{ $item->PPKn }}</td>
                     <td> {{ $item->bahasa_indonesia }}</td>
                     <td> {{ $item->matematika }}</td>
                     <td> {{ $item->sejarah_indonesia }}</td>
                     <td> {{ $item->bahasa_inggris }}</td>
                     <td> {{ $item->seni_budaya }}</td>
                     <td> {{ $item->PJOK }}</td>
                     <td> {{ $item->PKWU }}</td>
                     <td> {{ $item->bahasa_jawa }}</td>
                     <td> {{ $item->jurusan1 }}</td>
                     <td> {{ $item->jurusan2 }}</td>
                     <td> {{ $item->jurusan3 }}</td>
                     <td> {{ $item->jurusan4 }}</td>
                     <td> {{ $item->peminatan }}</td>
                  </tr>
                  @empty
                  <tr>
                     <td colspan="18" align="center">Data Nilai Tidak diTemukan</td>
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
@push('customscripts')
<script>
   $( document ).ready(function() {
   let kelas = $('#thead-raport').data("kelas"); 
      if (kelas.includes("IPS")) {
         $("#judul-mapel").html("<th>Nama</th><th>Kelas</th><th>Semester</th><th>AGM</th><th>PPKn</th><th>IND</th><th>MTK</th><th>SEJ</th><th>EN</th><th>SENI</th><th>PJOK</th><th>PRAK</th><th>JAWA</th><th>GEO</th><th>SEJ</th><th>SOS</th><th>EKO</th><th>Peminatan</th>");
      } else {
         $("#judul-mapel").html("<th>Nama</th><th>Kelas</th><th>Semester</th><th>AGM</th><th>PPKn</th><th>IND</th><th>MTK</th><th>SEJ</th><th>EN</th><th>SENI</th><th>PJOK</th><th>PRAK</th><th>JAWA</th><th>MTK</th><th>BIO</th><th>FIS</th><th>KIM</th><th>Peminatan</th>");
      }
});

</script>

@endpush