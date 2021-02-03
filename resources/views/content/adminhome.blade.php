@extends('layouts.adminpanel')
@section('content')
<!-- Header -->
<div class="header bg-primary pb-6">
   <div class="container-fluid">
      <div class="header-body">
         <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
               <h6 class="h2 text-white d-inline-block mb-0">Admin Panel</h6>
               <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                     <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                     {{-- <li class="breadcrumb-item active" aria-current="page">Default</li> --}}
                  </ol>
               </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
               <button type="button" data-id="{{Auth::user()->id}}" data-name="{{Auth::user()->name}}"
                  data-email="{{Auth::user()->email}}" data-toggle="modal" data-target="#accountModal"
                  class="btn btn-sm btn-neutral" id="editAdminButton">Account</button>
               <button type="button" id="editSettingsButton" data-toggle="modal" data-target="#settingsModal"
                  data-id="{{$settings->id}}" class="btn btn-sm btn-neutral">Settings</button>
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
                           <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Siswa</h5>
                           <span class="h2 font-weight-bold mb-0">350,897</span>
                        </div>
                        <div class="col-auto">
                           <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                              <i class="ni ni-active-40"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-6">
               <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Wali Kelas</h5>
                           <span class="h2 font-weight-bold mb-0">2,356</span>
                        </div>
                        <div class="col-auto">
                           <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                              <i class="ni ni-chart-pie-35"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-6">
               <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Data X</h5>
                           <span class="h2 font-weight-bold mb-0">924</span>
                        </div>
                        <div class="col-auto">
                           <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                              <i class="ni ni-money-coins"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-6">
               <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Data Y</h5>
                           <span class="h2 font-weight-bold mb-0">49,65%</span>
                        </div>
                        <div class="col-auto">
                           <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                              <i class="ni ni-chart-bar-32"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
{{-- page content --}}
<div class="container-fluid mt--6">
   <div class="row">
      <div class="col-xl-5">
         <div class="card">
            <div class="card-header border-0">
               <div class="row align-items-center">
                  <div class="col">
                     <h3 class="mb-0">Download Template</h3>
                  </div>
                  <div class="col text-right">
                     <a href="#!" class="btn btn-sm btn-danger"> <i class="fa fa-arrow-down" aria-hidden="true"></i>
                        <span>Download All</span></a>
                  </div>
               </div>
            </div>
            <div class="card-body p-0">
               <div class="table-responsive table-oice">
                  <table class="table table-striped">
                     <tbody>
                        <tr>
                           <th>No</th>
                           <th>Nama File</th>
                           <th>Type</th>
                           <th>Action</th>
                        </tr>
                        <tr>
                           <td><a href="#">1</a></td>
                           <td class="font-weight-600">Data Siswa</td>
                           <td>
                              <div class="badge badge-success">Exel</div>
                           </td>
                           <td>
                              <a href="#" class="btn btn-sm btn-primary">Detail</a>
                           </td>
                        </tr>
                        <tr>
                           <td><a href="#">2</a></td>
                           <td class="font-weight-600">Data Raport</td>
                           <td>
                              <div class="badge badge-success">Excel</div>
                           </td>
                           <td>
                              <a href="#" class="btn btn-sm btn-primary">Detail</a>
                           </td>
                        </tr>
                        <tr>
                           <td><a href="#">3</a></td>
                           <td class="font-weight-600">Data Ujian Sekolah</td>
                           <td>
                              <div class="badge badge-success">Excel</div>
                           </td>
                           <td>
                              <a href="#" class="btn btn-sm btn-primary">Detail</a>
                           </td>
                        </tr>
                        <tr>
                           <td><a href="#">4</a></td>
                           <td class="font-weight-600">Data Ujian Praktik</td>
                           <td>
                              <div class="badge badge-success">Excel</div>
                           </td>
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
      <div class="col-xl-7">
         <div class="card">
            <div class="card-header border-0">
               <div class="row align-items-center">
                  <div class="col">
                     <h3 class="mb-0">gatau diisi apa</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> <!-- Row -->
   <!-- akun modal -->
   <div class="modal fade" id="accountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Pengaturan Akun</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form role="form" action="{{route('updateAdmin')}}" method="POST">
               @method('PATCH')
               @csrf
               <div class="modal-body">
                  <input type="hidden" name="id" id="edit-id">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="name">Nama</label>
                           <div class="input-group input-group-merge">
                              <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fas fa-user"></i></span>
                              </div>
                              <input class="form-control" placeholder="Nama Lengkap" type="text" name="name"
                                 id="edit-name" required autocomplete="off">
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="email">Email</label>
                           <div class="input-group input-group-merge">
                              <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                              </div>
                              <input class="form-control" placeholder="Email" type="email" name="email" id="edit-email"
                                 required>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <label for="password">Password</label>
                        <div class="form-group">
                           <div class="input-group input-group-merge">
                              <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fa fa-lock"></i></span>
                              </div>
                              <input class="form-control" placeholder="Password" type="password" name="password"
                                 id="password" required>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="confirmPassword">Konfirmasi Password</label>
                        <div class="form-group">
                           <div class="input-group input-group-merge">
                              <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fa fa-lock"></i></span>
                              </div>
                              <input class="form-control" placeholder="Password" type="password" name="confirmPassword"
                                 id="confirmPassword" required>
                           </div>
                        </div>
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
   <!-- settings modal -->
   <div class="modal fade" id="settingsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Pengaturan Sistem</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form role="form" action="{{route('settings.update','update')}}" method="POST">
               @method('PATCH')
               @csrf
               <div class="modal-body">
                  <input type="hidden" name="id" id="settings-id">
                  <div class="row">
                     <div class="col-md-12">
                        <label for="kepsek">Kepala Sekolah</label>
                        <div class="form-group">
                           <div class="input-group input-group-merge">
                              <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fa fa-user"></i></span>
                              </div>
                              <input class="form-control" placeholder="Kepala Sekolah" type="text" name="kepsek"
                                 id="settings-kepsek" required>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-8">
                        <div class="form-group">
                           <label for="NIP">NIP</label>
                           <div class="input-group input-group-merge">
                              <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fa fa-id-badge"></i></span>
                              </div>
                              <input class="form-control" placeholder="Nomor Induk Pegawai" type="text" name="NIP"
                                 id="settings-NIP" required>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="KKM">KKM</label>
                           <div class="input-group input-group-merge">
                              <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fas fa-user"></i></span>
                              </div>
                              <input class="form-control" placeholder="Batas KKM" type="number" min="0" max="100"
                                 name="KKM" id="settings-KKM" required>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <label for="presentase-US">Presentase Ujian Sekolah</label>
                        <div class="form-group">
                           <div class="input-group input-group-merge">
                              <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fa fa-lock"></i></span>
                              </div>
                              <input class="form-control" placeholder="% Ujian Sekolah" type="number" min="0" max="100"
                                 name="presentase-US" id="settings-US">
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="presentase-UP">Presentase Ujian Praktek</label>
                        <div class="form-group">
                           <div class="input-group input-group-merge">
                              <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fa fa-lock"></i></span>
                              </div>
                              <input class="form-control" placeholder="$ Ujian Praktek" type="number" min="0" max="100"
                                 name="presentase-UP" id="settings-UP">
                           </div>
                        </div>
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
   <!-- end of modal-->
