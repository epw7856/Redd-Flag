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
  
  <body>
  <nav class="navbar navbar-expand-lg bg-light navbar-light w-100" id="mainNav">
      <div class="container">
        <a class="navbar-brand p-1" href="{{ url('/welcome') }}" >
          <img src="/img/ReddFlagLogo.png" width="55" height="40" class="d-inline-block align-top" alt="">
          <b class="navbar-brand js-scroll-trigger" href="{{ url('/welcome') }}">Redd Flag</b>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
  </nav>

  <header class="py-5 text-center d-flex">
      <div class="container my-auto">
          <div class="text-left justify-content-center align-items-center align-self-center d-flex flex-row w-100 mx-auto py-5">
            <div class="container">
              <div class="row">
                <div class="col-md-3"> </div>
                <div class="col-md-6">
                  <div class="card text-white bg-light text-left">
                    <div class="card-body text-left text-primary bg-light">
                      <h2 class="mb-4 text-center">User Login</h2>
                      <div class="col-md-12">
                        <form method="POST" action="{{ route('login') }}">
                                {{csrf_field()}}

                                <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label text-md-right text-black">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right text-black">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label text-black" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0 py-2">
                                    <div class="col-md-8 offset-md-3">
                                        <button type="submit" class="btn col-md-4 btn-primary text-lowercase text-capitalize">
                                            {{ __('Login') }}
                                        </button>
                                        <a class="btn btn-light text-black text-lowercase text-capitalize">
                                            {{ __('Forgot Password') }}
                                        </a>
                                        <!--<a class="mx-3" href="{{ route('password.request') }}">
                                            {{ __('Forgot Password') }}
                                        </a>-->
                                    </div>
                                </div>

                                <div class="container py-4">
                                  <div class="row mb-0">
                                    <div class="col-md-9 offset-md-2">
                                      <p class="text-center  text-black">New to REDD FLAG? <a class="text-center dark" href="{{ url('/register') }}">
                                                {{ __('Register Here') }}
                                        </a></p>
                                    </div>
                                    </div>
                                  </div>
                                
                            </form>
                      </div>
                      <div class="row"> </div>
                    </div>
                  </div>
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
        </div>
    </header>

</html>