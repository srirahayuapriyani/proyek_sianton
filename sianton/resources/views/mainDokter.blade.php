<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <title>{{ $judul }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('layouts.css')
</head>
    
    <body>
        
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center" style="background-color: #37517e; 
        transition: all 0.5s; z-index: 997;height: 60px;box-shadow: 0px 2px 20px rgb(0 26 71 / 60%);padding-left: 20px;">
            
            @include('layouts.headerDokter')
        </header><!-- End Header -->
        
        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">
            @include('layouts.sidebarDokter')
        </aside><!-- End Sidebar-->
        
        <main id="main" class="main">
            <div class="pagetitle">
                <h1>{{ $title }}</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            @yield('content')
        </main><!-- End #main -->
        <br><br><br>
        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            @include('layouts.footer')
        </footer><!-- End Footer -->
        
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        @include('layouts.js')
    </body>
</html>