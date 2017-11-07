<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ url('/') }}/assets/images/favicon_1.ico">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Chart C3 -->
    <link href="{{ url('/') }}/assets/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

    <!-- DataTables -->
    <link href="{{ url('/') }}/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

    <!-- DatePicker -->
    <link href="{{ url('/') }}/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    {{-- Colorpicker --}}
    <link href="{{ url('/') }}/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="{{ url('/') }}/assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

    <link href="{{ url('/') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link href="{{ url('/') }}/assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="{{ url('/') }}/assets/js/modernizr.min.js"></script>

    @yield('styles')

</head>


<body>


<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- Logo container-->
            <div class="logo">
                <a href="{{ url('/home') }}" class="logo">
                    <span>Ub<i class="md md-album"></i>ld</span>
                </a>
            </div>
            <!-- End Logo container-->


            <div class="menu-extras">

                <ul class="nav navbar-nav navbar-right pull-right">
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}" class="nav-link waves-effect waves-light nav-user">Login</a></li>
                        <li><a href="{{ route('register') }}" class="nav-link waves-effect waves-light nav-user">Register</a></li>
                    @else
                        <li class="navbar-c-items">
                            <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

        </div>
    </div>
</header>
<!-- End Navigation Bar-->


<div class="wrapper">
    <div class="container">

        @yield('content')

        <!-- Footer -->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        © 2017. All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

    </div>
</div>



<!-- jQuery  -->
<script src="{{ url('/') }}/assets/js/jquery.min.js"></script>
<script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ url('/') }}/assets/js/detect.js"></script>
<script src="{{ url('/') }}/assets/js/fastclick.js"></script>

<script src="{{ url('/') }}/assets/js/jquery.slimscroll.js"></script>
<script src="{{ url('/') }}/assets/js/jquery.blockUI.js"></script>
<script src="{{ url('/') }}/assets/js/waves.js"></script>
<script src="{{ url('/') }}/assets/js/wow.min.js"></script>
<script src="{{ url('/') }}/assets/js/jquery.nicescroll.js"></script>
<script src="{{ url('/') }}/assets/js/jquery.scrollTo.min.js"></script>

<script src="{{ url('/') }}/assets/js/jquery.core.js"></script>
<script src="{{ url('/') }}/assets/js/jquery.app.js"></script>

<!--C3 Chart-->
<script type="text/javascript" src="{{ url('/') }}/assets/plugins/d3/d3.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/assets/plugins/c3/c3.min.js"></script>
<script src="{{ url('/') }}/assets/pages/jquery.chart.js"></script>

<!-- Datatables -->
<script src="{{ url('/') }}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('/') }}/assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="{{ url('/') }}/assets/pages/datatables.init.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();
    });
</script>

<!-- Datepicker -->
<script src="{{ url('/') }}/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {

        // Date Picker
        jQuery('#datepicker').datepicker({
            format: "yyyy-mm-dd"
        });
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: "yyyy-mm-dd"
        });
        jQuery('#datepicker-inline').datepicker();
        jQuery('#datepicker-multiple-date').datepicker({
            format: "mm/dd/yyyy",
            clearBtn: true,
            multidate: true,
            multidateSeparator: ","
        });
        jQuery('#date-range').datepicker({
            toggleActive: true
        });

    });
</script>

{{-- Colorpicker --}}
<script src="{{ url('/') }}/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

<script type="text/javascript">

    jQuery(document).ready(function() {

        //colorpicker start

        $('.colorpicker-default').colorpicker({
            format: 'hex'
        });
        $('.colorpicker-rgba').colorpicker();

    });
</script>

<!-- Sweet-Alert 2 -->
<script src="{{ url('/') }}/assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
<script src="{{ url('/') }}/assets/pages/jquery.sweet-alert2.init.js"></script>


@yield('scripts')

<script src="{{ asset('js/app.js') }}"></script>

@if (notify()->ready())
    <script>
        $(document).ready(function(){
            swal({
                title: "{!! notify()->message() !!}",
                text: "{!! notify()->option('text') !!}",
                type: "{{ notify()->type() }}",
                timer: "{!! notify()->option('timer') !!}"
            }).then(
                function () {},
                // handling the promise rejection
                function (dismiss) {
                    if (dismiss === 'timer') {
                        console.log('I was closed by the timer')
                    }
                }
            )
        });
    </script>
@endif

</body>
</html>
