<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <title>{{ env("APP_NAME") }} - Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    
    <!-- Favicons -->
    <link href="{{ asset('admin') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('admin') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/vendor/simple-datatables/style.css" rel="stylesheet">
    
    <!-- Template Main CSS File -->
    <link href="{{ asset('admin') }}/assets/css/style.css" rel="stylesheet">
</head>

<body>
    
    <main>
        <div class="container">
            <br>
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ session('loginError') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            {{-- <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">NiceAdmin</span>
                                </a>
                            </div><!-- End Logo --> --}}
                            
                            <div class="card mb-3">
                                <div class="card-body">
                                    <br>
                                    <div class="d-flex justify-content-center py-4">
                                        <a href="index.html" class="logo d-flex align-items-center w-auto">
                                            <img src="{{ asset('admin') }}/assets/img/logo.png" alt="">
                                            <span class="d-none d-lg-block">NiceAdmin</span>
                                        </a>
                                    </div>
                                    <p class="text-center small">Masukkan email atau no. telp dan password untuk login sebagai admin</p>
                                    <br>
                                    <form class="row g-3 needs-validation" novalidate action="{{ url('/login') }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}">
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password" required>
                                            {{-- <div class="invalid-feedback">Please enter your password!</div> --}}
                                        </div>
                                        
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Masuk</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                            
                            {{-- <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div> --}}
                            
                        </div>
                    </div>
                </div>
                
            </section>
        </div>
    </main><!-- End #main -->
    
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    <!-- Vendor JS Files -->
    <script src="{{ asset('admin') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/chart.js/chart.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/quill/quill.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/php-email-form/validate.js"></script>
    
    <!-- Template Main JS File -->
    <script src="{{ asset('admin') }}/assets/js/main.js"></script>
    
</body>

</html>