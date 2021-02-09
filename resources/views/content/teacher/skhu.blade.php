@extends('layouts.teacherpanel')
@section('content')
<!-- Header -->
<div class="header bg-success pb-6">
   <div class="container-fluid">
      <div class="header-body">
         <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
               <h6 class="h2 text-white d-inline-block mb-0">Download SKHU</h6>
               <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                     <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="#">{{Auth::user()->class}}</a></li>
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
                  {{-- <div class="col-lg-6 col-5 text-right">
                     <a href="#" class="btn btn-sm btn-success"><i class="fa fa-chevron-down" aria-hidden="true"></i>
                        Download All</a>
                  </div> --}}
               </div>
            </div>
            <div class="card-body p-0">
               <div class="table-responsive table-invoice">
                  <table class="table table-striped" id="datatable-basic">
                     <thead class="thead-light">
                        <tr>
                           <th>Nomor Surat</th>
                           <th>Nama Lengkap</th>
                           <th>NIS</th>
                           <th>Kelas</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @forelse($skhu as $key => $item)
                        <tr>
                           {{-- <td>{{$key}}</td> --}}
                           <td>{{$item->no_surat}}</td>
                           <td>{{$item->nama}}</td>
                           <td>{{$item->NIS}}</td>
                           <td>{{$item->Kelas}}</td>
                           <td><a href="/downloadskhu/{{$item->NIS}}" class="btn btn-sm btn-primary"><i
                                    class="fa fa-chevron-down" aria-hidden="true"></i>
                                 Download</a></td>
                        </tr>
                        @empty
                        <tr>
                           <td colspan="6" align="center">Data Siswa Tidak di temukan</td>
                        </tr>
                        @endforelse
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div> <!-- Row -->
</div>

@endsection