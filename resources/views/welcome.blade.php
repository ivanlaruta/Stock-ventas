<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TOYOSA</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('vitality/assets/css/bootstrap/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Retina.js - Load first for faster HQ mobile images. -->
    <script src="{{asset('vitality/assets/js/plugins/retina/retina.min.js')}}"></script>
    <!-- Font Awesome -->
    <link href="{{asset('vitality/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Default Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>
    <!-- Modern Style Fonts (Include these is you are using body.modern!) -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>
    <!-- Vintage Style Fonts (Include these if you are using body.vintage!) -->
    <link href='http://fonts.googleapis.com/css?family=Sanchez:400italic,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="{{asset('vitality/assets/css/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vitality/assets/css/plugins/owl-carousel/owl.theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vitality/assets/css/plugins/owl-carousel/owl.transitions.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vitality/assets/css/plugins/magnific-popup.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vitality/assets/css/plugins/background.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vitality/assets/css/plugins/animate.css')}}" rel="stylesheet" type="text/css">
    <!-- TOYOSA Theme CSS -->
    <!-- Uncomment the color scheme you want to use. -->
    <link href="{{asset('vitality/assets/css/vitality-red.css')}}" rel="stylesheet" type="text/css">
    <!-- <link href="{{asset('vitality/assets/css/vitality-aqua.css')}}" rel="stylesheet" type="text/css"> -->
    <!-- <link href="{{asset('vitality/assets/css/vitality-blue.css')}}" rel="stylesheet" type="text/css"> -->
    <!-- <link href="{{asset('vitality/assets/css/vitality-green.css')}}" rel="stylesheet" type="text/css"> -->
    <!-- <link href="{{asset('vitality/assets/css/vitality-orange.css')}}" rel="stylesheet" type="text/css"> -->
    <!-- <link href="{{asset('vitality/assets/css/vitality-pink.css')}}" rel="stylesheet" type="text/css"> -->
    <!-- <link href="{{asset('vitality/assets/css/vitality-purple.css')}}" rel="stylesheet" type="text/css"> -->
    <!-- <link href="{{asset('vitality/assets/css/vitality-tan.css')}}" rel="stylesheet" type="text/css"> -->
    <!-- <link href="{{asset('vitality/assets/css/vitality-turquoise.css')}}" rel="stylesheet" type="text/css"> -->
    <!-- <link href="{{asset('vitality/assets/css/vitality-yellow.css')}}" rel="stylesheet" type="text/css"> -->
    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js')}}/1.3.0/respond.min.js')}}"></script>
    <![endif]-->
</head>
<!-- Alternate Body Classes: .modern and .vintage -->

