<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">
 <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title></title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{!! asset('assets/admin/vendor/fonts/fontawesome.css') !!}"/>

    <link rel="stylesheet" href="{!! asset('assets/admin/vendor/fonts/tabler-icons.css') !!}"/>
    {{-- <link rel="stylesheet" href="{!! asset('assets/admin/vendor/fonts/flag-icons.css') !!}"/> --}}

    <!-- Core CSS -->
    <link rel="stylesheet" href="{!! asset('assets/admin/vendor/css/rtl/core.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('assets/admin/vendor/css/rtl/theme-default.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('assets/admin/css/demo.css') !!}"/>

    <link rel="stylesheet" href="{!! asset('assets/admin/vendor//libs/datatables-bs5/datatables.bootstrap5.css') !!}"/>

     <link rel="stylesheet" href="{!! asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin/vendor/libs/node-waves/node-waves.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin/vendor/libs/typeahead-js/typeahead.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css') !!}">
    <script src="{!! asset('assets/admin/vendor/js/helpers.js') !!}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{!! asset('assets/admin/js/config.js') !!}"></script>


     @yield('styles')
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        @include('admin.includes.sidebar')

        <!-- Layout container -->
        <div class="layout-page">
            @include('admin.includes.header')

            @yield('content')
            @include('admin.includes.footer')
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{!! asset('assets/admin/vendor/libs/jquery/jquery.js') !!}"></script>
    <script src="{!! asset('assets/admin/vendor/libs/popper/popper.js') !!}"></script>
    <script src="{!! asset('assets/admin/vendor/js/bootstrap.js') !!}"></script>
    <script src="{!! asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') !!}"></script>
    <script src="{!! asset('assets/admin/vendor/libs/node-waves/node-waves.js') !!}"></script>

    <script src="{!! asset('assets/admin/vendor/libs/hammer/hammer.js') !!}"></script>
    <script src="{!! asset('assets/admin/vendor/libs/i18n/i18n.js') !!}"></script>
    <script src="{!! asset('assets/admin/vendor/libs/typeahead-js/typeahead.js') !!}"></script>

    <script src="{!! asset('assets/admin/vendor/js/menu.js') !!}"></script>

    <script src="{!! asset('assets/admin/vendor/libs/datatables-bs5/datatables-bootstrap5.js') !!}"></script>

    <script src="{!! asset('assets/admin/js/main.js') !!}"></script>
     <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/super-build/ckeditor.js"></script>


    <script src="{!! asset('assets/admin/js/common.js') !!}"></script>

    <!-- endbuild -->

    @yield('scripts')
    <script>
        $(".close").click(function(){
            $(this).parent().addClass('d-none');
        });
    </script>


  </body>

</html>




