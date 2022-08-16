<!DOCTYPE html>
<html lang="en">
  <head>
    @include('head')
  </head>
  <body class="goto-here">

  
  	@include('header')
    <!-- END nav -->

    
	  @yield('çontent')



    <footer class="ftco-footer ftco-section">
      @include('footer')
    </footer>
    
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="{{ asset('/template/users/js/jquery.min.js') }}"></script>
  <script src="{{ asset('/template/users/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('/template/users/js/popper.min.js') }}"></script>
  <script src="{{ asset('/template/users/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/template/users/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('/template/users/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('/template/users/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('/template/users/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/template/users/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('/template/users/js/aos.js') }}"></script>
  <script src="{{ asset('/template/users/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('/template/users/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('/template/users/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('/template/users/js/google-map.js') }}"></script>
  <script src="{{ asset('/template/users/js/main.js') }}"></script>
  
  </body>
</html>