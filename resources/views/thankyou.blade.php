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
    <nav class="navbar navbar-expand-lg bg-light navbar-light w-100" id="mainNav">
      <div class="container">
        <a class="navbar-brand p-1" href="{{ url('/welcome') }}" >
          <img src="/img/ReddFlagLogo.png" width="55" height="40" class="d-inline-block align-top" alt="">
          <b class="navbar-brand js-scroll-trigger" href="#page-top">Redd Flag</b>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            @guest
            @else
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="">My Account</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }} <span class="caret"></span></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

    <header class="thankyou text-center h-100">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong class="text-primary">Thank You for your Support!</strong>
              <div class="my-4"></div>
              <hr>
              <div class="my-4"></div>
              <a class="btn btn-primary btn-xl js-scroll-trigger" href="/welcome">Go Back</a>
            </h1>
          </div>
        </div>
      </div>
    </header>


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
      </div>
  </header>

</html>