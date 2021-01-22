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
               <a href="#" class="btn btn-sm btn-neutral">New</a>
               <a href="#" class="btn btn-sm btn-neutral">Filters</a>
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
                           <h5 class="card-title text-uppercase text-muted mb-0">Total traffic</h5>
                           <span class="h2 font-weight-bold mb-0">350,897</span>
                        </div>
                        <div class="col-auto">
                           <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                              <i class="ni ni-active-40"></i>
                           </div>
                        </div>
                     </div>
                     <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span class="text-nowrap">Since last month</span>
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-6">
               <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                           <span class="h2 font-weight-bold mb-0">2,356</span>
                        </div>
                        <div class="col-auto">
                           <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                              <i class="ni ni-chart-pie-35"></i>
                           </div>
                        </div>
                     </div>
                     <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span class="text-nowrap">Since last month</span>
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-6">
               <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                           <span class="h2 font-weight-bold mb-0">924</span>
                        </div>
                        <div class="col-auto">
                           <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                              <i class="ni ni-money-coins"></i>
                           </div>
                        </div>
                     </div>
                     <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span class="text-nowrap">Since last month</span>
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-6">
               <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                           <span class="h2 font-weight-bold mb-0">49,65%</span>
                        </div>
                        <div class="col-auto">
                           <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                              <i class="ni ni-chart-bar-32"></i>
                           </div>
                        </div>
                     </div>
                     <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span class="text-nowrap">Since last month</span>
                     </p>
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
      <div class="col-xl-8">
         <div class="card">
            <div class="card-header">
               <h4>Invoices</h4>
               <div class="card-header-action">
                  <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
               </div>
            </div>
            <div class="card-body p-0">
               <div class="table-responsive table-invoice">
                  <table class="table table-striped">
                     <tbody>
                        <tr>
                           <th>Invoice ID</th>
                           <th>Customer</th>
                           <th>Status</th>
                           <th>Due Date</th>
                           <th>Action</th>
                        </tr>
                        <tr>
                           <td><a href="#">INV-87239</a></td>
                           <td class="font-weight-600">Kusnadi</td>
                           <td>
                              <div class="badge badge-warning">Unpaid</div>
                           </td>
                           <td>July 19, 2018</td>
                           <td>
                              <a href="#" class="btn btn-sm btn-primary">Detail</a>
                           </td>
                        </tr>
                        <tr>
                           <td><a href="#">INV-48574</a></td>
                           <td class="font-weight-600">Hasan Basri</td>
                           <td>
                              <div class="badge badge-success">Paid</div>
                           </td>
                           <td>July 21, 2018</td>
                           <td>
                              <a href="#" class="btn btn-sm btn-primary">Detail</a>
                           </td>
                        </tr>
                        <tr>
                           <td><a href="#">INV-76824</a></td>
                           <td class="font-weight-600">Muhamad Nuruzzaki</td>
                           <td>
                              <div class="badge badge-warning">Unpaid</div>
                           </td>
                           <td>July 22, 2018</td>
                           <td>
                              <a href="#" class="btn btn-sm btn-primary">Detail</a>
                           </td>
                        </tr>
                        <tr>
                           <td><a href="#">INV-84990</a></td>
                           <td class="font-weight-600">Agung Ardiansyah</td>
                           <td>
                              <div class="badge badge-warning">Unpaid</div>
                           </td>
                           <td>July 22, 2018</td>
                           <td>
                              <a href="#" class="btn btn-sm btn-primary">Detail</a>
                           </td>
                        </tr>
                        <tr>
                           <td><a href="#">INV-87320</a></td>
                           <td class="font-weight-600">Ardian Rahardiansyah</td>
                           <td>
                              <div class="badge badge-success">Paid</div>
                           </td>
                           <td>July 28, 2018</td>
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
      <div class="col-xl-4">
         <div class="card">
            <div class="card-header border-0">
               <div class="row align-items-center">
                  <div class="col">
                     <h3 class="mb-0">Social traffic</h3>
                  </div>
                  <div class="col text-right">
                     <a href="#!" class="btn btn-sm btn-primary">See all</a>
                  </div>
               </div>
            </div>
            <div class="table-responsive">
               <!-- Projects table -->
               <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                     <tr>
                        <th scope="col">Referral</th>
                        <th scope="col">Visitors</th>
                        <th scope="col"></th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <th scope="row">
                           Facebook
                        </th>
                        <td>
                           1,480
                        </td>
                        <td>
                           <div class="d-flex align-items-center">
                              <span class="mr-2">60%</span>
                              <div>
                                 <div class="progress">
                                    <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60"
                                       aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                 </div>
                              </div>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <th scope="row">
                           Facebook
                        </th>
                        <td>
                           5,480
                        </td>
                        <td>
                           <div class="d-flex align-items-center">
                              <span class="mr-2">70%</span>
                              <div>
                                 <div class="progress">
                                    <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="70"
                                       aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                 </div>
                              </div>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <th scope="row">
                           Google
                        </th>
                        <td>
                           4,807
                        </td>
                        <td>
                           <div class="d-flex align-items-center">
                              <span class="mr-2">80%</span>
                              <div>
                                 <div class="progress">
                                    <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80"
                                       aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                 </div>
                              </div>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <th scope="row">
                           Instagram
                        </th>
                        <td>
                           3,678
                        </td>
                        <td>
                           <div class="d-flex align-items-center">
                              <span class="mr-2">75%</span>
                              <div>
                                 <div class="progress">
                                    <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="75"
                                       aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                 </div>
                              </div>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <th scope="row">
                           twitter
                        </th>
                        <td>
                           2,645
                        </td>
                        <td>
                           <div class="d-flex align-items-center">
                              <span class="mr-2">30%</span>
                              <div>
                                 <div class="progress">
                                    <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="30"
                                       aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                                 </div>
                              </div>
                           </div>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div> <!-- Row -->
</div>

@endsection