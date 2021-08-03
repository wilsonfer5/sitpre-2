<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>SITPRE - Manejo de terceros notas</title>

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
 

       <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="navbar nav_title" style="border: 0;">
            <a  href="{{url('teacher')}}">
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
                  <li class="">
                <a class=" dropdown-toggle" data-toggle="dropdown" aria-expanded="false" ><i class="fa fa-thumbs-up "></i> Manuales <span class=" fa fa-angle-down" ></span></a>
                <ul class="dropdown-menu  pull-right" >
              <li><a target="_blank" href="{{url('ManuaDoc-google-sheets-SITPRE.pdf')}}"><i class="fa fa-file pull-right"></i>Crear Google Sheets </a></li>
              <li><a target="_blank" href="{{url('ManuaDocente-SITPRE.pdf')}}"><i class="fa fa-file pull-right"></i>Guia Docente</a></li><li><a target="_blank" href="https://docs.google.com/spreadsheets/d/15yoJh8hKivyu_mrB-fn90dd4J7z4gN02BZ9OcwXn0HI/edit?usp=sharing"><i class="fa fa-link pull-right"></i>Formato Goolge Sheets</a></li> 
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
              <label for="group"> Tipo</label>
              <select class="form-control" name="tipo" id="tipo" required>
                <option>Previo 1</option>
                <option>Previo 2</option>
                <option>Tercera Nota</option>
                <option>Examen Final</option>
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
              <label for="group"> Tipo</label>
              <select class="form-control" name="tipo" id="tipo" required>
                <option>Previo 1</option>
                <option>Previo 2</option>
                <option>Tercera Nota</option>
                <option>Examen Final</option>
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

<!----------Modal para notificar a los estudiantes la carga de la materia-------------->
         

<div class="modal fade" id="notificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Notificar Estudiantes</h4>
      </div>
       <form action="{{url('notificar_estudiantes')}}"  method="post" id="f_editar_usuario"  class="formentrada"  >
                
        <div class="modal-body">
            <div class="form-group">   
            <div class="input-group ">
              <div class="col-lg-6 col-md-6 col-sm-6">
              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
              <input type="hidden" class="form-control" name="murl" id="murl" >
                </div>
            </div>
                </div>
        <div class="form-group ">
          <div class="input-group ">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <label for="item">Materia</label>
              <input type="text" size="100%" readonly="readonly" class="form-control " name="mat" id="mat"  required>
              </div>
              <div class=" col-lg-6 col-md-6 col-sm-6" >
              <label for="nota">Código</label>
              <input type="text" size="100%" readonly="readonly" class="form-control " name="cod" id="cod"  required>
                </div>
            </div>
          </div>
              <div class="form-group">
                <input type="hidden" class="form-control" name="userurl" id="userurl" > 
              <label for="coment">Comentario</label>
              <textarea  class="form-control " name="coment" id="coment" cols="25" rows="10"  required > </textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Notificar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </form>
    </div>
  </div>
</div>
            <!--------------------------------->

<!----------Modal para crear las materias-------------->
         


