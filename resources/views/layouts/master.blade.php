<html lang="en" style="height: auto;">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>AdminLTE 3 | Starter</title>
    
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{asset('assets\fontawesome\css\all.css')}}">

        <link rel="stylesheet" href="{{asset('assets\DataTables\datatables.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets\bootstrap\bootstrap.min.css')}}">
        
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('assets\adminlte\adminlte.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    </head>
    <body class="sidebar-mini" style="height: auto;" style="font-family: 'Work Sans';">
    <div class="wrapper">
    
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>
    
        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                <i class="fa fa-search"></i>
                </button>
            </div>
            </div>
        </form>
    
        </nav>
        <!-- /.navbar -->
    
      
    
        <!-- Sidebar -->
        @include('inc.navigation')
        <!-- /.sidebar -->
        
        
    
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" >

                <div class="content-header">
                        <div class="container-fluid">
                          <div class="row mb-2">
                            <div class="col-sm-6">
                              <h1 class="m-0 text-dark">Dashboard</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                              <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v2</li>
                              </ol>
                            </div><!-- /.col -->
                          </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                      </div>
    
        <!-- Main content -->
        <section class="content">
            @yield('konten')
        </section>
       
        <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
        </aside>
        <!-- /.control-sidebar -->
    
        <!-- Main Footer -->
        <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        
        </footer>
    </div>
    <!-- ./wrapper -->
    
    @yield('style')
    <!-- REQUIRED SCRIPTS -->
    <script src="{{asset('assets\fontawesome\js\all.js')}}"></script>
    
    <!-- jQuery -->
    <script src="{{asset('assets\bootstrap\jquery-3.3.1.min.js')}}"></script>

    <!-- Bootstrap 4 -->
    <script src="{{asset('assets\bootstrap\js\bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assets\DataTables\datatables.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets\adminlte\adminlte.js')}}"></script>

    <script src="{{asset('assets\cleave\cleave.min.js')}}"></script>

    
    
    @yield('script')
    </body>
    
  </html>