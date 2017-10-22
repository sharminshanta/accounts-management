<!DOCTYPE html>
<html lang="en" ng-cloak ng-app="EventManager">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App + jQuery">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <title>@yield('title') | Besofty Software Limited</title>
    <link rel="shortcut icon" type="image/png" href="//admin-theme/img/favicon.png"/>
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="/admin-theme/vendor/fontawesome/css/font-awesome.min.css">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="/admin-theme/vendor/simple-line-icons/css/simple-line-icons.css">
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="/admin-theme/vendor/animate.css/animate.min.css">
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="/admin-theme/vendor/whirl/dist/whirl.css">
    <!--chosen-->
    <link rel="stylesheet" href="/admin-theme/vendor/chosen_v1.2.0/chosen.min.css">
    <!-- TAGS INPUT-->
    <link rel="stylesheet" href="/admin-theme/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <!-- =============== PAGE VENDOR STYLES ===============-->
    <!-- SELECT2-->
    <link rel="stylesheet" href="/admin-theme/vendor/select2/dist/css/select2.css">
    <link rel="stylesheet" href="/admin-theme/vendor/select2-bootstrap-theme/dist/select2-bootstrap.css">
    <!-- WEATHER ICONS-->
    <link rel="stylesheet" href="/admin-theme/vendor/weather-icons/css/weather-icons.min.css">
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="/admin-theme/css/bootstrap.css" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="/bower_components/angular-flash-alert/dist/angular-flash.css">
    <link rel="stylesheet" href="/bower_components/angular-toastr/dist/angular-toastr.css">
    <link rel="stylesheet" href="/admin-theme/css/app.css" id="maincss">
    <link rel="stylesheet" href="/admin-theme/css/custom.css">
</head>

