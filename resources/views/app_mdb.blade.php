<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    @yield('title')
  </title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    {{-- stylesheetのソースを指定 同一階層のassetsディレクトリに格納 --}}
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css' ,$is_production)}}">
    <link rel="stylesheet" href="{{asset('assets/css/Application-Form.css' ,$is_production)}}">
    <link rel="stylesheet" href="{{asset('assets/css/Article-List.css' ,$is_production)}}">
    <link rel="stylesheet" href="{{asset('assets/css/dh-card-image-left-dark.css' ,$is_production)}}">
    <link rel="stylesheet" href="{{asset('assets/css/Login-Form-Clean.css' ,$is_production)}}">
    <link rel="stylesheet" href="{{asset('assets/css/Navigation-Clean.css' ,$is_production)}}">
    <link rel="stylesheet" href="{{asset('assets/css/Pretty-Registration-Form.css' ,$is_production)}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css' ,$is_production)}}">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
</head>

<body>

  @yield('content')

  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
</body>

</html>
