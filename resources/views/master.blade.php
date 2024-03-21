<!DOCTYPE html>
<html lang="en">

<!--   Tue, 07 Jan 2020 03:33:27 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<meta name="domain" content="{{ request()->getHost() }}">
<meta name="author" content="YourName">
<meta name="description" content="Brief description of your domain">
<meta name="keywords" content="keywords, related, to, your, domain">
<meta name="robots" content="index, follow">
<title>Task Management</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="{{asset( 'assets/modules/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset( 'assets/modules/fontawesome/css/all.min.css')}}">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{asset( 'assets/modules/jqvmap/dist/jqvmap.min.css')}}">
<link rel="stylesheet" href="{{asset( 'assets/modules/summernote/summernote-bs4.css')}}">
<link rel="stylesheet" href="{{asset( 'assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset( 'assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/modules/prism/prism.css')}}">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css')}}">
<link rel="stylesheet" href="{{asset('assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/modules/select2/dist/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/modules/jquery-selectric/selectric.css')}}">
<link rel="stylesheet" href="{{asset('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">
<!-- Template CSS -->
<link rel="stylesheet" href="{{asset( 'assets/css/style.min.css')}}">
<link rel="stylesheet" href="{{asset( 'assets/css/components.min.css')}}">
{{-- Font awsome --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</head>
<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>


<!-- Your HTML form goes here -->

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show fixed-top" role="alert">
            <strong> {{ Session::get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

    @endif

    @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show fixed-top" role="alert">
        @foreach ($errors->all() as $error)
        <strong> {{ $error }}</strong>
    @endforeach

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    @endif
        <!-- Start app top navbar -->
        @include('slice.header')

        <!-- Start main left sidebar menu -->
        @include('slice.sidebar')

        <!-- Start app main Content -->


        <div class="main-content" style="min-height: 456px;">
           @yield('content')
        </div>

        <!-- Start app Footer part -->
        @include('slice.footer')

    </div>
</div>

<!-- General JS Scripts -->
<script src="{{asset('assets/bundles/lib.vendor.bundle.js')}}"></script>
<script src="{{asset('assets/js/CodiePie.js')}}"></script>
<script src="{{asset('assets/js/DragTask.js')}}"></script>
<!-- JS Libraies -->

<script src="{{asset('assets/modules/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/modules/chart.min.js')}}"></script>
<script src="{{asset('assets/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

<!-- JS Libraies -->
<script src="{{asset('assets/modules/cleave-js/dist/cleave.min.js')}}"></script>
<script src="{{asset('assets/modules/cleave-js/dist/addons/cleave-phone.us.js')}}"></script>
<script src="{{asset('assets/modules/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
<script src="{{asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{asset('assets/modules/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>
<script src="{{asset('assets/modules/prism/prism.js')}}"></script>

<!-- Page Specific JS File -->
<script src="{{asset('assets/js/page/index.js')}}"></script>
<!-- Template JS File -->
<script src="{{asset('assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/ajax/ajax.js')}}"></script>

{{-- ion icons --}}
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="{{asset('assets/js/page/bootstrap-modal.js')}}"></script>


</body>

<!--   Tue, 07 Jan 2020 03:35:12 GMT -->
</html>
