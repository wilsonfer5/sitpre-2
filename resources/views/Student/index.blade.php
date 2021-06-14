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

    <!-- Custom Theme Style -->
    <link href="build/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">

        <!-- top navigation -->
        <div class="profile clearfix" >
          <div class="nav_menu">
            <nav>
              <div class="navbar nav_title" style="border: 0;">
            <a  href="student">
            <img src="img/logo3.svg"  class="site_title">
            </a>
            </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="" >
                  <a  class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false" 
                  style="color:white;">
                    <img src="{{ auth()->user()->avatar }}" alt="">{{ auth()->user()->name }}
                    <span class=" fa fa-angle-down" style="color:white"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a target="_blank" href="ManuaEstudiante-SITPRE.pdf">
                      <i class="fa fa-book pull-right"></i> Manual</a></li>
                    <li><a href="{{ url('homew/google/logout') }}"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
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
                  <div class="x_title">

                
                    <h3 align="center" ><strong> SITPRE - </strong>Sistema de información para el manejo de terceros previos -
                    </h3>
                   
                    
                     <!----------Mensaje de error------------------>
              <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                  @if(Session::has('alert-' . $msg))
                  <p align="center" class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                  @endif
                @endforeach
               </div>
             <!-------------------------------------------->
                   

  <!-- tabla lista de materias --> 
           <div class="x_content">
             <table id="tabla_de_miembros" class="table table-striped table-bordered">
               <thead>
                 <tr>
                   <th>Codigo</th>
                   <th>Nombre</th>
                   <!--th>Docente</th-->
                   <th>Acción</th>
                 </tr>
             </thead>
             <tbody>
               @foreach ($listado as $fila)
               <tr>
                <td>{{$fila->code}}</td>
                <td>{{$fila->name}}</td>
                <!--td>{{$fila->user_id}}</td-->
                <td><a href="{{url("nota_materia/$fila->id")}}" class="btn btn-xs btn-danger fa fa-eye" data-toggle="tooltip" data-placement="top" title="Ver Detalle"></a></td>
               </tr>
               @endforeach
             </tbody>
             </table>
           </div>



        <!-- tabla lista de materias -->





                    <div class="clearfix"></div>
                  </div>
                  <!--div class="x_content">
                      <img src="img/logo2.svg"  class="site_home">
                  </div-->
               </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<div class="modal fade" id="politicas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel">Politicas de USO</h4>
      </div>
       <form action="{{ url('politicas') }}"  method="post" id="f_editar_usuario"  class="formentrada"  >
                
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


        <!-- footer content -->
        <footer>
          <div class="pull-right">
            UFPS - Universidad Fransisco de Paula Santander <i class="fa fa-copyright" aria-hidden="true"> <?php  echo date('Y')  ?>  </i>
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


    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>


    <script type="text/javascript">
      var poli= '<?php echo(auth()->user()->politicas)?>';
      //console.log(poli == undefined || poli == 0);
      if((typeof poli == undefined)||(poli == 0)||(poli == " ")){
        $('#politicas').modal();

      }


    </script>

<script language="javascript">
    $('#tabla_de_miembros').DataTable({
      info:false,
      language: {
        "decimal": "",
        "emptyTable": "No hay información para mostrar",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Paginación _MENU_ ",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "No se encontraron resultados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
        
        }

    });

    $('div.flash-message').delay(8000).slideUp(300);
  </script>

  <!--script>
    $('div.flash-message').delay(10000).slideUp(300);
	</script-->
<script type="text/javascript">
      $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
    </script>

  </body>
</html>
