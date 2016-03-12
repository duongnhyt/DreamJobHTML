<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dreamjob | sub title</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset("/bootstrap/css/bootstrap.min.css")}}">
    {{--<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">--}}
            <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("/plugins/font-awesome/css/font-awesome.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("css/site.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/themes.min.css")}}">
    <!-- iCheck -->
    {{--<link rel="stylesheet" href="{{asset("/plugins/iCheck/flat/blue.css")}}">--}}
            <!-- Morris chart -->
    {{--<link rel="stylesheet" href="{{asset("/plugins/morris/morris.css")}}">--}}
            <!-- jvectormap -->
    {{--<link rel="stylesheet" href="{{asset("/plugins/jvectormap/jquery-jvectormap-1.2.2.css")}}">--}}
            <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset("/plugins/datepicker/datepicker3.css")}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset("/plugins/daterangepicker/daterangepicker-bs3.css")}}">
    <!-- Datetime picker -->
    {{--<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">--}}
    {{--<link rel="stylesheet" href="{{asset("/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css")}}">--}}

            <!-- bootstrap wysihtml5 - text editor -->
    {{--<link rel="stylesheet" href="{{asset("/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}">--}}

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset("/js/html5shiv.min.js")}}"></script>

    <
    script
    src = "{{asset(" / js / respond.min.js
    ")}}" ></script>

    <![endif]-->

    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset("/plugins/select2/select2.min.css")}}">

    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    @yield('special_css')
</head>
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
<div class="wrapper">
    <!--Header-->
    @include('frontend.partials.header')
            <!--Sidebar-->
    @include('frontend.partials.sidebar')


            <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Menu Title
                <small>Sub menu title</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Trang chủ</a></li>
                <li class="active">Việc làm xây dựng</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Footer -->
    @include('frontend.partials.footer')
</div>
<!-- ./wrapper -->
</body>


<!-- jQuery 2.1.4 -->
<script src="{{asset("plugins/jQuery/jQuery-2.1.4.min.js")}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset("plugins/jQueryUI/jquery-ui.min.js")}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 3.3.5 -->
<script src="{{asset("bootstrap/js/bootstrap.min.js")}}"></script>
{{--<!-- InputMask -->--}}
<script src="{{asset("plugins/input-mask/jquery.inputmask.js")}}"></script>
<script src="{{asset("plugins/input-mask/jquery.inputmask.date.extensions.js")}}"></script>
<script src="{{asset("plugins/input-mask/jquery.inputmask.extensions.js")}}"></script>
<script src="{{asset("plugins/select2/select2.full.min.js")}}"></script>
@yield('special_script')

<script>
    $(function () {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    });
</script>

<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- Slimscroll -->
<script src="{{asset("plugins/slimScroll/jquery.slimscroll.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("plugins/fastclick/fastclick.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("js/app.min.js")}}"></script>

<script type="text/javascript">
    //    alert("abc");
    //Initialize Select2 Elements
    $(function () {
        $(".select2").select2();
        $(".select2[multiple]").select2({
            tags: true
        });
    });
    $(".div-resume-tags input[type=radio]").hide().click(function (e) {
        e.stopPropagation();
    });
    $(".div-resume-tags .box-primary").click(function (e) {
        $(this).closest(".div-resume-tags").find(".box-primary").removeClass("selected");
        $(this).addClass("selected").find("input[type=radio]").click();
    });


    //    $("#hosonangluc-cbx").click(function() {
    //        alert("abc");
    //    });
</script>
</html>