<body  class="ng-cloak">
<div class="wrapper" ng-controller="MainCtrl">
    <!-- top navbar-->
    <header class="topnavbar-wrapper">
           <!-- START Top Navbar-->
        <nav role="navigation" class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header">
                <a href="admin/dashboard" class="navbar-brand">
                    <div class="brand-logo">
                        <img src="/admin-theme/img/favicon.png" alt="App Logo" class="img-responsive" style="width: 20%">
                    </div>
                    <div class="brand-logo-collapsed">
                        <img src="/admin-theme/img/favicon.png" alt="App Logo" class="img-responsive" style="width: 60%">
                    </div>
                </a>
            </div>
            <!-- END navbar header-->
            <!-- START Nav wrapper-->
            <div class="nav-wrapper">
                <!-- START Left navbar-->
                <ul class="nav navbar-nav">
                    <li>
                        <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                        <a href="#" data-trigger-resize="" data-toggle-state="aside-collapsed" class="hidden-xs">
                            <em class="fa fa-navicon"></em>
                        </a>
                        <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                        <a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle">
                            <em class="fa fa-navicon"></em>
                        </a>
                    </li>
                </ul>
                <!-- END Left navbar-->
                <!-- START Right Navbar-->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Search icon-->
                    <li>
                        <a href="#" data-search-open="">
                            <em class="icon-magnifier"></em>
                        </a>
                    </li>
                    <!-- START Alert menu-->
                    <li class="dropdown dropdown-list">
                        <a href="#" data-toggle="dropdown">
                            <em class="icon-bell"></em>
                            <div class="label label-danger">11</div>
                        </a>
                        <!-- START Dropdown menu-->
                        <ul class="dropdown-menu animated flipInX">
                            <li>
                                <!-- START list group-->
                                <div class="list-group">
                                    <!-- list item-->
                                    <a href="#" class="list-group-item">
                                        <div class="media-box">
                                            <div class="pull-left">
                                                <em class="fa fa-twitter fa-2x text-info"></em>
                                            </div>
                                            <div class="media-box-body clearfix">
                                                <p class="m0">New followers</p>
                                                <p class="m0 text-muted">
                                                    <small>1 new follower</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- list item-->
                                    <a href="#" class="list-group-item">
                                        <div class="media-box">
                                            <div class="pull-left">
                                                <em class="fa fa-envelope fa-2x text-warning"></em>
                                            </div>
                                            <div class="media-box-body clearfix">
                                                <p class="m0">New e-mails</p>
                                                <p class="m0 text-muted">
                                                    <small>You have 10 new emails</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- list item-->
                                    <a href="#" class="list-group-item">
                                        <div class="media-box">
                                            <div class="pull-left">
                                                <em class="fa fa-tasks fa-2x text-success"></em>
                                            </div>
                                            <div class="media-box-body clearfix">
                                                <p class="m0">Pending Tasks</p>
                                                <p class="m0 text-muted">
                                                    <small>11 pending task</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- last list item-->
                                    <a href="#" class="list-group-item">
                                        <small>More notifications</small>
                                        <span class="label label-danger pull-right">14</span>
                                    </a>
                                </div>
                                <!-- END list group-->
                            </li>
                        </ul>
                        <!-- END Dropdown menu-->
                    </li>
                    <!-- END Alert menu-->
                    <!-- START Alert menu-->
                    <li class="dropdown dropdown-list">
                        <a href="#" data-toggle="dropdown">
                            <em class="icon-user"></em>
                        </a>
                        <!-- START Dropdown menu-->
                        <ul role="menu" class="dropdown-menu animated fadeIn">
                            <li>
                                <a href="/profile">My Profile</a>
                            </li>
                            <li>
                                <a href="/profile/settings">Settings</a>
                            </li>
                            <li>
                                <a href="/logout">Logout</a>
                            </li>
                        </ul>
                        <!-- END Dropdown menu-->
                    </li>
                    <!-- END Alert menu-->
                </ul>
                <!-- END Right Navbar-->
            </div>
            <!-- END Nav wrapper-->
            <!-- START Search form-->
            <form role="search" action="search.html" class="navbar-form">
                <div class="form-group has-feedback">
                    <input type="text" placeholder="Type and hit enter ..." class="form-control">
                    <div data-search-dismiss="" class="fa fa-times form-control-feedback"></div>
                </div>
                <button type="submit" class="hidden btn btn-default">Submit</button>
            </form>
            <!-- END Search form-->
        </nav>
        <!-- END Top Navbar-->
    </header>
    <!-- sidebar-->
    <aside class="aside">
        <!-- START Sidebar (left)-->
        <div class="aside-inner">
            <nav data-sidebar-anyclick-close="" class="sidebar">
                <!-- START sidebar nav-->
                <ul class="nav">
                    <!-- START user info-->
                    <li class="has-user-block">
                        <div id="user-block" class="collapse in">
                            <div class="item user-block">
                                <!-- User picture-->
                                <div class="user-block-picture">
                                    <div class="user-block-status">
                                        <img src="/admin-theme/img/profiles" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle"
                                             onerror="this.onerror=null;this.src='/admin-theme/img/profile.png ';">
                                        <div class="circle circle-success circle-lg"></div>
                                    </div>
                                </div>
                                <!-- Name and Job-->
                                <div class="user-block-info">
                                    <span class="user-block-name">Hello, <a href="/profile"> Shanta</a></span>
                                    <span class="user-block-role">Admin</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END user info-->
                    <!-- Iterates over all sidebar items-->
                    <li class=" active">
                        <a href="/admin/dashboard" title="Dashboard">
                            <em class="icon-speedometer"></em>
                            <span data-localize="sidebar.nav.WIDGETS">Dashboard</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="/profile" title="My Profile">
                            <em class="icon-user"></em>
                            <span data-localize="sidebar.nav.WIDGETS">My Profile</span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="#users" title="Manage Users" data-toggle="collapse">
                            <em class="fa fa-users"></em>
                            <span data-localize="sidebar.nav.DASHBOARD">Manage Users</span>
                        </a>
                        <ul id="users" class="nav sidebar-subnav collapse">
                            <li class=" ">
                                <a href="/admin/users/create" title="Create User">
                                    <span>Create</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/users" title="User List">
                                    <span>List</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=" ">
                        <a href="#events" title="Manage Event" data-toggle="collapse">
                            <em class="icon-screen-tablet"></em>
                            <span data-localize="sidebar.nav.DASHBOARD">Manage Event</span>
                        </a>
                        <ul id="events" class="nav sidebar-subnav collapse">
                            <li class=" ">
                                <a href="/admin/events/general" title="Create Event">
                                    <span>Create</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/events" title="Events List">
                                    <span>List</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="#settings" title="Settings" data-toggle="collapse">
                            <em class="icon-settings"></em>
                            <span data-localize="sidebar.nav.DASHBOARD">Settings</span>
                        </a>
                        <ul id="settings" class="nav sidebar-subnav collapse">
                            <li class=" ">
                                <a href="/admin/settings" title="General settings">
                                    <span>General settings</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/questions" title="Questions">
                                    <span>Questions</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="#digital" title="Digital Assets" data-toggle="collapse">
                            <em class="icon-diamond"></em>
                            <span data-localize="sidebar.nav.DASHBOARD">Digital Assets</span>
                        </a>
                        <ul id="digital" class="nav sidebar-subnav collapse">
                            <li class=" ">
                                <a href="/assets" title="Upload New Asset">
                                    <span>Upload New Asset</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="#groups" title="Groups" data-toggle="collapse">
                            <em class="icon-people"></em>
                            <span data-localize="sidebar.nav.DASHBOARD">Groups</span>
                        </a>
                        <ul id="groups" class="nav sidebar-subnav collapse">
                            <li class=" ">
                                <a href="/groups/create" title="Create Group">
                                    <span>Create</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/groups" title="Group List">
                                    <span>List</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=" ">
                        <a href="#layouts" title="Layouts" data-toggle="collapse">
                            <em class="icon-layers"></em>
                            <span data-localize="sidebar.nav.DASHBOARD">Layouts</span>
                        </a>
                        <ul id="layouts" class="nav sidebar-subnav collapse">
                            <li class=" ">
                                <a href="/admin/layouts/create" title="Create Layout">
                                    <span>Create</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/layouts" title="Layouts List">
                                    <span>List</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- END sidebar nav-->
            </nav>
        </div>
        <!-- END Sidebar (left)-->
    </aside>
    <!-- Main section-->
    <section>
        <!-- Page content-->
        <div class="content-wrapper">
            @yield('content')
        </div>
    </section>
    <!-- Page footer-->
    <footer class="footer">
        <span>Developed by Besofty Software Limited @<?php echo date('Y');?></span>
    </footer>
