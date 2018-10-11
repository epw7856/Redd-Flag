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

    <header>
        <div class="container">
    <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3>Welcome, {{ Auth::user()->name }}</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="py-4 m-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center display-3 text-primary"><strong>Stay Tuned.</strong></h1>
          <h1 class="text-center display-3 text-primary"><strong>REDD FLAG is Coming Soon!</strong></h1>
        </div>
      </div>
    </div>
  </div>
  </header>


  <div class="p-0 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center">Want to join the Redd Flag movement? Donate today!</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2">
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12 text-center align-items-center justify-content-center align-self-center">
              <form class="" id="myForm" action="/thankyou" method="POST">
              {{csrf_field()}}
                <div class="form-group align-items-center align-self-center justify-content-center mt-2">
                  <label class="text-center" >Enter Donation Amount</label>
                  <div class="row">
                  
                      <script src="https://checkout.stripe.com/checkout.js"></script>
                      <div class="col-md-12 align-items-center align-self-center justify-content-center d-flex"> $<div class="mx-1"></div>
                      <input type="text" class="form-control w-50 justify-content-center align-items-center align-self-center text-justify" placeholder="USD" id="amountInDollars"> </div>
                      <input type="hidden" id="stripeToken" name="stripeToken" />
                      <input type="hidden" id="stripeEmail" name="stripeEmail" />
                      <input type="hidden" id="amountInCents" name="amountInCents" />

                </div>
                </div>
                <h6 class="hidden text-primary" id="error_explanation" name="error_explanation">Please enter a valid amount in USD!</h6>
                @if(session('error'))
                    <div class="alert alert-danger p-2">
                      {{session('error')}}
                    </div>
                @endif
                <button type="submit" class="btn col-xs-5 btn-primary text-lowercase text-capitalize" id="customButton" value="Pay">Pay with Card</button>
              </form>
            
            </div>
          </div>
        </div>
        <div class="col-md-4"></div>

      </div>
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-8 p-5">
              <h5 class="text-primary text-center">Redd  Flag Kickstarter Progress</h5>
              <div class="progress style="height: 5px;">
              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 1%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h6 class="text-primary text-center p-2">$0 of $15,000 raised</h6>
          </div>
          <div class="col-lg-2"></div>
    </div>
  </div>

  <!--<div class="py-2" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img class="img-fluid d-block p-0 m-0 mx-auto" src="../img/clock.jpg" width="300" height="60">
        </div>
      </div>
    </div>
  </div>-->
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
    <script src="{{ url('js/payment.js') }}"></script>

  </body>

</html>
