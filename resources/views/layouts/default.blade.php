<!doctype html>
<html lang="en">
  @section('php')
      
  @endsection
  

  @include('../inserts/head')
  
  @section('style')
      
  @endsection

    <body>

      <!-- <div id="preloder">
          <div class="loader"></div>
      </div> -->

    <div class="container-fluid caja p-0 m-0"><!-- Contenedor -->
      @include('../inserts/header')

      @yield('ads')
          
      

      @yield('content')
          
      

      @include('../inserts/footer')
    </div><!-- (Fin)Contenedor -->

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="../js/jquery-3.3.1.min.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
        <script src="../js/jquery.magnific-popup.min.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
        <script src="../js/jquery.slicknav.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
        <script src="../js/owl.carousel.min.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
        <script src="../js/jquery.nice-select.min.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
        <script src="../js/mixitup.min.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
        <script src="../js/main.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
        @yield('scripts')
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
        <script type="bba5e7fdb0ecd42f6a179fdb-text/javascript">
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
        </script>
        
        <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="bba5e7fdb0ecd42f6a179fdb-|49" defer=""></script></body>
  </html>
