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
    <!--div class="container body">
      <!--div class="main_container">
        <!--div class="col-md-3 left_col">
          <!--div class="left_col scroll-view">
            <!--div class="navbar nav_title" style="border: 0;">
            <a  href="/student">
            <img src="img/logo3.svg"  class="site_title">
            </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <!--div class="profile clearfix">
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

            <!--br />

          <!-- sidebar menu -->
            <!--div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
               
                <ul class="nav side-menu">
              
                <!--------------------------------A-D-------------------------------------   -->
                <!--li><a><i class="fa  fa-bullseye"></i> A-D <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                @php
                $count = 0;
                @endphp
                @foreach($listado as $fila)
               
                @if (Str::startsWith($fila->name,'A')||Str::startsWith($fila->name,'a')||
                Str::startsWith($fila->name,'B')||Str::startsWith($fila->name,'b')||
                Str::startsWith($fila->name,'C')||Str::startsWith($fila->name,'c')||
                Str::startsWith($fila->name,'D')||Str::startsWith($fila->name,'d'))
                
                <li><a href="{{url("nota_materia/$fila->id")}}">{{$fila->code}} {{$fila->name}}</a></li>
                @if($count == 4)
                <li><a href="{{url("nota_materia_listado/1")}}">Ver mas...</i></a></li>
                @endif
                @break($count == 4)

                @php
                $count++;
                @endphp
                @endif
                @endforeach
                
                   </ul>
                  </li>
                <!------------------------------------------------------------------------------->
                 <!--------------------------------E-H--------------------------------------->
                <!--li><a><i class="fa  fa-bullseye"></i> E-H <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                @php
                $count1 = 0;
                @endphp
                 @foreach($listado as $fila)
                @if (Str::startsWith($fila->name,'E')||Str::startsWith($fila->name,'e')||
                Str::startsWith($fila->name,'F')||Str::startsWith($fila->name,'f')||
                Str::startsWith($fila->name,'G')||Str::startsWith($fila->name,'g')||
                Str::startsWith($fila->name,'H')||Str::startsWith($fila->name,'h'))
                <li><a href="{{url("nota_materia/$fila->id")}}">{{$fila->code}} {{$fila->name}}</a></li>

                @if($count1 == 4)
                <li><a href="{{url("nota_materia_listado/2")}}">Ver mas...</i></a></li>
                @endif
                @break($count1 == 4)

                @php
                $count1++;
                @endphp
                @endif
                @endforeach
               
               
                   </ul>
                  </li>
                <!------------------------------------------------------------------------------->
                 <!--------------------------------I-L--------------------------------------->
                <!--li><a><i class="fa  fa-bullseye"></i> I-L <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                @php
                $count2 = 0;
                @endphp
                 @foreach($listado as $fila)
                @if (Str::startsWith($fila->name,'I')||Str::startsWith($fila->name,'i')||
                Str::startsWith($fila->name,'J')||Str::startsWith($fila->name,'j')||
                Str::startsWith($fila->name,'K')||Str::startsWith($fila->name,'k')||
                Str::startsWith($fila->name,'L')||Str::startsWith($fila->name,'l'))
                <li><a href="{{url("nota_materia/$fila->id")}}">{{$fila->code}} {{$fila->name}}</a></li>
                
                @if($count2 == 4)
                <li><a href="{{url("nota_materia_listado/3")}}">Ver mas...</i></a></li>
                @endif
                @break($count2 == 4)

                @php
                $count2++;
                @endphp
                @endif
                @endforeach
                
               
                   </ul>
                  </li>
                <!------------------------------------------------------------------------------->
                   <!--------------------------------M-O--------------------------------------->
                <!--li><a><i class="fa  fa-bullseye"></i> M-O <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                @php
                $count3 = 0;
                @endphp
                 @foreach($listado as $fila)
                @if (Str::startsWith($fila->name,'M')||Str::startsWith($fila->name,'m')||
                Str::startsWith($fila->name,'N')||Str::startsWith($fila->name,'n')||
                Str::startsWith($fila->name,'Ñ')||Str::startsWith($fila->name,'ñ')||
                Str::startsWith($fila->name,'O')||Str::startsWith($fila->name,'o'))
                <li><a href="{{url("nota_materia/$fila->id")}}">{{$fila->code}} {{$fila->name}}</a></li>

                @if($count3 == 4)
                <li><a href="{{url("nota_materia_listado/4")}}">Ver mas...</i></a></li>
                @endif
                @break($count3 == 4)

                @php
                $count3++;
                @endphp
                @endif
                @endforeach
                   </ul>
                  </li>
                <!------------------------------------------------------------------------------->
                   <!--------------------------------P-S--------------------------------------->
                <!--li><a><i class="fa  fa-bullseye"></i> P-S <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                @php
                $count4 = 0;
                @endphp
                 @foreach($listado as $fila)
                @if (Str::startsWith($fila->name,'P')||Str::startsWith($fila->name,'p')||
                Str::startsWith($fila->name,'Q')||Str::startsWith($fila->name,'q')||
                Str::startsWith($fila->name,'R')||Str::startsWith($fila->name,'r')||
                Str::startsWith($fila->name,'S')||Str::startsWith($fila->name,'s'))
                <li><a href="{{url("nota_materia/$fila->id")}}">{{$fila->code}} {{$fila->name}}</a></li>
                @if($count4 == 4)
                <li><a href="{{url("nota_materia_listado/5")}}">Ver mas...</i></a></li>
                @endif
                @break($count4 == 4)

                @php
                $count4++;
                @endphp
                @endif
                @endforeach
                   </ul>
                  </li>
                <!------------------------------------------------------------------------------->

                   <!--------------------------------T-W--------------------------------------->
                <!--li><a><i class="fa  fa-bullseye"></i> T-W <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                 @php
                $count5 = 0;
                @endphp
                 @foreach($listado as $fila)
                @if (Str::startsWith($fila->name,'T')||Str::startsWith($fila->name,'t')||
                Str::startsWith($fila->name,'U')||Str::startsWith($fila->name,'u')||
                Str::startsWith($fila->name,'V')||Str::startsWith($fila->name,'v')||
                Str::startsWith($fila->name,'W')||Str::startsWith($fila->name,'w'))
                <li><a href="{{url("nota_materia/$fila->id")}}">{{$fila->code}} {{$fila->name}}</a></li>
                @if($count5 == 4)
                <li><a href="{{url("nota_materia_listado/6")}}">Ver mas...</i></a></li>
                @endif
                
                @break($count5 == 4)

                @php
                $count5++;
                @endphp
                @endif
                @endforeach
                   </ul>
                  </li>
                <!------------------------------------------------------------------------------->

                    <!--------------------------------X-Z--------------------------------------->
                <!--li><a><i class="fa  fa-bullseye"></i> X-Z <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                @php
                $count6 = 0;
                @endphp
                 @foreach($listado as $fila)
                @if (Str::startsWith($fila->name,'X')||Str::startsWith($fila->name,'x')||
                Str::startsWith($fila->name,'Y')||Str::startsWith($fila->name,'y')||
                Str::startsWith($fila->name,'Z')||Str::startsWith($fila->name,'z'))
                <li><a href="{{url("nota_materia/$fila->id")}}">{{$fila->code}} {{$fila->name}}</a></li>
                @if($count6 == 4)
                <li><a href="{{url("nota_materia_listado/7")}}">Ver mas...</i></a></li>
                @endif
                @break($count6 == 4)

                @php
                $count6++;
                @endphp
                @endif
                @endforeach
                   </ul>
                  </li>
                <!------------------------------------------------------------------------------->
                 <!--li><a href="{{ url("video_student")}}"><i class="fa fa-youtube-play "></i>  Ayuda<span class="label label-danger pull-right">Tutorial</span></a></li>
               
                </ul>
              </div>
             
            </div>
  
            <div class="sidebar-footer hidden-small">
              
              <a data-toggle="tooltip" data-placement="top" title="cerrar sesión" href="{{ url('homew/google/logout') }}" 
              style="width:100%;color:white">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          <!--/div>
        </div -->

        <!-- top navigation -->
        <div class="profile clearfix" >
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
                   
                    </span>
                  </div>
                </div>
              </div>
            </div>
               
            
            <div class="row">
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
