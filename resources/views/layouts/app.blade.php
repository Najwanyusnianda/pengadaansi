<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{asset('assets\fontawesome\css\all.css')}}">
        <link rel="stylesheet" href="{{asset('assets\bootstrap\bootstrap.min.css')}}">
        
    <title>Document</title>
    <style>
    html,body{
        height: 100%;
        margin: 0;
        padding: 0;
    }
    </style>
</head>

<body style="background-color: #dfe6e9;" >
    <div class="wrapper mt-5" style="height: 100%;" >
            <div class="d-flex justify-content-center align-items-center">
                    @yield('auth')
            </div>
    </div>
   
             
    
 

<script src="{{asset('assets\fontawesome\js\all.js')}}"></script>
    
    <!-- jQuery -->
<script src="{{asset('assets\bootstrap\jquery-3.3.1.min.js')}}"></script>
    <!-- Bootstrap 4 -->
<script src="{{asset('assets\bootstrap\bootstrap.bundle.js')}}"></script>

</body>




</html>