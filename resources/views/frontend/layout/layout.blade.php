<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    <!-- Optional theme -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"> 
    <link rel="stylesheet" href="{{ asset('assets1/css/main.css')}}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets1/img/icon/favicon.ico')}}">
    <meta name="description" content="@yield('description')" />
    @stack('styles')
    @stack('scriptTop')
    
</head>
<body>
@include('../frontend/layout/header')
<div class="static-banner-hlder" style="background:#450e07 !important;"><img src="{{$i->desktop_banner}}" class="w-100 d-sm-block d-none" border="0" alt="Junglee Rummy on Mobile"> <img src="{{$i->mobile_banner}}" class="w-100 d-sm-none d-block" border="0" alt="Junglee Rummy on Mobile"></div>
<!-- banner -->

<div class="breadcrumb-bar d-none d-sm-block">
  <div class="breadcrumb-bar-sub text-right" id="breadcrumbBar">
    <div class="container">
      <div id="breadcrumb_cta">
        <span class="breadcrum_cta_button breadcrum_cta1" id="play_now_cta_bc">Play Now</span>
      </div>
    </div>
  </div>
</div>
<div class="container-xl">
  <div class="row static_pages">
  <div class="col-md-3">
      <!-- sidebar -->
      <div class="sidebar d-none d-md-block">
        @include('../frontend.layout.sidebar')
      </div><!-- end sidebar -->
    </div>
@yield('content')

</div>
</div>

@include('../frontend/layout/footer')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="{{ asset('assets1/js/main.js') }}"></script>
@stack('js') 
    
</body>
</html>
