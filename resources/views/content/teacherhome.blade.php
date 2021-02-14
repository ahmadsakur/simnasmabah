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
                  data-email="{{Auth::user()->email}}" data-kelas="{{Auth::user()->class}}" data-toggle="modal"
                  data-target="#settingModal" class="mt-2 btn btn-sm btn-outline-neutral"
                  id="editTeacherButton">Account</button>
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
                     <h6 class="text-uppercase text-muted ls-1 mb-1">Grafik Nilai</h6>
                     <h5 class="h3 mb-0">Rata Rata Raport</h5>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <!-- Chart -->
               <div class="chart">
                  <canvas id="chart-raport" class="chart-canvas"></canvas>
               </div>
            </div>
         </div>
      </div>
   </div> <!-- row -->
   <!-- akun modal -->
   <div class="modal fade" id="settingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Pengaturan Akun</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form role="form" action="{{route('updateguru')}}" method="POST">
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
</div>



@endsection
@push('customscripts')

<script>
   $( document ).ready(function() {

      var $chartRaport = $('#chart-raport');
      var Kelas = $('#editTeacherButton').data("kelas");

      $.ajax({
      type: "get",
      url: 'teacherchart/',
      dataType: 'json',
      success: function(res){         
         if (Kelas.match('MIPA') == null) {
            var chart = new Chart($chartRaport, {
            type: 'bar',

            // The data for our dataset
            data: {
               labels: ['Agama', 'PKN', 'B. Indo', 'MTK', 'SEJ IND', 'B. Inggris', 'SENI', 'PJOK', 'PKWU', 'B. Jawa', 'Geografi', 'Sejarah', 'Sosiologi', 'Ekonomi', 'Peminatan'],
               datasets: [{
                        label: 'Rata Rata',
                        data: [res.AGM, res.PKN, res.IND, res.MTK, res.SEJ, res.EN, res.SENI, res.PJOK, res.PKWU, res.JAWA, res.J1, res.J2, res.J3, res.J4, res.PMT]     
                     }]
            },
            options: {}
          }); 
         } else {
            var chart = new Chart($chartRaport, {
            type: 'bar',

            // The data for our dataset
            data: {
               labels: ['Agama', 'PKN', 'B. Indo', 'MTK', 'SEJ IND', 'B. Inggris', 'SENI', 'PJOK', 'PKWU', 'B. Jawa', 'MTK 2', 'Biologi', 'Fisika', 'Kimia', 'Peminatan'],
               datasets: [{
                        label: 'Rata Rata',
                        data: [res.AGM, res.PKN, res.IND, res.MTK, res.SEJ, res.EN, res.SENI, res.PJOK, res.PKWU, res.JAWA, res.J1, res.J2, res.J3, res.J4, res.PMT]     
                     }]
            },
            options: {}
          }); 
            
         } 
      }



      });
   });



   //edit akun
   $(document).on('click','button#editTeacherButton',function(){
   let id = $(this).data('id');
   let name = $(this).data('name');
   let email = $(this).data('email');
  
   $('#edit-id').val(id);
   $('#edit-name').val(name);
   $('#edit-email').val(email);
   
});


   //validasi password
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

</script>
@endpush