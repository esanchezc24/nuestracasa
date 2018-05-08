<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="NuestraCasa - Portal Inmobiliario">
  <meta name="author" content="Pyrus Studio ">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico')}}" media="all">
  <title>Nuestra Casa</title>

  <!-- CSS file links -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" media="all">  
  <style type="text/css">
    .navbar-brand {
      float: left;
      height: 50px;
      font-size: 18px;
      line-height: 20px;
      padding: 1px 0;
    }
    .navbar-brand img {
      width: 50%;
      height: auto;
    }
    @font-face {
      font-family: Big Noddle Titling;
      src: url({{ asset('fonts/big_noodle_titling.ttf') }});
    }
    .tabs{
      margin-bottom: 0;
    }
    .filter .ui-tabs .ui-tabs-panel{
      padding: 30px 0px 0px 0px
    }
    .subheader{
      margin-bottom: 40px;
    }
  </style>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
  @yield('styles')
</head>
<body>

@include('web.header_classic')

@yield('content')

@include('web.footer')


<!-- JavaScript file links -->
<script src="js/app.js"></script>
@yield('scripts')


</body>
</html>