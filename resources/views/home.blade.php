<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- CDN -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- CSS -->
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
   <link rel="stylesheet" href="{{asset('css/landing.css')}}">
   <!-- fonts -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

   {{-- login asset --}}
   <link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">



   <title>SIMNA</title>
</head>

<body>
   <div class="container">
      <div class="row landing">
         <div class="col-lg-6 landing-teks">
            <h3 class="headline">Sistem Informasi Management Nilai Akhir</h3>
         </div>
         <div class="col-lg-4 offset-lg-2">
            <div class="wrap-login100">
               <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                  @csrf
                  <span class="login100-form-title p-b-26">
                     Sign In
                  </span>
                  <span class="login100-form-title p-b-48">
                     <i class="zmdi zmdi-font"></i>
                  </span>

                  <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                     <input class="input100" type="text" name="email" id="email" autocomplete="off">
                     <span class="focus-input100" data-placeholder="Email"></span>
                  </div>

                  <div class="wrap-input100 validate-input" data-validate="Enter password">
                     <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                     </span>
                     <input class="input100" type="password" name="password" id="password">
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
   {{-- end of Content --}}


   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
   </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
   </script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
   </script>

   {{-- login asset --}}
   <script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
   <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
   <script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
   <script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
   <script src="{{asset('js/main.js')}}"></script>
</body>

</html>