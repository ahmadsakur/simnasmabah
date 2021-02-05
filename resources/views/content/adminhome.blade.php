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
               {{-- <button type="button" data-id="{{Auth::user()->id}}" data-name="{{Auth::user()->name}}"
               data-email="{{Auth::user()->email}}" data-toggle="modal" data-target="#accountModal"
               class="btn btn-sm btn-neutral" id="editAdminButton">Account</button>
               <button type="button" id="editSettingsButton" data-toggle="modal" data-target="#settingsModal"
                  data-id="{{$settings->id}}" class="btn btn-sm btn-neutral">Settings</button> --}}
            </div>
         </div>
      </div>
   </div>
</div>
{{-- page content --}}
<div class="container-fluid mt--6">
   <div class="row">
      <div class="col-xl-7">
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
                  <canvas id="chart-bars" class="chart-canvas" data-ips1="{{$student[0]}}" data-ips2="{{$student[1]}}"
                     data-ips3="{{$student[2]}}" data-ips4="{{$student[3]}}" data-mipa1="{{$student[4]}}"
                     data-mipa2="{{$student[5]}}" data-mipa3="{{$student[6]}}" data-mipa4="{{$student[7]}}"></canvas>


               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-5">
         <div class="d-flex flex-row">
            <div class="col col-md-6">
               <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Account Setting</h5>
                           <button type="button" data-id="{{Auth::user()->id}}" data-name="{{Auth::user()->name}}"
                              data-email="{{Auth::user()->email}}" data-toggle="modal" data-target="#accountModal"
                              class="mt-2 btn btn-sm btn-outline-warning" id="editAdminButton">Account</button>
                        </div>
                        <div class="col-auto">
                           <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                              <i class="fa fa-user-circle" aria-hidden="true"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col col-md-6">
               <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Apps Setting</h5>
                           <button type="button" id="editSettingsButton" data-toggle="modal"
                              data-target="#settingsModal" data-id="{{$settings->id}}"
                              class="mt-2 btn btn-sm btn-outline-warning">Settings</button>
                        </div>
                        <div class="col-auto">
                           <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">

                              <i class="fa fa-cog" aria-hidden="true"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header border-0">
               <div class="row align-items-center">
                  <div class="col">
                     <h3 class="mb-0">Download Template</h3>
                  </div>
                  {{-- <div class="col text-right">
                     <a href="#!" class="btn btn-sm btn-danger"> <i class="fa fa-arrow-down" aria-hidden="true"></i>
                        <span>Download All</span></a>
                  </div> --}}
               </div>
            </div>
            <div class="card-body p-0">
               <div class="table-responsive table-oice">
                  <table class="table table-striped">
                     <tbody>
                        <tr>
                           <th>Nama File</th>
                           <th>Type</th>
                           <th>Action</th>
                        </tr>
                        <tr>
                           <td class="font-weight-600">Data Siswa</td>
                           <td>
                              <div class="badge badge-success">Excel</div>
                           </td>
                           <td>
                              <a href="#!" class="btn btn-sm btn-outline-success"> <i class="fa fa-arrow-down"
                                    aria-hidden="true"></i>
                                 <span>Download</span></a>
                           </td>
                        </tr>
                        <tr>
                           <td class="font-weight-600">Data Raport</td>
                           <td>
                              <div class="badge badge-success">Excel</div>
                           </td>
                           <td>
                              <a href="#!" class="btn btn-sm btn-outline-success"> <i class="fa fa-arrow-down"
                                    aria-hidden="true"></i>
                                 <span>Download</span></a>
                           </td>
                        </tr>
                        <tr>
                           <td class="font-weight-600">Data Ujian Sekolah</td>
                           <td>
                              <div class="badge badge-success">Excel</div>
                           </td>
                           <td>
                              <a href="#!" class="btn btn-sm btn-outline-success"> <i class="fa fa-arrow-down"
                                    aria-hidden="true"></i>
                                 <span>Download</span></a>
                           </td>
                        </tr>
                        <tr>
                           <td class="font-weight-600">Data Ujian Praktik</td>
                           <td>
                              <div class="badge badge-success">Excel</div>
                           </td>
                           <td>
                              <a href="#!" class="btn btn-sm btn-outline-success"> <i class="fa fa-arrow-down"
                                    aria-hidden="true"></i>
                                 <span>Download</span></a>
                           </td>
                        </tr>
                     </tbody>
                  </table>
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
                  <canvas id="chart-sales" class="chart-canvas" data-agama="{{$chart->AGM}}" data-pkn="{{$chart->PKN}}"
                     data-ind="{{$chart->IND}}" data-mtk="{{$chart->MTK}}" data-sej="{{$chart->SEJ}}"
                     data-en="{{$chart->EN}}" data-seni="{{$chart->SENI}}" data-pjok="{{$chart->PJOK}}"
                     data-pkwu="{{$chart->PKWU}}" data-jawa="{{$chart->JAWA}}" data-mtk2="{{$chart->MTK2}}"
                     data-bio="{{$chart->BIO}}" data-fis="{{$chart->FIS}}" data-kim="{{$chart->KIM}}"
                     data-pmt="{{$chart->PMT}}"></canvas>
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


