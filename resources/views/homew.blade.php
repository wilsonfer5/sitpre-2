<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SITPRE-Manejo de terceros previos</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="public/assets/assets/img/favicon.png" rel="icon">
  <link href="public/assets/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600">
    <!-- Lightbox>
    <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.css">
    <!-- Custom font icons>
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- theme stylesheet>
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes>
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon>
    <link rel="shortcut icon" href="img/favicon1.png"-->

  <!-- Vendor CSS Files -->
  <link href="public/assets/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="public/assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="public/assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="public/assets/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="public/assets/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="public/assets/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="#">ingsistemas@ufps.edu.co</a></i>
       </div>   
      <div class="social-links d-none d-md-flex align-items-center">
        <a target="_blank" href="https://twitter.com/UFPSCUCUTA?s=08" class="twitter"><i class="bi bi-twitter"></i></a>
        <a target="_blank" href="https://www.facebook.com/Ufps.edu.co/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a target="_blank" href="https://instagram.com/ufpscucuta?utm_medium=copy_link" class="instagram"><i class="bi bi-instagram"></i></a>
        <a target="_blank" href="https://www.linkedin.com/school/universidad-francisco-de-paula-santander" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">SITPRE<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" target="_blank" href="https://divisist2.ufps.edu.co/">Divisist</a></li>
          <li><a class="nav-link scrollto" target="_blank" href="https://ww2.ufps.edu.co/">UFPS</a></li>
          <li><a class="nav-link scrollto " target="_blank" href="https://ingsistemas.cloud.ufps.edu.co/">Programa académico</a></li>
          <li><a class="nav-link scrollto" data-toggle="modal" data-target="#create" href="#">Registrate docente</a></li>
          <li class="dropdown"> <a href="#"><span>Equipo</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a target="_blank" href="https://www.linkedin.com/in/marco-antonio-adarme-j-114723115/">Marco Adarme</a></li>
              <li><a target="_blank" href="https://www.linkedin.com/in/andr%C3%A9s-orlando-orduz-grimaldo-b33658114">Andres Grimaldo</a></li>
              <li><a target="_blank" href="https://www.linkedin.com/in/jose-jair-llanes-avellaneda-39b4771b2">Jair Llanes</a></li>
              <li><a target="_blank" href="https://www.linkedin.com/in/wilson-fernandez-1a481a214/">Wilson Fernandez</a></li>
              <li><a target="_blank" href="https://www.linkedin.com/in/jhonatan-ramirez-a25168193">Jhonatan Ramirez</a></li>
            </ul>
          </li>
              </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <!------------------------Mensaje---------------------------------->
       <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
              @if(Session::has('alert-' . $msg))
              <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
              @endif
            @endforeach
          </div>
    <!---------------------------------------------------------->
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Bienvenido a <span>SITPRE</span></h1><br>
      <h5>Sistema de información para la publicación de notas usando Google sheet. 
        <br>
        <br>
        Profesor UFPS, si cuenta con una hoja de calculo dónde lleva el registro de notas de sus estudiantes, puede administrar su publicación de forma privada.
        <br>
        <br>
        Usted seguirá manteniendo el control de los datos a través de su archivo original.  </h5> <br>
        <div class="d-flex">
           @if (Auth::check()&&Auth::user()->tipo_usuario==1)
            <a href="/admin" data-toggle="" data-target="" class="btn btn-danger btn-sm " > 
            <i class="fa fa-user"></i> admin </a>
            @elseif(Auth::check()&&Auth::user()->tipo_usuario==2)    
             <a href="/teacher" data-toggle="" data-target="" class="btn btn-danger btn-sm " > 
            <i class="fa fa-user"></i> docente </a>  
            @elseif(Auth::check()&&Auth::user()->tipo_usuario==null)    
             <a href="/student" data-toggle="" data-target="" class="btn btn-danger btn-sm " > 
            <i class="fa fa-user"></i> estudiante </a>           
            @else
             <a href="#" class="btn-get-started scrollto" data-toggle="modal" data-target="#login" class="btn btn-danger btn-sm " > 
             <i class="fa fa-user"></i> Iniciar Sesión </a>
             @endif


        <!--a href="#about" class="btn-get-started scrollto">Iniciar Sesión</a-->
        <a href="https://www.youtube.com/watch?v=XTQVf1PaicQ" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>¿Qué es SITPRE?</span></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Team Section ======= -->
    <!--section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Equipo</h2>
          <h3>Equipo de <span>Desarrollo</span></h3>
        </div>

        <div class="row">

          <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="public/assets/assets/img/team/marco.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.linkedin.com/in/marco-antonio-adarme-j-114723115/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Marco Adarme</h4>
                <span>Director y Analista</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="public/assets/assets/img/team/Andres.jpg" class="img-fluid" alt="">
               <div class="social">
              <a href="https://www.linkedin.com/in/andr%C3%A9s-orlando-orduz-grimaldo-b33658114/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Andres Grimaldo</h4>
                <span>Desarrollador SITPRE 1.0</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="public/assets/assets/img/team/jair.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=" https://www.linkedin.com/in/jose-jair-llanes-avellaneda-39b4771b2"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>
                  Jair Llanes </h4>
                <span>Desarrollador SITPRE 1.0</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="public/assets/assets/img/team/wilson.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.linkedin.com/in/wilson-fernandez-1a481a214/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Wilson Fernandez</h4>
                <span>Desarrollador SITPRE 2.0</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="public/assets/assets/img/team/jhonata.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.linkedin.com/in/jhonatan-ramirez-a25168193"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Jhonatan Ramirez</h4>
                <span>Desarrollador SITPRE 2.0</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section --><!-- End Team Section -->