</div>

@endsection

@push('customscripts')
<script>
   var password = document.getElementById("password");
   var confirm_password = document.getElementById("confirmPassword");

   function validatePassword(){
      if(password.value != confirm_password.value) {
         confirm_password.setCustomValidity("Passwords Don't Match");
      } else {
         confirm_password.setCustomValidity('');
      }
   }

   password.onchange = validatePassword;
   confirm_password.onkeyup = validatePassword;

// edit akun modal
$(document).on('click','button#editAdminButton',function(){
   let id = $(this).data('id');
   // native js way
   let name = $(this).data('name');
   let email = $(this).data('email');
  
   $('#edit-id').val(id);
   $('#edit-name').val(name);
   $('#edit-email').val(email);
   
});

//edit setting modal
$(document).on('click','button#editSettingsButton',function(){
   let id = $(this).data('id');
   $.ajax({
      type: "get",
      url: 'settings/'+id,
      dataType: 'json',
      success: function(res){         
         $('#settings-id').val(res[0].id);
         $('#settings-kepsek').val(res[0].kepala_sekolah);
         $('#settings-KKM').val(res[0].KKM);
         $('#settings-NIP').val(res[0].NIP);
         $('#settings-US').val(res[0].presentase_US);
         $('#settings-UP').val(res[0].presentase_UP);
         
      }

   })
});


</script>
@endpush