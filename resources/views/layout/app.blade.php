<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

        <meta name="description" content="">
        <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @yield('css')
    
        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        
        <link rel="stylesheet" href="css/slick.css"/>
        
        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body >

    
    <section class="preloader">
      <div class="spinner">
          <span class="sk-inner-circle"></span>
      </div>
   </section>


    <nav class="navbar navbar-expand-lg">
      <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <a class="navbar-brand" href="{{route('start')}}">
              <strong><span>Online</span> Exam</strong>
          </a>

          <div class="d-lg-none">
              <a href="#" class="nav-link">{{date("H:i:s");}}</a>

              <a href="#" class="nav-link">{{date("Y:M:d:D");}}</a>
          </div>

          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                    {{-- <a href="" ></a> --}}
                    @yield('userimage')
                      @yield('user')
                  </li>

                  <li class="nav-item">
                      @yield('link1')
                  </li>

                  <li class="nav-item">
                    @yield('link2')
                  </li>

                  <li class="nav-item">
                    @yield('link3')
                  </li>

                  <li class="nav-item">
                    @yield('link4')
                  </li>
                  <li class="nav-item">
                    @yield('link5')
                  </li>
                  <li class="nav-item">
                    @yield('link6')
                  </li>
                  <li class="nav-item">
                    @yield('link7')
                  </li>
                  <li class="nav-item">
                    @yield('link8')
                  </li>
                  <li class="nav-item">
                    <a href="{{route('game')}}" class="nav-link" >play games</a>
      
                  </li>
                  <li class="nav-item">
                    <a href="{{route('bmiform')}}" class="nav-link" >Be healthy</a>
      
                  </li>
                  <li class="nav-item">
                    <a href="{{route('ageCalc')}}" class="nav-link" >findout your age</a>
      
                  </li>
              </ul>

              <div class="d-none d-lg-block">
                <?php ini_set('date.timezone', 'Africa/Cairo'); ?>
                <a href="#" class="nav-link">{{date("H:i:s");}}</a>

                <a href="#" class="nav-link">{{date("Y:M:d:D");}}</a>
              </div>
          </div>
      </div>
  </nav>















  
    <div class="text-center ">
      <div class="m-5">
        @yield('content')
      </div>
          
    </div>

    <footer class="site-footer">
      <div class="container">
          <div class="row">

              <div class="col-lg-3 col-10 me-auto mb-4">
                  <h4 class="text-white mb-3"><a href="{{route('start')}}">online </a> exam</h4>
                  <br>
              </div>

              <div class="col-lg-5 col-8">
                 
              </div>

              <div class="col-lg-3 col-4">
                  <h5 class="text-white mb-3">Social</h5>

                  <ul class="social-icon">

                      <li><a href="https://www.youtube.com/channel/UCnUGhaPykBFf7O7aNNBevsw" class="social-icon-link bi-youtube"></a></li>

                      <li><a href="https://wa.me/01067605447" class="social-icon-link bi-whatsapp"></a></li>

                     <li><a href="www.linkedin.com/in/safaa-magdy-aa7381234" class="social-icon-link bi-linkedin"></a></li>
                    
                  </ul>
              </div>

          </div>
      </div>
  </footer>
    
        </div>








@yield('script')
  <!-- JAVASCRIPT FILES -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/Headroom.js"></script>
  <script src="js/jQuery.headroom.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/custom.js"></script>
  </body>
</html>