<body id="page-top">
    <!-- Navigation -->
    <!-- Note: navbar-default and navbar-inverse are both supported with this theme. -->
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-expanded">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="{{asset('vitality/assets/img/logo.png')}}" class="img-responsive" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">ACERCA DEL SISTEMA</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#process">CONTENIDO</a>
                    </li>
                    
                    <li>
                         @if (Auth::check())
                        <a class="page-scroll" href="{{ url('/home') }}">INICIO</a>
                    @else
                    <a class="page-scroll" href="{{ url('/login') }}">INGRESAR</a>
                        
                    @endif

                        
                    </li>
                    <li>
                        
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <header style="background-image: url('{{asset('vitality/assets/img/bg-header.jpg')}}');">
        <div class="intro-content">
            <img src="{{asset('vitality/assets/img/profile.png')}}" class="img-responsive img-centered" alt="">
            <div class="brand-name">S.I.T.</div>
            <hr class="colored">
            <div class="brand-name-subtext">SISTEMA INTEGRAL TOYOSA</div>
        </div>
        <div class="scroll-down">
            <a class="btn page-scroll" href="#about"><i class="fa fa-angle-down fa-fw"></i></a>
        </div>
    </header>
     {{-- <header class="video">
        <div class="overlay"></div>
        <div class="intro-content">
            <img src="{{asset('vitality/assets/img/profile.png')}}" class="img-responsive img-centered" alt="">
            <div class="brand-name">TOYOSA</div>
            <hr class="colored">
            <div class="brand-name-subtext">SOLICITUDES - ENVIOS, STOCK - VENTAS</div>
        </div>
        <div class="scroll-down page-scroll">
            <a class="btn page-scroll" href="#about"><i class="fa fa-angle-down"></i></a>
        </div>
    </header> --}}
    <section id="about">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-lg-12 wow fadeIn">
                    <h1>SOLICITUDES - ENVIOS &amp; STOCK - VENTAS </h1>
                    <p>Sistema interactivo para creacion de solicitudes, envios y revision de ventas, stock.</p>
                    <hr class="colored">
                </div>
            </div>
            <div class="row text-center content-row">
                <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay=".2s">
                    <div class="about-content">
                        <i class="fa fa-eye fa-4x"></i>
                        <h3>NIVEL DE DETALLE</h3>
                        <p>Los reportes del sistema tienene un alto nivel de detalle, tambien permite realizar busquedas avanzadas.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay=".4s">
                    <div class="about-content">
                        <i class="fa fa-edit fa-4x"></i>
                        <h3>FACIL INTERACCION</h3>
                        <p>El sistema tiene una interfaz amigable por lo que al usuario no le resultara dificil la manipulacion de formularios y  reportes.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay=".6s">
                    <div class="about-content">
                        <i class="fa fa-tablet fa-4x"></i>
                        <h3>Responsive</h3>
                        <p>El sistema esta desarrollado para que pueda ser visto desde cualquier dispositivo, ya sea de escritorio o movil sin importar el sistema operativo.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

   

    <aside class="cta-quote" style="background-image: url('{{asset('vitality/assets/img/bg-aside.jpg')}}');">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <span class="quote">Gracias a la <span class="text-primary">informacion</span> generada en los sistemas <span class="text-primary">TEROS y SIC</span> podemos generar los reportes presentados a continuacion. 
                    <hr class=" colored">
                    <a class="btn btn-outline-light page-scroll" href="#contact">Ingresar</a>
                </div>
            </div>
        </div>
    </aside>
    <section id="process" class="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 wow fadeIn">
                    <h2>CONTENIDO DEL SISTEMA</h2>
                    <hr class="colored">
                    <p>Dentro del sistema podra encontrar lo siguiente.</p>
                </div>
            </div>
            <div class="row content-row">
                <div class="col-md-4 wow fadeIn" data-wow-delay=".2s">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-clipboard"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SOLICITUDES Y ENVIOS</h3>
                            <ul>
                                <li>Creacion de solcitiudes.</li>
                                <li>Aprovacion y reserva de unidades de forma automatica.</li>
                                <li>Generacion de envios.</li>
                                <li>Rerpotes.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay=".4s">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">STOCK-INVENTARIO</h3>
                            <ul>
                                <li>Estado de vehiculos estacionados</li>
                                <li>Listas por regional</li>
                                <li>Listas por marca</li>
                                <li>busquedas avanzadas</li>
                                <li>stock-max  stock-min</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay=".6s">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-rocket"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">VENTAS</h3>
                            <ul>
                                <li>Reporte de ventas</li>
                                <li>Detalle por mes</li>
                                <li>Detalle por marca</li>
                                <li>Detalle por regional</li>
                                <li>Objetivos.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
  
   
    
    <footer class="footer" style="background-image: url('{{asset('vitality/assets/img/bg-footer.jpg')}}')">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-phone"></i> TELEFONO</h4>
                    <p>239 0930-35  <br>2 189 292</p>
                </div>
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-map-marker"></i> OFICINA CENTRAL</h4>
                    <p>Plaza venezuela #1413
                        <br>La Paz - Bolivia</p>
                </div>
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-envelope"></i> Email</h4>
                    <p><a href="mailto:mail@example.com">www.toyosa.com</a>
                    </p>
                </div>
            </div>
            <div class="row social">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook fa-fw fa-2x"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter fa-fw fa-2x"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin fa-fw fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row copyright">
                <div class="col-lg-12">
                    <p class="small">&copy; 2017 Departamento de sistemas TOYOSA S.A.</p>
                </div>
            </div>
        </div>
    </footer>
      
   
    <!-- Core Scripts -->
    <script src="{{asset('vitality/assets/js/jquery.js')}}"></script>
    <script src="{{asset('vitality/assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- Plugin Scripts -->
    <script src="{{asset('vitality/assets/js/plugins/jquery.easing.min.js')}}"></script>
    <script src="{{asset('vitality/assets/js/plugins/classie.js')}}"></script>
    <script src="{{asset('vitality/assets/js/plugins/cbpAnimatedHeader.js')}}"></script>
    <script src="{{asset('vitality/assets/js/plugins/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{asset('vitality/assets/js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('vitality/assets/js/plugins/background/core.js')}}"></script>
    <script src="{{asset('vitality/assets/js/plugins/background/transition.js')}}"></script>
    <script src="{{asset('vitality/assets/js/plugins/background/background.js')}}"></script>
    <script src="{{asset('vitality/assets/js/plugins/jquery.mixitup.js')}}"></script>
    <script src="{{asset('vitality/assets/js/plugins/wow/wow.min.js')}}"></script>
    <script src="{{asset('vitality/assets/js/contact_me.js')}}"></script>
    <script src="{{asset('vitality/assets/js/plugins/jqBootstrapValidation.js')}}"></script>
    <!-- TOYOSA Theme Scripts -->
    <script src="{{asset('vitality/assets/js/vitality.js')}}"></script>
</body>

</html>