<!----------Modal para crear los docentes-------------->
         
<div id="create" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade bd-example-modal-lg">
      <div role="document" class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true" >×</span></button>
          </div>
          <div class="modal-body p-4 p-lg-5">
            <div class="form-group" >
              <h2 align="Center">Bienvenido a <strong>SITPRE</strong></h2>
              <h4 align="Center">*Recuerde que si no es docente su usuario no sera activado</h4>
              <form action="{{ url('crear_usuario') }}"  method="post" id="f_editar_usuario"  class="formentrada"  >
                
        <div class="modal-body">
        <div class="form-group">
              <label for="name">Nombre y Apellidos*</label>
               <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                <input type="hidden" name="id_docente" id="id_docente"> 
              <input type="text" class="form-control" name="name" id="name"  required>
            </div>
          <div class="form-group">
              <label for="email">Email*</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Guardar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          
        </div>
      </form></div>
         </div>
        </div>
      </div>
    </div>
            <!--------------------------------->
   <!-- Login Modal-->
    <div id="login" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade bd-example-modal-lg">
      <div role="document" class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true" >×</span></button>
          </div>
          <div class="modal-body p-4 p-lg-5">
            <div class="form-group" align="Center">
              <h2>Bienvenido a <strong>SITPRE</strong></h2>
              <img src="img/logo2.svg" width="300" height="200" align="Center">
              <h4>SISTEMA PARA EL MANEJO DE LAS TERCERAS NOTAS</h4>
                
              <a href="{{ url('homew/google') }}" class="btn btn-danger"><i class="fa fa-google-plus"></i> Iniciar Sesión con Google</a>
               </div>
         </div>
        </div>
      </div>
    </div>
   <!----------------------------------------------------------------->




  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/lightbox2/js/lightbox.js"></script>
    <script src="js/front.js"></script>
     <script language="javascript">
    $('div.flash-message').delay(5000).slideUp(300);
     </script>

  <!-- Vendor JS Files -->
  <script src="public/assets/assets/vendor/aos/aos.js"></script>
  <script src="public/assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/assets/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="public/assets/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="public/assets/assets/vendor/php-email-form/validate.js"></script>
  <script src="public/assets/assets/vendor/purecounter/purecounter.js"></script>
  <script src="public/assets/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="public/assets/assets/vendor/waypoints/noframework.waypoints.js"></script>


  <!-- Template Main JS File -->
  <script src="public/assets/assets/js/main.js"></script>



</body>

</html>