@extends('layouts.adminpanel')
@section('content')
<!-- Header -->
<div class="header bg-primary pb-6">
   <div class="container-fluid">
      <div class="header-body">
         <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
               <h6 class="h2 text-white d-inline-block mb-0">Ujian Praktek</h6>
               <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                     <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="#">Data Nilai</a></li>
                  </ol>
               </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
               <button class="btn btn-sm btn-success" type="button" data-toggle="modal"
                  data-target="#uploadUjianPraktekModal"><i class="fa fa-file-excel"
                     aria-hidden="true"></i><span>Upload</span></button>
               <button type="button" class="btn btn-sm btn-danger" id="resetUPButton" data-toggle="modal"
                  data-target="#resetUjianPraktekModal"><i class="fas fa-redo-alt"></i><span>Reset</span></button>
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
               <h3 class="mb-0">Ilmu Pengetahuan Alam</h3>
               {{-- <p class="text-sm mb-0">
                  Tabel dibawah ini menampung data nilai siswa yang masuk kedalam golongan ilmu pengetahuan alam
               </p> --}}
            </div>
            <div class="table-responsive py-4">
               <table class="table table-flush" id="datatable-basic">
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
                        <th>BIO</th>
                        <th>FIS</th>
                        <th>KIM</th>
                     </tr>
                  </thead>
                  <tbody>
                     @forelse($sciences as $science)
                     <tr>
                        <td> {{ $science->nama }} </td>
                        <td> {{ $science->Kelas }} </td>
                        <td> {{ $science->agama }}</td>
                        <td> {{ $science->bahasa_indonesia }}</td>
                        <td> {{ $science->bahasa_inggris }}</td>
                        <td> {{ $science->bahasa_jawa }}</td>
                        <td> {{ $science->seni_budaya }}</td>
                        <td> {{ $science->PJOK }}</td>
                        <td> {{ $science->PKWU }}</td>
                        <td> {{ $science->jurusan2 }}</td>
                        <td> {{ $science->jurusan3 }}</td>
                        <td> {{ $science->jurusan4 }}</td>
                     </tr>
                     @empty
                     <tr>
                        <td colspan="12" align="center">Data Nilai tidak di temukan</td>
                     </tr>
                     @endforelse
                  </tbody>
               </table>
            </div>
         </div>
         <div class="card">
            <!-- Card header -->
            <div class="card-header">
               <h3 class="mb-0">Ilmu Pengetahuan Sosial</h3>
               {{-- <p class="text-sm mb-0">
                  Tabel dibawah ini menampung data nilai siswa yang masuk kedalam golongan ilmu pengetahuan sosial
               </p> --}}
            </div>
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
   <!-- Modal -->
   <!-- Upload Modal -->
   <div class="modal fade" id="uploadUjianPraktekModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Upload Data Ujian</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form role="form" action="{{route('ujianpraktekimport')}}" method="POST" enctype="multipart/form-data">
               @csrf

               <div class="modal-body">
                  <h3>Pilih Dataset Ujian</h3>
                  <input type="file" class="form-control" name="file" required>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-success">Upload</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Reset Modal -->
   <div class="modal fade" id="resetUjianPraktekModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Reset Data Ujian Praktek</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form role="form" action="{{route('resetujianpraktek')}}" method="POST">
               @csrf

               <div class="modal-body">
                  <h3>Masukkan Password untuk menghapus data</h3>
                  <input type="password" class="form-control" name="password" id="resetpassword" required>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-danger">Delete</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- End of Modal -->
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
   //reset modal


   $(document).on('click','button#resetUPButton',function(){
      var password = document.getElementById("resetpassword");

      function validatePassword(){
         if(password.value != 'hapussemuanya') {
            password.setCustomValidity("Passwords salah");
         } else {
            password.setCustomValidity('');
         }
      }

      password.onchange = validatePassword;
      password.onkeyup = validatePassword;
      

});

</script>
@endpush