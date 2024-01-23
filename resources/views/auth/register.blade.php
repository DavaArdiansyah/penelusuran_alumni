{{-- @extends('layouts.app')

@section('content')
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="no_telp"
                                    class="col-md-4 col-form-label text-md-end">{{ __('No Telepon') }}</label>

                                <div class="col-md-6">
                                    <input id="no_telp" type="text"
                                        class="form-control @error('no_telp') is-invalid @enderror" name="no_telp"
                                        value="{{ old('no_telp') }}" required autocomplete="no_telp" autofocus>

                                    @error('no_telp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
 @endsection --}}
 <!DOCTYPE html>
 <html>
 <head>
     <!-- Basic Page Info -->
     <meta charset="utf-8">
     <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

     <!-- Site favicon -->
     <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/admin') }}/vendors/images/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/admin') }}/vendors/images/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/admin') }}/vendors/images/favicon-16x16.png">

     <!-- Mobile Specific Metas -->
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <!-- Google Font -->
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
     <!-- CSS -->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin') }}/vendors/styles/core.css">
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin') }}/vendors/styles/icon-font.min.css">
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin') }}/vendors/styles/style.css">

     <!-- Global site tag (gtag.js) - Google Analytics -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
     <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());

         gtag('config', 'UA-119386393-1');
     </script>
 </head>
 <body class="login-page">
     <div class="login-header box-shadow">
         <div class="container-fluid d-flex justify-content-between align-items-center">
             <div class="brand-logo">
                 <a href="login.html">
                     <img src="{{ asset('assets/admin') }}/vendors/images/deskapp-logo.svg" alt="">
                 </a>
             </div>
             <div class="login-menu">
                 <ul>
                     <li><a href="{{route('login')}}">Login</a></li>
                 </ul>
             </div>
         </div>
     </div>
     <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-md-6 col-lg-7">
                     <img src="{{ asset('assets/admin') }}/vendors/images/login-page-img.png" alt="">
                 </div>
                 <div class="col-md-6 col-lg-5">
                     <div class="login-box bg-white box-shadow border-radius-10">
                         <div class="login-title">
                             <h2 class="text-center text-primary">Register</h2>
                         </div>
                          <form method="POST" action="{{ route('register') }}">
                            @csrf
                             {{-- <div class="select-role">
                                 <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                     <label class="btn active">
                                         <input type="radio" name="options" id="admin">
                                         <div class="icon"><img src="{{ asset('assets/admin') }}/vendors/images/briefcase.svg" class="svg" alt=""></div>
                                         <span>I'm</span>
                                         Manager
                                     </label>
                                     <label class="btn">
                                         <input type="radio" name="options" id="user">
                                         <div class="icon"><img src="{{ asset('assets/admin') }}/vendors/images/person.svg" class="svg" alt=""></div>
                                         <span>I'm</span>
                                         Employee
                                     </label>
                                 </div>
                             </div> --}}
                             <div class="input-group custom">
                                <input id="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="input-group-append custom">
                                     <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                 </div>
                             </div>
                             <div class="input-group custom">
                                <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email"  placeholder="Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                                 
                            <div class="input-group-append custom">
                                     <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                 </div>
                             </div>
                             <div class="input-group custom">
                                <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                required autocomplete="new-password"  placeholder="Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                            <div class="input-group-append custom">
                                     <span class="input-group-text"><i id="togglePasswordIcon" class="dw dw-padlock1"></i>
                                 </div>
                             </div>
                             <div class="input-group custom">
                                <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"  placeholder="Confirm Password">                                
                            <div class="input-group-append custom">
                                     <span class="input-group-text" onclick="togglePasswordVisibility()">
                                        <i id="togglePasswordIcon" class="dw dw-padlock1"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input id="no_telp" type="text"
                                class="form-control @error('no_telp') is-invalid @enderror" name="no_telp"
                                value="{{ old('no_telp') }}" required autocomplete="no_telp" autofocus  placeholder="No Telepon">

                            @error('no_telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>
                             {{-- <div class="row pb-30">
                                 <div class="col-6">
                                     <div class="custom-control custom-checkbox">
                                         <input type="checkbox" class="custom-control-input" id="customCheck1">
                                         <label class="custom-control-label" for="customCheck1">Remember</label>
                                     </div>
                                 </div>
                                 <div class="col-6">
                                     <div class="forgot-password"><a href="forgot-password.html">Forgot Password</a></div>
                                 </div>
                             </div> --}}
                             <div class="row">
                                 <div class="col-sm-12">
                                     <div class="input-group mb-0">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>                                     
                                    </div>
                                     {{-- <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
                                     <div class="input-group mb-0">
                                         <a class="btn btn-outline-primary btn-lg btn-block" href="{{route('register')}}">Register To Create Account</a>
                                     </div> --}}
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- js -->
     {{-- <script src="{{ asset('assets/admin') }}/vendors/scripts/core.js"></script>
     <script src="{{ asset('assets/admin') }}/vendors/scripts/script.min.js"></script>
     <script src="{{ asset('assets/admin') }}/vendors/scripts/process.js"></script> --}}
     {{-- <script src="{{ asset('assets/admin') }}/vendors/scripts/layout-settings.js"></script> --}}
     <script>
         function togglePasswordVisibility() {
             var passwordInput = document.getElementById("passwordInput");
             var togglePasswordIcon = document.getElementById("togglePasswordIcon");
     
             if (passwordInput.type === "password") {
                 passwordInput.type = "text";
                 togglePasswordIcon.classList.remove("dw-padlock1");
                 togglePasswordIcon.classList.add("dw-eye");
             } else {
                 passwordInput.type = "password";
                 togglePasswordIcon.classList.remove("dw-eye");
                 togglePasswordIcon.classList.add("dw-padlock1");
             }
         }
     </script>
 </body>
 </html>
