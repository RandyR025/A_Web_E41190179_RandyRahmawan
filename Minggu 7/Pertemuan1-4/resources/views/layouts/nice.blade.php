<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Blank | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="{{asset('nice/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{asset('nice/css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{asset('nice/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{asset('nice/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="{{asset('nice/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('nice/css/style-responsive.css')}}" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    @include('layouts.backend.header')

    @include('layouts.backend.sidebar')
    

   <!--main content start-->
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-bars"></i> {{ $data['title']}} <small class="text-primary">{{ $data['subtitle']}}</small> </h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
              <li><i class="fa fa-square-o"></i>{{ $data['title']}}</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        @yield('content')
        <!-- page end-->
      </section>
    </section>
    <!--main content end--> 
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="{{asset('nice/js/jquery.js')}}"></script>
  <script src="{{asset('nice/js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{asset('nice/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('nice/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="{{asset('nice/js/scripts.js')}}"></script>


</body>

</html>
