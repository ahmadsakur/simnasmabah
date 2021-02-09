@extends('layouts.adminpanel')
@section('content')
<div class="header bg-primary pb-6">
   <div class="container-fluid">
      <div class="header-body">
         <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
               <h6 class="h2 text-white d-inline-block mb-0">Data Guru</h6>
               <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                     <li class="breadcrumb-item"><a href="#"><i class="fas fa-chalkboard-teacher"></i></a></li>
                     <li class="breadcrumb-item"><a href="#">Akun</a></li>
                     {{-- <li class="breadcrumb-item active" aria-current="page">Wali Kelas</li> --}}
                  </ol>
               </nav>
            </div>
            @if (count($employees) <8) <div class="col-lg-6 col-5 text-right">
               <a href="#" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#addTeacherModal"><i
                     class="fa fa-plus" aria-hidden="true"></i> Insert</a>
         </div>
         @endif

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
                        <th>Kelas</th>
                        <th>Email</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @forelse($employees as $key => $employee)
                     <tr>
                        <td style="width: 8%"> {{ $key }} </td>
                        <td> {{ $employee->name }} </td>
                        <td> {{ $employee->class }} </td>
                        <td> {{ $employee->email }} </td>
                        <td style="display: flex;">
                           <button type="button" class="btn btn-sm btn-primary" id="editTeacherButton"
                              data-toggle="modal" data-target="#editTeacherModal" data-id="{{$employee->id}}"
                              data-name="{{$employee->name}}" data-email="{{$employee->email}}"
                              data-class="{{$employee->class}}">Edit</button>
                           <button type="button" class="btn btn-sm btn-danger" id="deleteTeacherButton"
                              data-toggle="modal" data-target="#deleteTeacherModal"
                              data-destroy="{{$employee->id}}">Delete</button>
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


   {{-- Modal --}}

   <!-- Add Teacher -->
   <div class="modal fade" id="addTeacherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Tambah Wali Kelas</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form role="form" action="/guru" method="POST">
               @csrf
               <div class="modal-body">
                  <div class="form-group">
                     <label for="name">Nama Lengkap</label>
                     <input type="text" class="form-control" name="name" placeholder="ex : ahmad sakur"
                        autocomplete="off" required>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-8">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" autocomplete="off"
                           placeholder="guru@smabah.com" required>
                     </div>
                     <div class="form-group col-md-4">
                        <label for="class">Kelas</label>
                        <select name="class" class="form-control" required>
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
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                           required>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="confirmPassword">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                           placeholder="Confirm Password" required>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
               </div>
            </form>
         </div>
      </div>
   </div>

   <!-- Edit Teacher -->
   <div class="modal fade" id="editTeacherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Edit Wali Kelas</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form role="form" action="{{ route('guru.update','update') }}" method="POST">
               @method('PATCH')
               @csrf
               <div class="modal-body">
                  <input type="hidden" name="id" id="edit-id">
                  <div class="form-group">
                     <label for="name">Nama Lengkap</label>
                     <input type="text" class="form-control" name="name" id="edit-name">
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-8">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" autocomplete="off" id="edit-email">
                     </div>
                     <div class="form-group col-md-4">
                        <label for="class">Kelas</label>
                        <select name="class" class="form-control" id="edit-class">
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
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="confirmPassword">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
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


   <!-- Delete Teacher -->
   <div class="modal fade" id="deleteTeacherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Hapus Wali Kelas</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form role="form" action="{{ route('guru.destroy','delete') }}" method="POST">
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

   {{-- end of modal --}}


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

// edit modal
$(document).on('click','button#editTeacherButton',function(){
   let id = $(this).data('id');
   // native js way
   // let kelas =$(this).data('class');
   // let name = $(this).data('name');
   // let email = $(this).data('email');
  


   // $('#edit-id').val(id);
   // $('#edit-name').val(name);
   // $('#edit-email').val(email);
   // $('#edit-class option').filter(function(){  
   //    return ($(this).val() == kelas); 
   // }).prop('selected', true);

    //ajax way
   $.ajax({
      type: "get",
      url: 'guru/'+id,
      dataType: 'json',
      success: function(res){
         $('#edit-id').val(res[0].id);
         $('#edit-name').val(res[0].name);
         $('#edit-email').val(res[0].email);
         $('#edit-class option').filter(function(){  
            return ($(this).val() == res[0].class); 
         }).prop('selected', true);


      }

   })


});
//delete modal
$(document).on('click','button#deleteTeacherButton',function(){
   let deleteID = $(this).data('destroy');
   $('#delete-id').val(deleteID);

});



</script>
@endpush