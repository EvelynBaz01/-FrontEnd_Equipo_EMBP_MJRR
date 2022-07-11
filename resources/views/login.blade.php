<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Pizzas Rossely</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/csslogin/style.css') }}">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		    <a class="navbar-brand" href="{{ route('inicio') }}"><span class="flaticon-pizza-1 mr-1"></span>Pizzas<br><small>Rossely</small></a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="oi oi-menu"></span> Menú
		    </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="{{ route('inicio') }}" class="nav-link">Inicio</a></li>
	          <li class="nav-item"><a href="{{ route('quienes_somos') }}" class="nav-link">¿Quiénes Somos?</a></li>
            <li class="nav-item"><a href="{{ route('servicios') }}" class="nav-link">Servicios</a></li>
            <li class="nav-item"><a href="{{ route('contacto') }}" class="nav-link">Contacto</a></li>
            <li class="nav-item active"><a href="{{ route('iniciar_sesion') }}" class="nav-link">Iniciar Sesión</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="ftco-section">
		  <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="login-wrap py-5">
              <div class="img d-flex align-items-center justify-content-center" style="background-image: url(assets/images/Pizza.png);"></div>
                <h3 class="text-center mb-0">Bienvenido</h3>
                <p class="text-center">Inicia sesión para conocer nuestros procesos</p>
                <form action="#" class="login-form">
                  <div class="form-group">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                    <input type="text" class="form-control" placeholder="Usuario" required>
                  </div>
                  <div class="form-group">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                    <input type="password" class="form-control" placeholder="Contraseña" required>
                  </div>
                  <div class="form-group d-md-flex">
                    <div class="w-100 text-md-right"><a href="#">¿Olvidó su contraseña?</a></div>
                  </div>
                  <div class="form-group"> 
                    <a type="submit" href="{{ route('panel_adm') }}" class="btn form-control btn-primary rounded submit py-3 px-4">
                        Iniciar Sesión
                    </a>
                  </div>
                </form>
              <div class="w-100 text-center mt-4 text">
                <p class="mb-0">¿No tiene una cuenta?</p>
                <a href="{{ route('registrar_usu') }}">Registrarse</a>
              </div>          
            </div>
          </div>
        </div>
		  </div>
	  </section>


  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/aos.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('assets/js/scrollax.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  </body>
</html>