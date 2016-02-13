<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Votaciones</title>
    <link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imagenes/favicon.ico" type="image/x-icon">

    <!-- Bootstrap -->
   <link rel="stylesheet" href="<?php echo asset('common/css/bootstrap.min.css')?>" type="text/css"> 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- inicio nav -->
  <nav role="navigation" class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="index.php" class="navbar-brand">Votaciones2016</a>
        </div>
 
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Constitución Mesa</a></li>
                <li><a href="Constituidas.php">Ver Mesas Constituidas</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{route('auth/login')}}">Login</a></li>
                        <li><a href="{{route('auth/register')}}">Register</a></li>
                    @else
                        <li>
                            <a href="#">{{ Auth::user()->name }}</a>
                        </li>
                        <li><a href="{{route('auth/logout')}}">Logout</a></li>
                        
                    @endif
            </ul>

        </div>
</nav>
<!-- Fin nav -->

<!-- bloque errores -->
<div class="container">
               @if (Session::has('errors'))
            <div class="alert alert-warning" role="alert">
            <ul>
                <strong>Oops! Something went wrong : </strong>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
<!-- fin bloque errores  -->
<!-- Inicio de contenido --> 

    @yield('content')

<!-- Fin Contenido -->
<!-- inicio footer -->
<footer class="footer-distributed">

            <div class="footer-left">

                <h3>Company<span>logo</span></h3>

                <p class="footer-links">
                    <a href="#">Home</a>
                    ·
                    <a href="#">Blog</a>
                    ·
                    <a href="#">Pricing</a>
                    ·
                    <a href="#">About</a>
                    ·
                    <a href="#">Faq</a>
                    ·
                    <a href="#">Contact</a>
                </p>

                <p class="footer-company-name">Company Name &copy; 2015</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>21 Revolution Street</span> Paris, France</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+1 555 123456</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:support@company.com">support@company.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>Votaciones2016</span>
                    Creada para ayudar al recuento de votos y mesas constituidas.
                </p>

              

            </div>

        </footer>
        <!-- Fin footer -->
        <script type="text/javascript" src="<?php echo asset('common/js/jquery-1.11.3.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('common/js/bootstrap.min.js')?>"></script>
  </body>
</html>
