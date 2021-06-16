<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>SIMNA</title>

   <!-- CDN -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

   <!-- CSS -->
   <link rel="stylesheet" href="landing/css/style.css">
   <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
   <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>

<body class="is-boxed has-animations">
   <div class="body-wrap boxed-container">
      <header class="site-header">
         <div class="container">
            <div class="site-header-inner">
               <div class="brand header-brand">
                  <img src="img/simna.svg" alt="logo simna" width="70px">
               </div>
            </div>
         </div>
      </header>

      <main>
         <section>
            <div class="container hero-banner">
               <div class="row landing">
                  <div class="col-lg-6 teks-kiri">
                     <h1 class="hero-title h2-mobile mt-0 is-revealing">SIMNA | SMA N 1 Subah</h1>
                     <p class="hero-paragraph is-revealing">Sistem Informasi Manajemen Nilai Akhir (SIMNA) merupakan
                        Sistem Informasi berbasis Website untuk mengelola Nilai Siswa.</p>
                     <div class="hero-form newsletter-form is-revealing">
                        <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#loginModal">Log In<span><i class="fa fa-external-link" aria-hidden="true"></i></span></button>
                     </div>
                     <footer class="footer pt-0">
                        <h6 class="text-muted copyright">&copy; 2021 SIMNA | SMA N 1 Subah</h6>
                     </footer>
                  </div>
                  <div class="col-lg-6">
                     <img class="hero-img is-revealing" src="img/scene-3.svg" alt="" srcset="">
                  </div>
               </div>
            </div>
         </section>
         {{-- modal login --}}
         <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  {{-- <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel"></h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div> --}}
                  <div class="wrap-login100">
                     <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <span class="login100-form-title p-b-26">
                           Selamat Datang
                        </span>
                        {{-- <p class="text-sm text-center">Sistem Informasi Manajemen Nilai Akhir</p> --}}
                        <span class="login100-form-title p-b-48">
                           <img src="{{asset('img/logosmabah.png')}}" alt="" width="50px" class="mx-auto d-block">
                        </span>
                        

                        <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                           <input class="input100" type="email" name="email" id="email" autocomplete="off" required>
                           <span class="focus-input100" data-placeholder="Email"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                           <span class="btn-show-pass">
                              <i class="zmdi zmdi-eye"></i>
                           </span>
                           <input class="input100" type="password" name="password" id="password" required>
                           <span class="focus-input100" data-placeholder="Password"></span>
                        </div>

                        <div class="container-login100-form-btn">
                           <div class="wrap-login100-form-btn">
                              <div class="login100-form-bgbtn"></div>
                              <button class="login100-form-btn">
                                 Login
                              </button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         {{-- end of modal --}}
      </main>
   </div>

   <script src="landing/js/main.min.js"></script>
   <script src="{{asset('argon/vendor/jquery/jquery.min.js')}}"></script>
   <script src="argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <script src="argon/vendor/js-cookie/js.cookie.js"></script>
   <script src="argon/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
   </script>
   {{-- login asset --}}
   <script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
   <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
   <script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
   <script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
   <script src="{{asset('js/main.js')}}"></script>
   @include('sweetalert::alert')
</body>

</html>