// Chart
$( document ).ready(function() {
   var $chart = $('#chart-bars');
    function initChart($chart) {
      // let A1 = count('A1');


      let A1 = $('#chart-bars').data("mipa1");
      let A2 = $('#chart-bars').data("mipa2");
      let A3 = $('#chart-bars').data("mipa3");
      let A4 = $('#chart-bars').data("mipa4");
      let S1 = $('#chart-bars').data("ips1");
      let S2 = $('#chart-bars').data("ips2");
      let S3 = $('#chart-bars').data("ips3");
      let S4 = $('#chart-bars').data("ips4");
        // Create chart
        var ordersChart = new Chart($chart, {
            type: 'line',
            data: {
                labels: ['MIPA 1', 'MIPA 2', 'MIPA 3', 'MIPA 4', 'IPS 1', 'IPS 2', 'IPS 3', 'IPS 4'],
                datasets: [{
                    label: 'Siswa',
                    data: [A1,A2,A3,A4,S1,S2,S3,S4]
                }]
            }
        });

        // Save to jQuery object
        $chart.data('chart', ordersChart);
    }


    // Init chart
    if ($chart.length) {
        initChart($chart);
    }
    
});

//chart init
   // variabel
   var $chartRaport = $('#chart-sales');

   
      let AGM = $('#chart-sales').data("agama");
      let PKN = $('#chart-sales').data("pkn");
      let IND = $('#chart-sales').data("ind");
      let MTK = $('#chart-sales').data("mtk");
      let SEJ = $('#chart-sales').data("sej");
      let EN = $('#chart-sales').data("en");
      let SENI = $('#chart-sales').data("seni");
      let PJOK = $('#chart-sales').data("pjok");
      let PKWU = $('#chart-sales').data("pkwu");
      let JAWA = $('#chart-sales').data("jawa");
      let MTK2 = $('#chart-sales').data("mtk2");
      let BIO = $('#chart-sales').data("bio");
      let KIM = $('#chart-sales').data("kim");
      let FIS = $('#chart-sales').data("fis");
      let PMT = $('#chart-sales').data("pmt");
   var chart = new Chart($chartRaport, {
      // The type of chart we want to create
      type: 'bar',

      // The data for our dataset
      data: {
         labels: ['Agama', 'PKN', 'B. Indo', 'MTK', 'SEJ IND', 'B. Inggris', 'SENI', 'PJOK', 'PKWU', 'B. Jawa', 'MTK 2', 'Biologi', 'Fisika', 'Kimia', 'Peminatan'],
         datasets: [{
                    label: 'Rata Rata',
                    data: [AGM, PKN, IND, MTK, SEJ, EN, SENI, PJOK, PKWU, JAWA, MTK2, BIO, FIS, KIM, PMT]
                }]
      },

      // Configuration options go here
      options: {}
   });    


//toggle raport chart 
$(document).on('click','li#toggleMipaButton',function(){

   
   let id = 'MIPA';

   $.ajax({
      type: "get",
      url: 'updatechart/'+id,
      dataType: 'json',
      success: function(res){
         chart.data.labels = ['Agama', 'PKN', 'B. Indo', 'MTK', 'SEJ IND', 'B. Inggris', 'SENI', 'PJOK', 'PKWU', 'B. Jawa', 'MTK 2', 'Biologi', 'Fisika', 'Kimia', 'Peminatan']
         chart.data.datasets[0].data = [res.AGM, res.PKN, res.IND, res.MTK, res.SEJ, res.EN, res.SENI, res.PJOK, res.PKWU, res.JAWA, res.MTK2, res.BIO, res.FIS, res.KIM, res.PMT]
         chart.update();      
      }

   })


});

$(document).on('click','li#toggleIpsButton',function(){
   let id = 'IPS';

   $.ajax({
      type: "get",
      url: 'updatechart/'+id,
      dataType: 'json',
      success: function(res){
         chart.data.labels = ['Agama', 'PKN', 'B. Indo', 'MTK', 'SEJ IND', 'B. Inggris', 'SENI', 'PJOK', 'PKWU', 'B. Jawa', 'Geografi', 'Sejarah', 'Sosiologi', 'Ekonomi', 'Peminatan']
         chart.data.datasets[0].data = [res.AGM, res.PKN, res.IND, res.MTK, res.SEJ, res.EN, res.SENI, res.PJOK, res.PKWU, res.JAWA, res.MTK2, res.BIO, res.FIS, res.KIM, res.PMT]
         chart.update();      
      }

   })


});


</script>
@endpush