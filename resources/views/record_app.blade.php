<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>
        @yield('title')
    </title>

    {{-- stylesheetのソースを指定 同一階層のassetsディレクトリに格納 --}}
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css' ,$is_production)}}">
    <link rel="stylesheet" href="{{asset('assets/css/Application-Form.css' ,$is_production)}}">
    <link rel="stylesheet" href="{{asset('assets/css/Article-List.css' ,$is_production)}}">
    <link rel="stylesheet" href="{{asset('assets/css/dh-card-image-left-dark.css' ,$is_production)}}">
    <link rel="stylesheet" href="{{asset('assets/css/Login-Form-Clean.css' ,$is_production)}}">
    <link rel="stylesheet" href="{{asset('assets/css/Navigation-Clean.css' ,$is_production)}}">
    <link rel="stylesheet" href="{{asset('assets/css/Pretty-Registration-Form.css' ,$is_production)}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css' ,$is_production)}}">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/new-visual.css' ,$is_production)}}">
  </head>

  <body>

    @include('ref_modal')

    @yield('content')

    {{-- jQury --}}
    <script src="{{asset('assets/js/jquery.min.js' ,$is_production)}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js' ,$is_production)}}"></script>
    <script src="{{asset('assets/js/Application-Form-1.js' ,$is_production)}}"></script>
    <script src="{{asset('assets/js/Application-Form.js' ,$is_production)}}"></script>
  </body>

</html>