<div class="modal fade" id="create2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Tipo Nota</h4>
      </div>
       <form action="{{ url('crear_materia') }}"  method="post" id="f_editar_usuario"  class="formentrada"  >
                
        <div class="modal-body">
        <div class="form-group">
              <label for="name">Nombre Materia*</label>
               <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                <input type="hidden" name="id_subjects" id="id_subjects" readonly> 
              <input type="text" class="form-control" name="name" id="name"  required readonly>
            </div>
          <div class="form-group">
              <label for="code">Codigo Materia*</label>
              <input type="number" class="form-control" name="code" id="code" required readonly>
              
            </div>
            <div class="form-group">
              <label for="group">Grupo Materia*</label>
              <select class="form-control" name="group" id="group" required readonly >
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
              <label for="group"> Tipo</label>
              <select class="form-control" name="tipo" id="tipo" required>
                <option>Previo 1</option>
                <option>Previo 2</option>
                <option>Tercera Nota</option>
                <option>Examen Final</option>
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


     
            <div class="">
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
                          <th style="text-transform: uppercase;"><a> Codigo Materia</a> </th>
		                      <th style="text-transform: uppercase;"><a> Nombre</a> </th>
                           <th style="text-transform: uppercase;"><a> Tipo</a> </th>
                          <th style="text-transform: uppercase;"><a> Url Drive</a> </th>
                           <th style="text-transform: uppercase;"><a>Accion</a></th>
		                    </tr>
                      </thead>


                      <tbody>
               @foreach($listado as $fila)

                <tr>
                       <!--td>{{ $fila->id  }}</td-->
                       <td>{{ $fila->code }}</td>
                       <td style="text-transform: uppercase;" >{{ $fila->name }}</td>
                       <td style="text-transform: uppercase;" >{{ $fila->type }}</td>
                       <td><a href="{{ $fila->url_drive }}" target="_blank">URL</a></td>
                       <td> 
                        <!-- Editar -->
                        <button class="btn btn-xs btn-danger"  data-placement="top" title="Editar Materia" data-name="{{$fila->name}}" data-code="{{$fila->code}}"data-url_drive="{{$fila->url_drive}}" data-tipo='{{$fila->type}}'
                          data-id_materia="{{$fila->id}}" data-toggle="modal" data-target="#edit">
                       <i class="fa fa-edit" aria-hidden="true"></i>
                       </button>
                        <!-- detalles -->
                       <a href="{{url("detalle_materia/$fila->id")}}"  class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Detalle Materia" >
                       <i class="fa fa-eye" aria-hidden="true"></i>
                       </a>
                        <!-- Eliminar -->
                       <a href="{{url("eliminar_materia/$fila->id")}}" onclick="return confirm('¿Esta seguro de eliminar la materia?')" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar Materia" >
                       <i class="fa fa-trash" aria-hidden="true"></i>
                       </a>
                        <!-- Notificar -->
                        <a href="" class="btn btn-xs btn-danger" data-toggle="modal" data-placement="top" title="Notificar Estudiantes" data-target="#notificar" 
                        data-userurl="{{request()->url()}}"
                        data-murl="{{$fila->url_drive}}"data-codigo="{{ $fila->code }}" data-nomm="{{ $fila->name }}">
                       <i class="fa fa-mail-reply-all" aria-hidden="true"></i>
                       </a>
                       <button class="btn btn-xs btn-danger"  data-placement="top" title="Agregar Tipo Nota" data-name="{{$fila->name}}" data-code="{{$fila->code}}"data-id_materia="{{$fila->id}}" data-toggle="modal" data-target="#create2">
                       <i class="fa fa-plus-circle" aria-hidden="true"></i>
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
        "search": "Buscar Materia:",
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
      var tipo = button.data('tipo')

      var url_drive = button.data('url_drive') 
      var group=button.data('group')
      
      var grupo = code.split('-');
      
        
      var modal = $(this)
      modal.find('.modal-body #name').val(name);
      modal.find('.modal-body #code').val(grupo[0]);
      modal.find('.modal-body #group').val(grupo[1]);
      modal.find('.modal-body #tipo').val(tipo);
      modal.find('.modal-body #url_drive').val(url_drive);
      modal.find('.modal-body #id_materia').val(id_subjects);
})

 
</script>

<script>
  
  $('#create2').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
      var name = button.data('name') 
      var code = button.data('code') 
      var id_subjects = button.data('id_materia')

      var group=button.data('group')
      
      var grupo = code.split('-');
      
        
      var modal = $(this)
      modal.find('.modal-body #name').val(name);
      modal.find('.modal-body #code').val(grupo[0]);
      modal.find('.modal-body #group').val(grupo[1]);
      modal.find('.modal-body #id_materia').val(id_subjects);
})

 
</script>

<script>
  
  $('#notificar').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
      var mate = button.data('nomm'); 
      var codi = button.data('codigo'); 
      var userurl = button.data('userurl');
      var murl= button.data('murl');
      var msm="";
      
        
      var modal = $(this)
      
      modal.find('.modal-body #mat').val(mate);
      modal.find('.modal-body #cod').val(codi);
      modal.find('.modal-body #userurl').val(userurl);
      modal.find('.modal-body #murl').val(murl);
      
     
})

 
</script>

<script type="text/javascript">
      $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
    </script>
  </body>
</html>
