<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('/') }}/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('/') }}/robust/app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('/') }}/robust/app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('/') }}/robust/app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('/') }}/robust/app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/robust/app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="{{ url('/') }}/robust/app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/robust/app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/robust/app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/robust/app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/robust/app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/robust/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/robust/app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/robust/app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/robust/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/robust/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/robust/assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <!-- navbar-fixed-top-->
    @yield('nav')
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
      </div>
      <!-- / main menu header-->
      @yield('side')
      <!-- /main menu content-->
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Basic Tables</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Tables</a>
                </li>
                <li class="breadcrumb-item active">Basic Tables
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Tables start -->

            @yield('content')

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @yield('footer')
    <!-- BEGIN VENDOR JS-->
    <script src="{{ url('/') }}/robust/app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/robust/app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/robust/app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/robust/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/robust/app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/robust/app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/robust/app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/robust/app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/robust/app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    @yield('linkscript')
    <!-- END PAGE VENDOR JS-->
    
    <script>
      function previewImage() {
          document.getElementById("image-preview").style.display = "block";
          var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
        
          oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview").src = oFREvent.target.result;
          };
        };
  </script>
  </body>
</html>
