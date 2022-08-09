<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>DangNews</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="{{ URL::asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}"
    />
    <link rel="stylesheet" href="{{ URL::asset('assets/vendors/aos/dist/aos.css/aos.css') }}" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.png') }}" />

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <!-- endinject -->
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">

        @include('blocks.header')

        @yield('content')       
        @include('blocks.footer')
    


    </div>
</div>
<!-- inject:js -->
<script src="{{ URL::asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="{{ URL::asset('assets/vendors/aos/dist/aos.js/aos.js') }}"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{ URL::asset('assets/js/demo.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.easeScroll.js') }}"></script>
<!-- End custom js for this page-->
</body>
</html>