<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Redd Flag Training</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/creative.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top w-100" id="mainNav">
      <div class="container">
        <a class="navbar-brand p-1" href="#" >
          <img src="/img/ReddFlagLogo.png" width="55" height="40" class="d-inline-block align-top" alt="">
          <b class="navbar-brand js-scroll-trigger" href="#page-top">Redd Flag</b>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#about">Mission</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#services">Core Principles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#portfolio">Modules</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
              </li>
            @guest
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ url('/login') }}">Login</a>
              </li>
            @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }} <span class="caret"></span></a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ '/home' }}">{{ __('Home') }}</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                      document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{csrf_field()}}
                    </form>
                  </div>
                </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2 class="text-uppercase">
              <strong class="text-primary">Train Your Brain To Catch The Redd Flags</strong>
            </h2>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <h3 class="text-faded text-primary mb-5">Attention management that measurably improves wisdom, creativity, and happiness.</h3>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Learn More</a>
          </div>
        </div>
      </div>
    </header>

    <section class="section-special bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Welcome to <strong>REDD FLAG</strong> Alertness Training</h2>
            <!--<hr class="light my-4">-->
            <div class="py-5" >
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="embed-responsive embed-responsive-21by9">
                      <video src="../video/ReddFlagAd01.mp4" class="embed-responsive-item" controls="controls"> Your browser does not support HTML5 video. </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <p class="text-faded text-white mb-4">In a world that demands constant attention at every turn, reprogram your instincts
            to achieve and maintain peak awareness. Introducing <strong>REDD FLAG</strong>, a revolutionary platform constructed to improve cognitive
            attention and situational awareness through tried-and-true techniques.</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="{{ url('/register') }}">Sign Up Now</a>
            <p class="text-faded text-white pt-4">Already have an account? Log in <a class="light" href="{{ url('/login') }}">here</a>.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Proven Cirriculum Design</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-flask text-primary mb-3 sr-icon-1"></i>
              <h3 class="mb-3">Research Driven</h3>
              <p class="text-muted mb-0">Training modules built from the ground up with roots in published scientific studies 
              from renowned institutions.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-cogs text-primary mb-3 sr-icon-2"></i>
              <h3 class="mb-3">Noticeable Results</h3>
              <p class="text-muted mb-0">Focused on improving the everyday function of your brain to achieve peak mental performance
              through increased awareness.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-video text-primary mb-3 sr-icon-3"></i>
              <h3 class="mb-3">Engaging Content</h3>
              <p class="text-muted mb-0">Learn about the psychological building blocks of improving alertness
              through captivating, easy-to-understand video modules.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-cloud-upload-alt text-primary mb-3 sr-icon-4"></i>
              <h3 class="mb-3">Resource Library</h3>
              <p class="text-muted mb-0">Fresh content and training material regularly uploaded to the Knowledge Repository for viewing at any time, any place.               
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-8 mx-auto my-5 text-center">
            <a class="portfolio-box" href="/img/portfolio/1.png">
              <img class="img-fluid" src="/img/portfolio/1.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Module 1 - The Fundamentals
                  </div>
                  <div class="project-name text-black p-4">
                    Priming Attention
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Contact the REDD FLAG Team</h2>
            <hr class="my-4">
            <p class="mb-5">Have any questions or comments? Email or call us today!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 text-center"></div>
          <div class="col-lg-3 text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:name@email.com">team@stronghold-homes.com</a>
            </p>
          </div>
          <div class="col-lg-3 text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a>(412) 855-3217</a>
            </p>
          </div>
          <div class="col-lg-3 text-center"></div>
        </div>
      </div>
    </section>

  <div class="py-5 bg-dark text-white" >
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>© Copyright 2018 REDD FLAG - All Rights Reserved</p>
        </div>
      </div>
    </div>
  </div>


    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/js/creative.min.js"></script>

  </body>

</html>
