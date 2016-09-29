<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.png') }}">

    <title>@yield('user') Dashboard</title>


    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">


    <link href="{{ URL::asset('css/bootstrap-theme.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('css/elegant-icons-style.css') }}" rel="stylesheet" />
    <link href=" {{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet" />

    <link href="{{ URL::asset('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />

    <link href="{{ URL::asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen"/>

    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}" type="text/css">
    <link href="{{ URL::asset('css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/fullcalendar.css') }}">
    <link href="{{ URL::asset('css/widgets.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style-responsive.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/xcharts.min.css') }}" rel=" stylesheet">
    <link href="{{ URL::asset('css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">






</head>
<body>
<section id="container" class="">
    @include('admin.header.header')
    @include('admin.sidebar.sidebar')
</section>



<section id="main-content">
    <section class="wrapper">
       @yield('content')
    </section>
</section>

<!-- javascripts -->
<script src="{{ URL::asset('js/jquery.js') }}"></script>
<script src="{{ URL::asset('js/jquery-ui-1.10.4.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery-1.8.3.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery-ui-1.9.2.custom.min.js') }}"></script>

<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<!-- nice scroll -->
<script src="{{ URL::asset('js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.nicescroll.js') }}" type="text/javascript"></script>

<script src="{{ URL::asset('assets/jquery-knob/js/jquery.knob.js') }}"></script>
<script src="{{ URL::asset('js/jquery.sparkline.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
<script src="{{ URL::asset('js/owl.carousel.js') }}" ></script>

<<script src="{{ URL::asset('js/fullcalendar.min.js') }}"></script>
<script src="{{ URL::asset('assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>

<script src="{{ URL::asset('js/calendar-custom.js') }}"></script>
<script src="{{ URL::asset('js/jquery.rateit.min.js') }}"></script>

<script src="{{ URL::asset('js/jquery.customSelect.min.js') }}" ></script>
<script src="{{ URL::asset('assets/chart-master/Chart.js') }}"></script>

<script src="{{ URL::asset('js/scripts.js') }}"></script>

<script src="{{ URL::asset('js/sparkline-chart.js') }}"></script>
<script src="{{ URL::asset('js/easy-pie-chart.js') }}"></script>
<script src="{{ URL::asset('js/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ URL::asset('js/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ URL::asset('js/xcharts.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.autosize.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.placeholder.min.js') }}"></script>
<script src="{{ URL::asset('js/gdp-data.js') }}"></script>
<script src="{{ URL::asset('js/morris.min.js') }}"></script>
<script src="{{ URL::asset('js/charts.js') }}"></script>
<script src="{{ URL::asset('js/sparklines.js') }}"></script>
<script src="{{ URL::asset('js/jquery.slimscroll.min.js') }}"></script>

</body>
</html>
