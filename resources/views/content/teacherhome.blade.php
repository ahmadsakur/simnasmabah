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
                  data-target="#accountModal" class="mt-2 btn btn-sm btn-outline-neutral"
                  id="editAdminButton">Account</button>
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
</div>



@endsection
@push('customscripts')

<script>
   $( document ).ready(function() {

      var $chartRaport = $('#chart-raport');
      var Kelas = $('#editAdminButton').data("kelas");

      
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

</script>
@endpush