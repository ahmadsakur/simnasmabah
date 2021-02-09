@extends('layouts.adminpanel')
@section('content')
<div class="header bg-primary pb-6">
   <div class="container-fluid">
      <div class="header-body">
         <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
               <h6 class="h2 text-white d-inline-block mb-0">Data Siswa</h6>
               <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                     <li class="breadcrumb-item"><a href="#"><i class="fas fa-graduation-cap"></i></a></li>
                     <li class="breadcrumb-item"><a href="#">Biodata</a></li>
                  </ol>
               </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
               <div class="dropdown">
                  <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fa fa-file-excel" aria-hidden="true"></i><span>Batch</span>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                     <button class="dropdown-item" type="button" data-toggle="modal"
                        data-target="#uploadStudentModal"><i class="fas fa-upload"></i><span>Upload</span></button>
                     <a href="{{route('studentexport')}}" class="dropdown-item" type="button"><i
                           class="fas fa-download"></i><span>Download</span></a>
                     <button class="dropdown-item" id="resetStudentButton" type="button" data-toggle="modal"
                        data-target="#resetStudentModal"><i class="fas fa-redo-alt"></i><span>Reset</span></button>
                  </div>
               </div>
               <a href="#" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#addStudentModal"><i
                     class="fa fa-plus" aria-hidden="true"></i> Insert</a>
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
                        <th>Nama</th>
                        <th>NIS</th>
                        <th>No Peserta</th>
                        <th>Kelas</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @forelse($students as $key => $student)
                     <tr>
                        <td style="width: 4%"> {{ $key + 1 }} </td>
                        <td> {{ $student->nama }} </td>
                        <td> {{ $student->NIS }} </td>
                        <td> {{ $student->no_peserta }} </td>
                        <td> {{ $student->Kelas }} </td>
                        <td> {{ $student->TTL }} </td>
                        <td style="display: flex;">
                           <button type="button" class="btn btn-sm btn-primary" id="editStudentButton"
                              data-toggle="modal" data-target="#editStudentModal"
                              data-id="{{$student->id}}">Edit</button>
                           <button type="button" class="btn btn-sm btn-danger" id="deleteStudentButton"
                              data-toggle="modal" data-target="#deleteStudentModal"
                              data-destroy="{{$student->id}}">Delete</button>
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

   <!-- Modal -->
   <!-- Insert Modal -->
   <div class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form role="form" action="/siswa" method="POST">
               @csrf
               <div class="modal-body">
                  <div class="form-group">
                     <label for="nama">Nama Lengkap</label>
                     <input type="text" class="form-control" name="nama" id="nama" placeholder="Ahmad Sakur"
                        autocomplete="off" required>
                  </div>
                  <div class="form-group">
                     <label for="surat">Nomor Surat</label>
                     <input type="text" class="form-control" name="surat" id="surat" placeholder="423.5 / 111 / 2021"
                        autocomplete="off" required>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="NIS">NIS</label>
                        <input type="text" class="form-control" id="NIS" name="NIS" placeholder="Nomor Induk Sekolah"
                           required>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="NISN">NISN</label>
                        <input type="text" class="form-control" id="NISN" name="NISN"
                           placeholder="Nomor Induk Siswa Nasional" required>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-8">
                        <label for="TTL">Tempat, Tanggal Lahir</label>
                        <input type="text" class="form-control" id="TTL" name="TTL" autocomplete="off"
                           placeholder="Jakarta, 1 Januari 2000" required>
                     </div>
                     <div class="form-group col-md-4">
                        <label for="kelas">Kelas</label>
                        <select id="kelas" name="kelas" class="form-control" required>
                           <option value="MIPA 1">MIPA 1</option>
                           <option value="MIPA 2">MIPA 2</option>
                           <option value="MIPA 3">MIPA 3</option>
                           <option value="MIPA 4">MIPA 4</option>
                           <option value="IPS 1">IPS 1</option>
                           <option value="IPS 2">IPS 2</option>
                           <option value="IPS 3">IPS 3</option>
                           <option value="IPS 4">IPS 4</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="walimurid">Orang Tua/Wali</label>
                        <input type="text" class="form-control" id="walimurid" name="walimurid"
                           placeholder="Muhammad Bapak" required>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="noPeserta">Nomor Peserta</label>
                        <input type="text" class="form-control" id="noPeserta" name="noPeserta"
                           placeholder="31-139-xxxx" required>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary">Insert</button>
               </div>
            </form>
         </div>
      </div>
   </div>

   <!-- Update Modal -->
   <div class="modal fade" id="editStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Edit Siswa</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form role="form" action="{{ route('siswa.update','update') }}" method="POST">
               @method('PATCH')
               @csrf
               <div class="modal-body">
                  <input type="hidden" name="id" id="edit-id">
                  <div class="form-group">
                     <label for="edit-nama">Nama Lengkap</label>
                     <input type="text" class="form-control" name="nama" id="edit-nama" placeholder="Ahmad Sakur"
                        autocomplete="off" required>
                  </div>
                  <div class="form-group">
                     <label for="edit-surat">Nomor Surat</label>
                     <input type="text" class="form-control" name="surat" id="edit-surat"
                        placeholder="423.5 / 111 / 2021" autocomplete="off" required>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="edit-NIS">NIS</label>
                        <input type="text" class="form-control" id="edit-NIS" name="NIS"
                           placeholder="Nomor Induk Sekolah" required>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="edit-NISN">NISN</label>
                        <input type="text" class="form-control" id="edit-NISN" name="NISN"
                           placeholder="Nomor Induk Siswa Nasional" required>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-8">
                        <label for="edit-TTL">Tempat, Tanggal Lahir</label>
                        <input type="text" class="form-control" id="edit-TTL" name="TTL" autocomplete="off"
                           placeholder="Jakarta, 1 Januari 2000" required>
                     </div>
                     <div class="form-group col-md-4">
                        <label for="edit-kelas">Kelas</label>
                        <select id="edit-kelas" name="kelas" class="form-control" required>
                           <option value="MIPA 1">MIPA 1</option>
                           <option value="MIPA 2">MIPA 2</option>
                           <option value="MIPA 3">MIPA 3</option>
                           <option value="MIPA 4">MIPA 4</option>
                           <option value="IPS 1">IPS 1</option>
                           <option value="IPS 2">IPS 2</option>
                           <option value="IPS 3">IPS 3</option>
                           <option value="IPS 4">IPS 4</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="edit-walimurid">Orang Tua/Wali</label>
                        <input type="text" class="form-control" id="edit-walimurid" name="walimurid"
                           placeholder="Muhammad Bapak" required>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="edit-noPeserta">Nomor Peserta</label>
                        <input type="text" class="form-control" id="edit-noPeserta" name="noPeserta"
                           placeholder="31-139-xxxx" required>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary">Update</button>
               </div>
            </form>
         </div>
      </div>
   </div>

   <!-- Delete Modal -->
   <div class="modal fade" id="deleteStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Hapus Siswa</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form role="form" action="{{ route('siswa.destroy','delete') }}" method="POST">
               @method('DELETE')
               @csrf

               <div class="modal-body">
                  <h2>Anda Ingin Menghapus Data ?</h2>
                  <input type="hidden" name="id" id="delete-id">
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-danger">Delete</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Upload Modal -->
   <div class="modal fade" id="uploadStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Upload Data Siswa</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form role="form" action="{{route('studentimport')}}" method="POST" enctype="multipart/form-data">
               @csrf

               <div class="modal-body">
                  <h3>Pilih File Dataset</h3>
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
   <div class="modal fade" id="resetStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               {{-- <h5 class="modal-title" id="exampleModalLabel">Hapus Tabel Siswa</h5> --}}
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form role="form" action="{{ route('resetsiswa') }}" method="POST">
               @csrf

               <div class="modal-body">
                  <h3>Masukkan Password untuk menghapus data</h3>
                  <input type="password" class="form-control" name="password" id="resetpassword">
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
   /* Edit Student Modal*/
   $(document).on('click','button#editStudentButton',function(){
   let id = $(this).data('id');


   $.ajax({
      type: "get",
      url: 'siswa/'+id,
      dataType: 'json',
      success: function(res){
         console.log(res);
         
         $('#edit-id').val(res[0].id);
         $('#edit-nama').val(res[0].nama);
         $('#edit-surat').val(res[0].no_surat);
         $('#edit-NIS').val(res[0].NIS);
         $('#edit-NISN').val(res[0].NISN);
         $('#edit-TTL').val(res[0].TTL);
         $('#edit-kelas option').filter(function(){  
            return ($(this).val() == res[0].Kelas); 
         }).prop('selected', true);
         $('#edit-walimurid').val(res[0].wali_murid);
         $('#edit-noPeserta').val(res[0].no_peserta);


      }

   })


   });
   //delete modal

   $(document).on('click','button#deleteStudentButton',function(){
   let deleteID = $(this).data('destroy');
   $('#delete-id').val(deleteID);

});

   //reset modal

   $(document).on('click','button#resetStudentButton',function(){
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