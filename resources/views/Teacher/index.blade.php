<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>SITPRE - Manejo de terceros previos</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon1.png">
    <!-- Google fonts - Poppins-->
    
    <!-- Custom Theme Style -->
    <link href="build/css/custom.css" rel="stylesheet">


  </head>

  <body class="nav-md">
    
               <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="navbar nav_title" style="border: 0;">
            <a  href="teacher">
            <img src="img/logo3.svg"  class="site_title">
            </a>
            </div>

              <ul class="nav navbar-nav ">
                <li class="" >
                  <a  class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="color:white;">
                    <img src="{{ auth()->user()->avatar }}" alt="">{{ auth()->user()->name }}
                    <span class=" fa fa-angle-down" style="color:white"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="{{ url('homew/google/logout') }}"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
                  </ul>
                </li>
                    <li class="" >
                  <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="color:white;">
                    <i class="fa fa-book"></i> Materias <span class="fa fa-chevron-down"></span>
                  </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href="{{ url("listado_materias")}}">Administrar Materias </a></li>
                     </ul>
                  </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                   
                    </span>
                  </div>
                </div>
              </div>
            </div>


            

            <div class="">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                   <h1 align="center" style=" color: #aa1916 ;" ><strong>Bienvenido</strong> </h1>
                  <div class="x_title">
                   
                    <h4 align="center" ><strong> SITPRE - </strong>Sistema de información para el manejo de terceros previos -
                    </h4>
                    
                    <div class="clearfix"></div>

                  </div>

<div class="content-md container">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h3>  ¿Qué es SITPRE?  </h3>
                </div>
            </div>
            <!--// end row -->

        <div class="row">
          <div class=" col-sm-7 sm-margin-b-50">
              <div class="margin-b-30">
                    <br>
                     <p style="font-size: 15px; text-align: justify;">El sistema de información SITPRE, Es una aplicación Web planteada para la gestión, de las terceras notas.
                      </p>
                    </div>
<div class="list-icon no-margin-bottom" >
  <ul>
  <li ><i class="fa fa-check-square-o" ></i> Permitir al docente registrar sus notas por medio de las hojas de cálculo de Google Drive</li>
  <li><i class="fa fa-check-square-o" ></i> Crear un medio seguro y privado donde el estudiante permita visualizar sus notas</li>
  <li><i class="fa fa-check-square-o" ></i> Permite autenticar a los clientes por medio de la cuenta institucional</li>
  
</ul> </div>


 
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="img/logo2.svg"  class="site_home" alt="Our Office">
                </div>
            </div>
            <!--// end row -->
        </div>

<div class="content-md container">
      <div class="row margin-b-20">
          <div class="col-sm-6">
              <h3> Ventajas </h3>
          </div>
      </div>
      <!--// end row -->
<div class="">
<div class=" col-sm-6 ">                 
<div class="list-icon">
  <ul>
  <li> <i class="fa fa-circle"></i> Consultar rápidamente las notas. </li>
  <li>  <i class="fa fa-circle"></i> Con el formato guía de Google Sheet es muy fácil publicar las notas en el orden que desee.</li>
  <li> <i class="fa fa-circle"></i> Permite filtrar a los estudiantes por nota y por rango de nota.</li>
  <li><i class="fa fa-circle"></i> Identifica de forma visual las calificaciones de los estudiantes mediante colores.</li>
</ul> 
</div> 
</div>
<div class="col-sm-6 ">
<div class="list-icon ">              
<ul>
  <li><i class="fa fa-circle"></i> Notificar la carga y publicación de notas via e-mail al estudiante.</li>
  <li><i class="fa fa-circle"></i> Detalla de forma individual o grupal las notas de los estudiantes.</li>
  <li><i class="fa fa-circle"></i> Realizar búsquedas por palabras clave. Búsqueda de una materia o estudiante cargados.</li>
</ul>
   </div>
   </div>
  </div>
            <!--// end row -->
 </div>



