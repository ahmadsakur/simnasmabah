@extends('layouts.adminpanel')
@section('content')
<div class="header bg-primary pb-6">
   <div class="container-fluid">
      <div class="header-body">
         <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
               <h6 class="h2 text-white d-inline-block mb-0">Data Wali Murid</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
               <a href="#" class="btn btn-sm btn-neutral">New</a>
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
                        <th wid>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Email</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @forelse($employees as $key => $employee)
                     <tr>
                        <td style="width: 8%"> {{ $key + 1 }} </td>
                        <td> {{ $employee->name }} </td>
                        <td> {{ $employee->class }} </td>
                        <td> {{ $employee->email }} </td>
                        <td style="display: flex;">
                           <form action="/pegawai/{{$employee->id}}" method="post">
                              @csrf
                              @method('DELETE')
                              <input type="submit" value="delete" class="btn btn-danger btn-sm">
                           </form>
                        </td>
                     </tr>
                     @empty
                     <tr>
                        <td colspan="5" align="center">Data Tidak Ditemukan</td>
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