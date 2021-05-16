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
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">

     <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon1.png">

    
       <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.css" rel="stylesheet">
    
  </head>

  <body class="nav-md">
 
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <a  href="/teacher">
            <img src="img/logo3.svg"  class="site_title">
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
                  <a  class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false" 
                  style="color:white;">
                    <img src="{{ auth()->user()->avatar }}" alt="">{{ auth()->user()->name }}
                    <span class=" fa fa-angle-down" style="color:white"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">Help</a></li>
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
                  
                  </div>
                </div>
              </div>
            </div>


            <!----------Modal para editar las materias-------------->
         


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Materia</h4>
      </div>
      
       <form action="{{ url('editar_materia') }}"  method="post" id="f_editar_usuario"  class="formentrada"  >
                
	      <div class="modal-body">
	      <div class="form-group">
		        	<label for="name">Nombre Materia*</label>
               <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                <input type="hidden" name="id_materia" id="id_materia"> 
		        	<input type="text" class="form-control" name="name" id="name"  required>
	        	</div>
          <div class="form-group">
		        	<label for="code">Codigo Materia*</label>
		        	<input type="number" class="form-control" name="code" id="code" required>
	        	</div>
            <div class="form-group">
		        	<label for="code">Grupo Materia*</label>
		        	<select class="form-control"  name="group" id="group" required>
              <option>A</option>
              <option>B</option>
              <option>C</option>
              <option>D</option>
              <option>E</option>
              <option>F</option>
              <option>G</option>
              <option>H</option>
              <option>I</option>
              <option>J</option>
              <option>K</option>
              <option>L</option>
              <option>M</option>
              <option>N</option>
              <option>Ñ</option>
              <option>O</option>
              <option>P</option>
              <option>Q</option>
              <option>R</option>
              <option>S</option>
              <option>T</option>
              <option>U</option>
              <option>V</option>
              <option>W</option>
              <option>X</option>
              <option>Y</option>
              <option>Z</option>
              </select>
	        	</div>
            <div class="form-group">
		        	<label for="name">Url Drive*</label>
              <input type="text" class="form-control" name="url_drive" id="url_drive"  required>
	        	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-danger">Guardar Cambios</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	        
	      </div>
      </form>
    </div>
  </div>
</div>
            <!--------------------------------->


<!----------Modal para crear las materias-------------->
         


<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crear Materia</h4>
      </div>
       <form action="{{ url('crear_materia') }}"  method="post" id="f_editar_usuario"  class="formentrada"  >
                
	      <div class="modal-body">
	      <div class="form-group">
		        	<label for="name">Nombre Materia*</label>
               <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                <input type="hidden" name="id_subjects" id="id_subjects"> 
		        	<input type="text" class="form-control" name="name" id="name"  required>
	        	</div>
          <div class="form-group">
		        	<label for="code">Codigo Materia*</label>
		        	<input type="number" class="form-control" name="code" id="code" required>
              
	        	</div>
            <div class="form-group">
		        	<label for="group">Grupo Materia*</label>
		        	<select class="form-control" name="group" id="group" required>
              <option>A</option>
              <option>B</option>
              <option>C</option>
              <option>D</option>
              <option>E</option>
              <option>F</option>
              <option>G</option>
              <option>H</option>
              <option>I</option>
              <option>J</option>
              <option>K</option>
              <option>L</option>
              <option>M</option>
              <option>N</option>
              <option>Ñ</option>
              <option>O</option>
              <option>P</option>
              <option>Q</option>
              <option>R</option>
              <option>S</option>
              <option>T</option>
              <option>U</option>
              <option>V</option>
              <option>W</option>
              <option>X</option>
              <option>Y</option>
              <option>Z</option>
              </select>
	        	</div>
            <div class="form-group">
		        	<label for="name">Url Drive*</label>
              <input type="text" class="form-control" name="url_drive" id="url_drive"  required>
	        	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-danger">Guardar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	        
	      </div>
      </form>
    </div>
  </div>
</div>
            <!--------------------------------->



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
          
<!------------------------------------------------------------------------------------------------------>
                  <div class="x_content">
                  <button class="btn btn-xs btn-danger"  data-toggle="modal" data-target="#create">Nueva Materia
                       <i class="fa fa-plus" aria-hidden="true"></i>
                       </button>
                    <table id="tabla_de_miembros" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <!--th><a > Id</a>  </th-->
                          <th><a> Codigo Materia</a> </th>
		                      <th><a> Nombre</a> </th>
                          <th><a> Url Drive</a> </th>
                           <th><a>Accion</a></th>
		                    </tr>
                      </thead>


                      <tbody>
               @foreach($listado as $fila)

                <tr>
                       <!--td>{{ $fila->id  }}</td-->
                       <td>{{ $fila->code }}</td>
                       <td>{{ $fila->name }}</td>
                       <td><a href={{ $fila->url_drive }} target="_blank">URL</a></td>
                       <td> 
                        <!-- Editar -->
                        <button class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Editar Materia" data-name="{{$fila->name}}" data-code="{{$fila->code}}"data-url_drive="{{$fila->url_drive}}" data-id_materia="{{$fila->id}}" data-toggle="modal" data-target="#edit">
                       <i class="fa fa-edit" aria-hidden="true"></i>
                       </button>
                        <!-- revisar -->
                       <a href=""  class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Detalle Materia" >
                       <i class="fa fa-eye" aria-hidden="true"></i>
                       </a>
                        <!-- Eliminar -->
                       <a href="{{url("eliminar_materia/$fila->id")}}" onclick="return confirm('¿Esta seguro de eliminar la materia?')" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar Materia" >
                       <i class="fa fa-trash" aria-hidden="true"></i>
                       </a>
                        <!-- Notificar -->
                        <a href="" onclick="return confirm('¿Esta seguro de notificar a los Estudiantes de la materia la carga sus  notas?')" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Notificar Estudiantes">
                       <i class="fa fa-mail-reply-all" aria-hidden="true"></i>
                       </a>

									     
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
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
             UFPS - Universidad Fransisco de Paula Santander <i class="fa fa-copyright" aria-hidden="true">2019</i>
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


  <script>
  
  $('#edit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
      var name = button.data('name') 
      var code = button.data('code') 
      var id_subjects = button.data('id_materia') 
      var url_drive = button.data('url_drive') 
      var group=button.data('group')
      
      var grupo = code.split('-');
      
        
      var modal = $(this)
      modal.find('.modal-body #name').val(name);
      modal.find('.modal-body #code').val(grupo[0]);
      modal.find('.modal-body #group').val(grupo[1]);
      modal.find('.modal-body #url_drive').val(url_drive);
      modal.find('.modal-body #id_materia').val(id_subjects);
})

 
</script>

<script type="text/javascript">
      $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
    </script>
  </body>
</html>
