<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css"
          rel="stylesheet">
    <!-- Calendar CSS -->
    <link href="../plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet"/>
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/megna-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header">
<!-- ============================================================== -->
<!-- Preloader -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>

<form method="post" action="{{ route('logout') }}" id="logout-form">
    {{ csrf_field() }}
</form>

<!-- ============================================================== -->
<!-- Wrapper -->
<!-- ============================================================== -->
<div id="wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <div class="top-left-part">
                <!-- Logo -->
                <a class="logo" href="index.html">
                    <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="../plugins/images/admin-logo.png" alt="home"
                                                          class="dark-logo"/><!--This is light logo icon--><img
                                src="../plugins/images/admin-logo-dark.png" alt="home" class="light-logo"/>
                    </b>
                    <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="../plugins/images/admin-text.png" alt="home"
                                                          class="dark-logo"/><!--This is light logo text--><img
                                src="../plugins/images/admin-text-dark.png" alt="home" class="light-logo"/>
                     </span> </a>
            </div>
            <!-- /Logo -->
            <!-- Search input and Toggle icon -->
            <ul class="nav navbar-top-links navbar-left">
                <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i
                                class="ti-close ti-menu"></i></a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                       href="javascript:void(0)"> <i class="mdi mdi-gmail"></i>
                        <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                    </a>
                    <ul class="dropdown-menu mailbox animated bounceInDown">
                        <li>
                            <div class="drop-title">You have 4 new messages</div>
                        </li>
                        <li>
                            <div class="message-center">
                                <a href="javascript:void(0)">
                                    <div class="user-img"><img src="../plugins/images/users/pawandeep.jpg" alt="user"
                                                               class="img-circle"> <span
                                                class="profile-status online pull-right"></span></div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span
                                                class="time">9:30 AM</span></div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="user-img"><img src="../plugins/images/users/sonu.jpg" alt="user"
                                                               class="img-circle"> <span
                                                class="profile-status busy pull-right"></span></div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span>
                                        <span class="time">9:10 AM</span></div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="user-img"><img src="../plugins/images/users/arijit.jpg" alt="user"
                                                               class="img-circle"> <span
                                                class="profile-status away pull-right"></span></div>
                                    <div class="mail-contnet">
                                        <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span
                                                class="time">9:08 AM</span></div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="user-img"><img src="../plugins/images/users/pawandeep.jpg" alt="user"
                                                               class="img-circle"> <span
                                                class="profile-status offline pull-right"></span></div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span
                                                class="time">9:02 AM</span></div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i
                                        class="fa fa-angle-right"></i> </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- .Task dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                       href="javascript:void(0)"> <i class="mdi mdi-check-circle"></i>
                        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                        <li>
                            <a href="javascript:void(0)">
                                <div>
                                    <p><strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 40%"><span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0)">
                                <div>
                                    <p><strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar"
                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 20%"><span class="sr-only">20% Complete</span></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0)">
                                <div>
                                    <p><strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar"
                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 60%"><span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0)">
                                <div>
                                    <p><strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 80%"><span class="sr-only">80% Complete (danger)</span></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="javascript:void(0)"> <strong>See All Tasks</strong> <i
                                        class="fa fa-angle-right"></i> </a>
                        </li>
                    </ul>
                </li>
                <!-- .Megamenu -->
                <li class="mega-dropdown"><a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                                             href="javascript:void(0)"><span class="hidden-xs">Mega</span> <i
                                class="icon-options-vertical"></i></a>
                    <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Forms Elements</li>
                                <li><a href="form-basic.html">Basic Forms</a></li>
                                <li><a href="form-layout.html">Form Layout</a></li>
                                <li><a href="form-advanced.html">Form Addons</a></li>
                                <li><a href="form-material-elements.html">Form Material</a></li>
                                <li><a href="form-float-input.html">Form Float Input</a></li>
                                <li><a href="form-upload.html">File Upload</a></li>
                                <li><a href="form-mask.html">Form Mask</a></li>
                                <li><a href="form-img-cropper.html">Image Cropping</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Advance Forms</li>
                                <li><a href="form-dropzone.html">File Dropzone</a></li>
                                <li><a href="form-pickers.html">Form-pickers</a></li>
                                <li><a href="form-wizard.html">Form-wizards</a></li>
                                <li><a href="form-typehead.html">Typehead</a></li>
                                <li><a href="form-xeditable.html">X-editable</a></li>
                                <li><a href="form-summernote.html">Summernote</a></li>
                                <li><a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>
                                <li><a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Table Example</li>
                                <li><a href="basic-table.html">Basic Tables</a></li>
                                <li><a href="table-layouts.html">Table Layouts</a></li>
                                <li><a href="data-table.html">Data Table</a></li>
                                <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
                                <li><a href="responsive-tables.html">Responsive Tables</a></li>
                                <li><a href="editable-tables.html">Editable Tables</a></li>
                                <li><a href="foo-tables.html">FooTables</a></li>
                                <li><a href="jsgrid.html">JsGrid Tables</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Charts</li>
                                <li><a href="flot.html">Flot Charts</a></li>
                                <li><a href="morris-chart.html">Morris Chart</a></li>
                                <li><a href="chart-js.html">Chart-js</a></li>
                                <li><a href="peity-chart.html">Peity Charts</a></li>
                                <li><a href="knob-chart.html">Knob Charts</a></li>
                                <li><a href="sparkline-chart.html">Sparkline charts</a></li>
                                <li><a href="extra-charts.html">Extra Charts</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- /.Megamenu -->
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li>
                    <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                        <input type="text" placeholder="Search..." class="form-control"> <a href=""><i
                                    class="fa fa-search"></i></a></form>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="javascript:void(0)"> <img
                                src="../plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b
                                class="hidden-xs">{{ Auth::user()->name }}</b><span class="caret"></span> </a>
                    <ul class="dropdown-menu dropdown-user animated flipInY">
                        <li>
                            <div class="dw-user-box">
                                <div class="u-img"><img src="../plugins/images/users/varun.jpg" alt="user"/></div>
                                <div class="u-text">
                                    <h4>Steave Jobs</h4>
                                    <p class="text-muted">varun@gmail.com</p><a href="profile.html"
                                                                                class="btn btn-rounded btn-danger btn-sm">View
                                        Profile</a></div>
                            </div>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    @include('layouts.includes.left_menu')
    <!-- ============================================================== -->
    <!-- End Left Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @yield('section')
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in</footer>
    </div>
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Counter js -->
<script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
<!--Morris JavaScript -->
<script src="../plugins/bower_components/raphael/raphael-min.js"></script>
<script src="../plugins/bower_components/morrisjs/morris.js"></script>
<!-- chartist chart -->
<script src="../plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
<script src="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<!-- Calendar JavaScript -->
<script src="../plugins/bower_components/moment/moment.js"></script>
<script src='../plugins/bower_components/calendar/dist/fullcalendar.min.js'></script>
<script src="../plugins/bower_components/calendar/dist/cal-init.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.min.js"></script>
<script src="js/dashboard1.js"></script>
<!-- Custom tab JavaScript -->
<script src="js/cbpFWTabs.js"></script>
<script type="text/javascript">
    (function () {
        [].slice.call(document.querySelectorAll('.sttabs')).forEach(function (el) {
            new CBPFWTabs(el);
        });
    })();
</script>
<script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
<!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>