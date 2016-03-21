<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">

    @section('keyword')
    @show
    <meta name="author" content="">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600,400' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="{!! asset('assets/website/images/favicon.ico') !!}" type="image/x-icon">
    <link rel="icon" href="{!! asset('assets/website/images/favicon.ico') !!}" type="image/x-icon">

    <title>
        @section('title')
        @show
    </title>

    @section('include-css')
        <link rel="stylesheet" href="{!! asset('assets/vendor/bootstrap/css/bootstrap.min.css') !!}">
        <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
        <link rel="stylesheet" href="{!! asset('/assets/bootstrap/css/main.css') !!}">

    @show
    @section('inline-css')
    @show
</head>

<body>

<div class="container">
    @yield('content')
</div>

@section('include-js')
    <script src="{!! asset('assets/vendor/jquery/jquery-2.1.1.min.js') !!}"></script>
    <script src="{!! asset('assets/vendor/bootstrap/js/bootstrap.min.js') !!}"></script>
    <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
    <script type="text/javascript" src="/bower_components/moment/min/moment-with-locales.min.js"></script>

    <script src="/bower_components/moment-timezone/builds/moment-timezone-with-data.min.js"></script>
    <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
@show
<script>
    $(document).ready(function(e) {
        @section('document-ready-js')
        @show
    });
    @section('inline-js')
    @show
</script>

</body>
</html>