</div>
<!-- =============== VENDOR SCRIPTS ===============-->
<!-- MODERNIZR-->
<script src="/admin-theme/vendor/modernizr/modernizr.custom.js"></script>
<!-- MATCHMEDIA POLYFILL-->
<script src="/admin-theme/vendor/matchMedia/matchMedia.js"></script>
<!-- JQUERY-->
<script src="/admin-theme/vendor/jquery/dist/jquery.js"></script>
<!-- BOOTSTRAP-->
<script src="/admin-theme/vendor/bootstrap/dist/js/bootstrap.js"></script>
<!-- STORAGE API-->
<script src="/admin-theme/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
<!-- JQUERY EASING-->
<script src="/admin-theme/vendor/jquery.easing/js/jquery.easing.js"></script>
<!-- ANIMO-->
<script src="/admin-theme/vendor/animo.js/animo.js"></script>
<!-- SLIMSCROLL-->
<script src="/admin-theme/vendor/slimScroll/jquery.slimscroll.min.js"></script>
<!-- SCREENFULL-->
<script src="/admin-theme/vendor/screenfull/dist/screenfull.js"></script>
<!-- LOCALIZE-->
<script src="/admin-theme/vendor/jquery-localize-i18n/dist/jquery.localize.js"></script>
<!-- RTL demo-->
<script src="/admin-theme/js/demo/demo-rtl.js"></script>
<!-- TAGS INPUT-->
<script src="/admin-theme/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<!-- CHOSEN-->
<script src="/admin-theme/vendor/chosen_v1.2.0/chosen.jquery.min.js"></script>
<!-- SELECT2-->
<script src="/admin-theme/vendor/select2/dist/js/select2.js"></script>
<!-- =============== PAGE VENDOR SCRIPTS ===============-->
<!-- SPARKLINE-->
<script src="/admin-theme/vendor/sparkline/index.js"></script>
<!-- FLOT CHART-->
<script src="/admin-theme/vendor/Flot/jquery.flot.js"></script>
<script src="/admin-theme/vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="/admin-theme/vendor/Flot/jquery.flot.resize.js"></script>
<script src="/admin-theme/vendor/Flot/jquery.flot.pie.js"></script>
<script src="/admin-theme/vendor/Flot/jquery.flot.time.js"></script>
<script src="/admin-theme/vendor/Flot/jquery.flot.categories.js"></script>
<script src="/admin-theme/vendor/flot-spline/js/jquery.flot.spline.min.js"></script>
<!-- CLASSY LOADER-->
<script src="/admin-theme/vendor/jquery-classyloader/js/jquery.classyloader.min.js"></script>
<!-- MOMENT JS-->
<script src="/admin-theme/vendor/moment/min/moment-with-locales.min.js"></script>
<!-- SKYCONS-->
<script src="/admin-theme/vendor/skycons/skycons.js"></script>
<!-- DEMO-->
<script src="/admin-theme/js/demo/demo-flot.js"></script>
<!-- VECTOR MAP-->
<script src="/admin-theme/vendor/ika.jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/admin-theme/vendor/ika.jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="/admin-theme/vendor/ika.jvectormap/jquery-jvectormap-us-mill-en.js"></script>
<script src="/admin-theme/js/demo/demo-vector-map.js"></script>
<script src="/admin-theme/js/app.js"></script>
<script src="/admin-theme/js/custom.js"></script>
<script src="/admin-theme/js/custom.js"></script>
<!-- =============== APP SCRIPTS ===============-->

<!-- =============== ANGULAR SCRIPTS ===============-->
<script src="/bower_components/angular/angular.js"></script>
<script src="/bower_components/angular-resource/angular-resource.js"></script>
<script src="/bower_components/angular-flash-alert/dist/angular-flash.js"></script>
<script src="/bower_components/angular-toastr/dist/angular-toastr.tpls.js"></script>

<script src="/admin-theme/js/angular/app.js"></script>
<script src="/admin-theme/js/angular/factories.js"></script>
<script src="/admin-theme/js/angular/GroupsCtrl.js"></script>
<script src="/admin-theme/js/angular/UsersCtrl.js"></script>
</body>
</html>