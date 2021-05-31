<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SITPRE - Manejo de terceros previos</title>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
     <!-- Favicon-->
    <link rel="shortcut icon" href="../img/favicon1.png">
       <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.css" rel="stylesheet">   
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <a  href="/teacher">
            <img src="../img/logo3.svg"  class="site_title">
            </a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ auth()->user()->avatar }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h6 style="color:black">{{ auth()->user()->name }}</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">              
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-book"></i> Materia <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url("listado_materias")}}">Administrar Materias</a></li>
                    </ul>
                  </li>
                   <li><a href="{{ url("video")}}"><i class="fa fa-youtube-play "></i>  Ayuda<span class="label label-danger pull-right">Tutorial</span></a></li>              
                </ul>
              </div>         
            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">  
              <a data-toggle="tooltip" data-placement="top" title="cerrar sesión" href="{{ url('homew/google/logout') }}" 
              style="width:100%;color:white">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
       <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars" style="color:white"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
          
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
                    <li class="">
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
                  </div>
                </div>
              </div>
            </div>
            <!--------------------------------->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                            <h2>Administrar Materias</h2>
 <!----------------------------------Mensaje de alertas------------------------------------------------>
                      <div class="flash-message">
                      @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                      @endforeach
                    </div>
<!---------------------------------tabla de datos de la hoja de excel------------------------------------>           
<div class="x_content table-responsive">            
<!---------------------------------formulario de filtro de tabla-----------------------------------------> 
              <div class="row content">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h3 style="text-align: center;" >Filtro de tabla</h3>
                  <form action="#" class="formentrada">
                    <div class="form-group">
                      <div >
                        <div class=" col-lg-4 col-md-6 col-sm-12" >
                         <label data-toggle="tooltip" data-placement="top" title="Actividades de Tercera nota" >Item</label>
                         <select class="form-control" id="itemMateria" name="itemMateria"> 
                          <option  size="100%" value=""> Mostrar Todo </option>
                         <@for($i= 4; $i<count($encabezado);$i++)
                            <option size="100%" value="{{$i}}">{{$encabezado[$i]}}</option>
                          @endfor
                         </select>
                        </div>
                        <div class=" col-lg-4 col-md-6 col-sm-12" >
                         <label data-toggle="tooltip" data-placement="top" title="Calificacion Menor" >Intervalo Menor</label>
                          <input id="min" name="min"  size="100%" class="form-control" type="number" step="0.1" min="0" max="5" placeholder="0"></input>
                        </div>
                        <div class=" col-lg-4 col-md-6 col-sm-12" >
                         <label data-toggle="tooltip" data-placement="top" title="Calificacion Mayor" >Intervalo Mayor</label>
                          <input  id="max" name="max" size="100%" class="form-control" type="number" step="0.1" min="0" max="5" placeholder="5"></input>
                        </div>
                          </div>     
                       </div>
                      </form>
                   </div>
                 </div>
        <br>
<!---------------------------------fin de filtro------------------------------------>
<div class="x_content">
     <table id="tabla_de_miembros"  class="table table-striped table-bordered table align-middle table table-hover " style="width:50%" align="center">
          <thead width="130px">
               <tr>
                  @for ($i =0; $i<count($encabezado) ; $i++) 
                     <th style="text-align: center;" ><a>{{$encabezado[$i]}}</a></th>
                            @endfor
                      <th style="text-align: center;" ><a>Acciones</a></th>
               </tr>
          </thead>
      
            <tbody>  
            @foreach($listado2 as $fila)
             @if(!empty($fila[$encabezado[0]]))                    
              <tr>                  
                    @for($j=0;$j<count($encabezado);$j++)
                      
                   @if($j>3)
                        @if($fila[$encabezado[$j]]=="")
                        <td style="text-align: center;" >N/A</td>
                        @elseif($fila[$encabezado[$j]] >= "0" && $fila[$encabezado[$j]] < "3")
                        <td style="color: red;text-align: center;" ><strong>{{ $fila[$encabezado[$j]]  }}</strong></td>
                        @elseif($fila[$encabezado[$j]] >= "3" && $fila[$encabezado[$j]] <"4,5")
                        <td style="color: #e8a010;text-align: center;" > <strong>{{ $fila[$encabezado[$j]]  }}</strong></td>
                        @else   
                        <td style="color: green;text-align: center;"><strong>{{ $fila[$encabezado[$j]]  }}</strong></td>
                        @endif
            @else
                        <td style="text-align: center;">  {{$fila[$encabezado[$j]]}} </td>
            @endif
                     @endfor 
            @else  
                      @break 
                       @endif                  
                        <td style="text-align: center;">
                        <button class="btn btn-xs btn-danger" data-toggle="modal" data-placement="right" title="Realiza un comentario sobre la nota obsevada." data-placement="top"  title="Editar Materia" data-target="#comentario">
                        <i class="fa fa-eye" aria-hidden="true"> Detalle </i>
                        </button>
                </tr>  
               
                  @endforeach              
                </tbody>
                    
      </table>   
              </div>
              </div>
             </div>
           </div> 
         </div>
        </div>
        </div>
        <!-- fin tabla notas -->                     
        <!-- /page content -->
        <!-- footer content -->
        <footer>
          <div class="pull-right">
             UFPS - Universidad Fransisco de Paula Santander <i class="fa fa-copyright" aria-hidden="true">{{date('Y')}}</i>
         </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

     <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
   

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



<script type="text/javascript">
      $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
    </script>

<script type="text/javascript">
/* Custom filtering function which will search data in column four between two values */
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
      

        var min = parseFloat( $('#min').val(), 0);
        var max = parseFloat( $('#max').val(), 0 );
        var e = document.getElementById("itemMateria");
        var strUser = e.value;
        console.log("el valor de la posción es: "+strUser+" min "+ min + "max" + max);

        var note = data[strUser].replace(",",".") || 0; // use data for the note column
        console.log("note: "+data[strUser]);

        //var noteconsul = note.replace(',', '.');
        // var minimo =min.replace(',', '.');
        // var maximo =max.replace(',', '.');

        if ( ( isNaN( min ) && isNaN( max ) ) ||
             ( isNaN( min ) && note <= max ) ||
             ( min <= note   && isNaN( max ) ) ||
             ( min <= note   && note <= max ) )
        {
            return true;
        }
        return false;
    }
);
 
$(document).ready(function() {
    var table = $('#tabla_de_miembros').DataTable();
     
    // Event listener to the two range filtering inputs to redraw on input
    $('#min, #max').keyup( function() {
        table.draw();
    } );
} );
    </script>


  </body>
</html>
