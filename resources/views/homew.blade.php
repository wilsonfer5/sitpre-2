<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SITPRE - Manejo de terceros previos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600">
    <!-- Lightbox-->
    <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.css">
    <!-- Custom font icons-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon1.png">


    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top" >
        <div class="container"><a href="./" class="navbar-brand"><img src="img/logo3.svg" alt="" class="img-fluid"></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right" style="color:white">Menu<i class="fa fa-bars ml-2"></i></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                  <!-- Link-->
                  <li class="nav-item" > <a href="./" class="nav-link"  >HOME</a></li>
                  <li class="nav-item" > <a href="index" class="nav-link"  >prueba</a></li>

                  <li class="nav-item"> <a href="https://divisist2.ufps.edu.co" target="_blank" class="nav-link">DIVISIST</a></li>
                  <li class="nav-item"> <a href="https://ww2.ufps.edu.co" target="_blank" class="nav-link" >INSTITUCIONAL</a></li>
                  <li class="nav-item"> <a href="https://ingsistemas.cloud.ufps.edu.co" target="_blank" class="nav-link" >PROGRAMA ACADEMICO</a></li>
                  @if (Auth::check()==null)
                  <li class="nav-item"> <a href="#" data-toggle="modal" data-target="#create" class="nav-link" ><i class="fa fa-user-plus"></i> REGISTRATE DOCENTE</a></li>
                  @endif
                  <!-- Link-->
                                  
            </ul>
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
             <a href="#" data-toggle="modal" data-target="#login" class="btn btn-danger btn-sm " > 
             <i class="fa fa-user"></i> Iniciar Sesión </a>

             @endif
          </div>
        </div>
      </nav>
    </header>
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
          
    <!-- Divider Section-->
    <section>
      <div class="container">
      <!------------------------Mensaje---------------------------------->
       <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
              @if(Session::has('alert-' . $msg))
              <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
              @endif
            @endforeach
          </div>
    <!---------------------------------------------------------->
       
        <div class="row">
        
            <div class="col-lg-8 mb-5 mb-lg-0" >
            
           <img src="./img/logo_sistemas.png" width="90%"  alt="Logo Ingeniera de Sistemas" >
            </div>
            <div class="col-lg-4">
           <img src="./img/logo_ufps.png"  alt="Logo  UFPS">
            </div>
          </div>
      </div>
    </section>
  

  <section class="extra">
      <div class="container">
        <div class="text-center">
          <h2>Ventajas</h2>
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <p class="lead text-muted mt-2">Sistema de información para el manejo terceras notas.</p>
            </div>
          </div>
        </div>
        <div class="integrations mt-5">
          <div class="row">
       
            <div class="col-lg-4">
              <div class="box text-center">
                <div class="icon d-flex align-items-end"><img src="img/pen.svg" alt="..." class="img-fluid"></div>
                <h3 class="h4">Manejo Confidencial de notas</h3>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box text-center">
                <div class="icon d-flex align-items-end"><img src="img/chat.svg" alt="..." class="img-fluid"></div>
                <h3 class="h4">Seguridad de información</h3>
               </div>
            </div>
            <div class="col-lg-4">
              <div class="box text-center">
                <div class="icon d-flex align-items-end"><img src="img/idea.svg" alt="..." class="img-fluid"></div>
                <h3 class="h4">Consula de notas</h3>
              </div>
            </div>
          </div>
    </section>

  <section class="extra">
  <h1 align="center">Estructura de la plantilla</h1>
  <div class="video-responsive">
  <video width="100%" height="auto" controls>
                    <source src="SITPRE_DOCENTE.mp4" type="video/mp4">
                </video>
  </div>

  </section>
    
    
    <footer class="main-footer" >
      <div class="container">
        <div class="row">
          <div class="col-lg-3 mb-5 mb-lg-0">
            <div class="footer-logo"><img src="img/logo3.svg" alt="..." class="img-fluid"></div>
          </div>
          <div class="col-lg-2 mb-5 mb-lg-0">
            <h5 class="footer-heading">Páginas</h5>
            
            
           <div class="col-ms-2">
               <a href="./" class="footer-link"  >HOME</a>
          </div>
          <div class="col-ms-2">
             <a href="https://divisist2.ufps.edu.co" target="_blank" class="footer-link">DIVISIST</a></div>
          <div class="col-ms-2">
           <a href="https://ww2.ufps.edu.co" target="_blank" class="footer-link" >INSTITUCIONAL</a>
          </div>

          <div class="col-ms-2">
          <a href="https://ingsistemas.cloud.ufps.edu.co" target="_blank" class="footer-link" >PROGRAMA ACADEMICO</a></li>
          </div>
         
          </div>
           
          <div class="col-lg-3 mb-5 mb-lg-0">
            <div class="footer-logo"><img src="./img/logo_ufps.png" alt="..." class="img-fluid"></div>
        </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
              <p class="copyrights-text mb-3 mb-lg-0">&copy; Todos los derechos reservados. UFPS.</p>
              
            </div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="list-inline social mb-0">
                <li class="list-inline-item"><a href="https://www.facebook.com/Ufps.edu.co/" target="_blank" class="social-link"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/UFPSCUCUTA" target="_blank" class="social-link"><i class="fa fa-twitter"></i></a><a href="https://www.youtube.com/channel/UCgPz-qqaAk4lbHfr0XH3k2g" target="_blank" class="social-link"><i class="fa fa-youtube-play"></i></a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>


  
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/lightbox2/js/lightbox.js"></script>
    <script src="js/front.js"></script>
     <script language="javascript">
    $('div.flash-message').delay(5000).slideUp(300);
     </script>
  </body>
</html>