@extends('layouts.adminpanel')
@section('content')
<!-- Header -->
<div class="header bg-primary pb-6">
   <div class="container-fluid">
      <div class="header-body">
         <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
               <h6 class="h2 text-white d-inline-block mb-0">Admin Settings</h6>
               <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                     <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="#">Account</a></li>
                     {{-- <li class="breadcrumb-item active" aria-current="page">Default</li> --}}
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>
</div>
{{-- page content --}}
<div class="container-fluid mt--6">
   <div class="row">
      <div class="col-lg-6">
         <div class="card-wrapper">
            <!-- Input groups -->
            <div class="card">
               <!-- Card header -->
               <div class="card-header">
                  <h3 class="mb-0">Pengaturan Akun</h3>
               </div>
               <!-- Card body -->
               <div class="card-body">
                  <form>
                     <!-- Input groups with icon -->
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <div class="input-group input-group-merge">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                 </div>
                                 <input class="form-control" placeholder="Your name" type="text">
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <div class="input-group input-group-merge">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                 </div>
                                 <input class="form-control" placeholder="Email address" type="email">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <div class="input-group input-group-merge">
                                 <input class="form-control" placeholder="Location" type="text">
                                 <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <div class="input-group input-group-merge">
                                 <input class="form-control" placeholder="Password" type="password">
                                 <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-eye"></i></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Input groups with icon -->
                     <div class="row">
                        <button type="submit" class="btn btn-outline-success">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-6">
         <div class="card-wrapper">
            <div class="card">
               <!-- Card header -->
               <div class="card-header">
                  <h3 class="mb-0">Input groups</h3>
               </div>
               <!-- Card body -->
               <div class="card-body">
                  <form>
                     <!-- Input groups with icon -->
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <div class="input-group input-group-merge">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                 </div>
                                 <input class="form-control" placeholder="Your name" type="text">
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <div class="input-group input-group-merge">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                 </div>
                                 <input class="form-control" placeholder="Email address" type="email">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <div class="input-group input-group-merge">
                                 <input class="form-control" placeholder="Location" type="text">
                                 <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <div class="input-group input-group-merge">
                                 <input class="form-control" placeholder="Password" type="password">
                                 <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-eye"></i></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Input groups with icon -->
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <div class="input-group input-group-merge">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                                 </div>
                                 <input class="form-control" placeholder="Payment method" type="text">
                                 <div class="input-group-append">
                                    <span class="input-group-text"><small class="font-weight-bold">USD</small></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <div class="input-group input-group-merge">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                                 </div>
                                 <input class="form-control" placeholder="Phone number" type="text">
                                 <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div> <!-- row -->
</div>

@endsection