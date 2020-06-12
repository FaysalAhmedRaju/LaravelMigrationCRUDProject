<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{--<title>AdminLTE 2 | Dashboard</title>--}}
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    {{--<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{ url('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    {{--<link rel="stylesheet" href="{{assert('dist/css/bootstrap.min.css')}}">--}}
       {{--{!!Html :: style('css/bootstrap.min.css')!!} <!--3.3.7-->--}}
    <!-- Font Awesome -->
    {{--<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="{{ url('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    {{--<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">--}}
    <link rel="stylesheet" href="{{ url('bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    {{--<link rel="stylesheet" href="dist/css/AdminLTE.min.css">--}}
    <link rel="stylesheet" href="{{ url('dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    {{--<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">--}}
    <link rel="stylesheet" href="{{ url('dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    {{--<link rel="stylesheet" href="bower_components/morris.js/morris.css">--}}
    <link rel="stylesheet" href="{{ url('bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
    {{--<link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">--}}
    <link rel="stylesheet" href="{{ url('bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    @yield('style')
    {{--<link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">--}}
    <link rel="stylesheet" href="{{ url('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    {{--<link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">--}}
    <link rel="stylesheet" href="{{ url('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    {{--<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">--}}
    <link rel="stylesheet" href="{{ url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">







    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


    {{--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>--}}
    {{--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
    <script src="{{url('js/angular.min.js')}}"></script>




</head>
<body class="hold-transition skin-blue sidebar-mini" >
<div class="wrapper">

    <header class="main-header">
        @include('layouts.header')
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <section class="sidebar">
                    @include('layouts.sidebar')
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                    @yield('content')
            </div>

        </section>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2017 <a href="#" target="_blank">Faysal Ahmed Raju</a>.</strong>
    </footer>
</div>
@yield('script')
<!-- ./wrapper -->

<!-- jQuery 3 -->

<script src="{{url('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->

<script src="{{url('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->

<script src="{{url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->

<script src="{{url('bower_components/raphael/raphael.min.js')}}"></script>

<script src="{{url('bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->

<script src="{{url('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->

<script src="{{url('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>

<script src="{{url('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->

<script src="{{url('bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->

<script src="{{url('bower_components/moment/min/moment.min.js')}}"></script>

<script src="{{url('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->

<script src="{{url('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->

<script src="{{url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>


<script src="{{url('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>


<script src="{{url('bower_components/fastclick/lib/fastclick.js')}}"></script>


<script src="{{url('dist/js/adminlte.min.js')}}"></script>



<script src="{{url('dist/js/pages/dashboard.js')}}"></script>

<script src="{{url('dist/js/demo.js')}}"></script>
<script>
    $('#edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var title = button.data('mytitle')
        var description = button.data('mydescription')
        var my_id = button.data('myid')


        var modal = $(this)

        modal.find('.modal-body #title').val(title)
        modal.find('.modal-body #description').val(description)
        modal.find('.modal-body #account_id').val(my_id)
    })
</script>
<script>
    $('#delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var my_id = button.data('myid')


        var modal = $(this)


        modal.find('.modal-body #account_id').val(my_id)
    })
</script>
</body>
</html>
