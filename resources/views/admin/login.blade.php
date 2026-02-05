<!DOCTYPE html>

<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template-no-customizer"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>{!! config('settings.sitename') !!} :: Sign in</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{!! asset('assets/admin/images/favicon.png') !!}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />


    <!-- Icons -->
    <link rel="stylesheet" href="{!! asset('assets/admin/vendor/fonts/fontawesome.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin/vendor/fonts/tabler-icons.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin/vendor/fonts/flag-icons.css') !!}">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{!! asset('assets/admin/vendor/css/rtl/core.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin/vendor/css/rtl/theme-default.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin/css/demo.css') !!}">


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{!! asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin/vendor/libs/node-waves/node-waves.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin/vendor/libs/typeahead-js/typeahead.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin/vendor/css/pages/page-auth.css') !!}">


    <!-- Helpers -->
    <script src="{!! asset('assets/admin/vendor/js/helpers.js') !!}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{!! asset('assets/admin/js/config.js') !!}"></script>


  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Login -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center mb-4 mt-2">
                <img src="{!!asset('assets/admin/images/logo.png')!!}" style="width: 150px;" alt="branding logo">
              </div>
              <!-- /Logo -->
              <h4 class="mb-1 pt-2">Welcome</h4>
              @include('admin.includes.notifications')
              {!! html()->form('POST', route(ADMIN_SLUG . '.login'))->id('login-form')->acceptsFiles()->attribute('novalidate','novalidate')->open() !!}
                <div class="mb-3">
                    {!! html()->label('Username', 'username')->class('form-label') !!}
                    {{ html()->text('username', old('username'))->class('form-control') }}
                @error('username')
                    <span class="error-message">{!! $message !!} *</span>
                @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                     {!! html()->label('Password', 'password')->class('form-label') !!}
                  </div>
                  <div class="input-group input-group-merge">

                    {{ html()->password('password')->class('form-control')->id('password')->placeholder('Password') }}
                    <span class="input-group-text cursor-pointer rounded-end"><i class="ti ti-eye-off"></i></span>
                  </div>
                </div>

                <div class="mb-3">
                     {!! html()->submit('Submit')->class('btn btn-primary d-grid w-100') !!}

                </div>
                {{ html()->form()->close() }}


            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->
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
      <!-- endbuild -->

      {{-- jQuery Validation js --}}
      <script src="{!! asset('assets/admin/vendor/validation/jquery.validate.min.js') !!}" type="text/javascript"></script>
      <script src="{!! asset('assets/admin/vendor/validation/additional-methods.js') !!}" type="text/javascript"></script>
      {{--End jQuery Validation js --}}

      <!-- Main JS -->
      <script src="{!! asset('assets/admin/js/main.js') !!}"></script>
      <script src="{!! asset('assets/admin/js/common.js') !!}"></script>
      <script>
        $(".close").click(function(){
            $(this).parent().addClass('d-none');
        });
    </script>

  </body>
</html>