<div class="content" align="center" >
  <div id="mexcel" class="col-md-4 col-sm-4 col-xs-12 " > <button class="btn btn-danger" onclick="mexcel()" > <i class="fa fa-book" > Guia formato Google Sheets  </i>   </button> </div>
  <div href="videoprofe" id="vprofe" class="col-md-4 col-sm-4 col-xs-12 " > <button class="btn btn-danger" onclick="mvideo()" > <i class="fa fa-play" > Video Tutorial </i>  </button> </div>
  <div id="mprofe" class="col-md-4 col-sm-4 col-xs-12 " > <button class="btn btn-danger" onclick="mprofe()" > <i class="fa fa-book" > Guia Docente  </i></button> </div>
  
</div>

<div class="x_content " >
  <div class="col-md-12 col-sm-12 col-xs-12" align="center">

  
  <div id="manualexcel" class="col-md-6 col-sm-6 col-xs-12 " align="center" >
    <h3  align="center"> Manual Crear hoja de Google Sheets <a target="_blank" href="https://docs.google.com/spreadsheets/d/15yoJh8hKivyu_mrB-fn90dd4J7z4gN02BZ9OcwXn0HI/edit?usp=sharing">"Ejemplo clic aquí"</a> </h3>
    <a target="_blank" href="ManuaDoc-google-sheets-SITPRE.pdf" align="right"><i class="fa fa-external-link">ver PDF</i></a>
    <embed src="ManuaDoc-google-sheets-SITPRE.pdf" type="application/pdf" width="100%" height="600px" />
  </div>
  <div id="manualprofe" class="col-md-6 col-sm-6 col-xs-12 " align="center" >
    <h3 align="center"> Manual del Docente </h3>
     <a target="_blank" href="ManuaDocente-SITPRE.pdf" align="right"><i class="fa fa-external-link">ver PDF</i></a>
    <embed src="ManuaDocente-SITPRE.pdf" type="application/pdf" width="100%" height="600px" />
  </div>
  <div id="videoprofe" class="content"  align="center"> <h3 align="center"> Video Tutorial </h3>
 <video style="height: 70%; width:60%;" controls>
      <source src="SITPRE_DOCENTE.mp4" type="video/mp4">
    </video></div>
  
  </div>

</div>

<div class="modal fade" id="politicas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel">Politicas de USO</h4>
      </div>
       <form action="{{ url('politicas_teacher') }}"  method="post" id="f_editar_usuario"  class="formentrada"  >
                
        <div class="modal-body">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div> <h1> Terminos y Condiciones SITPRE</h1></div> 

            <div>
               <p>
              Para el uso de la plataforma SITPRE debes aceptar las políticas de tratamiento y privacidad de datos.
               </p>
            </div>
            <div> 
              <p>puedes revisar</p><a target="_blank" href="Politicas SITPRE.pdf">Políticas!</a></div>
              
        </div>
        <div class="modal-footer">
          <label>He leído y acepto los términos y condiciones. </label>
          <button type="submit" class="btn btn-danger">Aceptar</button>
          <!--button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button-->
        </div>
      </form>
    </div>
  </div>
</div>
            <!--------------------------------->

                  <!--div class="x_content">
                      <img src="img/logo2.svg"  class="site_home">
                  </div-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            UFPS - Universidad Fransisco de Paula Santander <i class="fa fa-copyright" aria-hidden="true"> <?php  echo date('Y')   ?> </i>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

    <script type="text/javascript">
      var poli= '<?php echo(auth()->user()->politicas)?>';
      //console.log(poli == undefined || poli == 0);
      if((typeof poli == undefined)||(poli == 0)||(poli == " ")){
        $('#politicas').modal();

      }
    </script>

    <script>

var x = document.getElementById("manualexcel");
var y = document.getElementById("videoprofe");
var z = document.getElementById("manualprofe");
x.style.display="none";  
y.style.display="none";  
z.style.display="none";  

function mexcel(){
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";

  } else {
    x.style.display = "none";
  }
}

function mvideo() {
  
  if (y.style.display === "none") {
    y.style.display = "block";
    x.style.display = "none";
    z.style.display = "none";
  } else {
    y.style.display = "none";
  }
}

  function mprofe() {
  
  if (z.style.display === "none") {
    z.style.display = "block";
    x.style.display = "none";
    y.style.display = "none";

  } else {
    z.style.display = "none";
  }

}
</script>
  </body>
</html>
