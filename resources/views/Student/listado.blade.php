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
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Favicon-->
    <link rel="shortcut icon" href="../img/favicon1.png">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <a  href="/student">
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
              
                <!--------------------------------A-D--------------------------------------->
                <li><a><i class="fa  fa-bullseye"></i> A-D <span class="fa fa-chevron-down"></span></a>
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
                <li><a><i class="fa  fa-bullseye"></i> E-H <span class="fa fa-chevron-down"></span></a>
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
                <li><a><i class="fa  fa-bullseye"></i> I-L <span class="fa fa-chevron-down"></span></a>
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
                <li><a><i class="fa  fa-bullseye"></i> M-O <span class="fa fa-chevron-down"></span></a>
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
                <li><a><i class="fa  fa-bullseye"></i> P-S <span class="fa fa-chevron-down"></span></a>
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
                <li><a><i class="fa  fa-bullseye"></i> T-W <span class="fa fa-chevron-down"></span></a>
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
                <li><a><i class="fa  fa-bullseye"></i> X-Z <span class="fa fa-chevron-down"></span></a>
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
                 <li><a href="{{ url("video_student")}}"><i class="fa fa-youtube-play "></i>  Ayuda<span class="label label-danger pull-right">Tutorial</span></a></li>
               
                </ul>
              </div>
             
            </div>
  

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
                   
                    </span>
                  </div>
                </div>
              </div>
            </div>

            

            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                <h1 align="center">{{$nombre_materia}}</h1>
                <h5 align="center"><strong>Prof.</strong> {{$nombre_docente}}</h5>
                  <div class="x_content">
                 
                    <table id="tabla_de_miembros" class="table table-striped table-bordered" style="width:50%" align="center">
                        <thead width="130px">
                      <th><a>ITEM</a></th>
                      <th><a>NOTA</a></th>
                      <th><a>COMENTARIO</a></th>
                   @for ($i =4; $i<count($encabezado) ; $i++)
                    
                    </thead>
                      <tbody>

                      @if($encabezado[$i]!="")
                        
                          <td>
                        @foreach($observaciones as $fila)
                        @if(!empty($encabezado[$i])&&stristr($fila,$encabezado[$i])==$fila)
                            <strong class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="{{$fila}}"> {{$encabezado[$i]}}</strong>
                          @endif
                          @endforeach
                          </td>
                          
                      @else
                          <td><strong>Nota pendiente</strong></td>
                      @endif
                   
               @foreach($listado2 as $fila)
               
                @if($fila[$encabezado[$i]]=="")
                       <td>N/A</td>
                  @else
                      <td>{{ $fila[$encabezado[$i]]  }}</td>
                @endif 
                      <td><a href=""class="btn btn-xs btn-danger"data-toggle="tooltip" data-placement="right" title="Realiza un comentario sobre la nota obsevada.">
                        <li class="fa fa-location-arrow" aria-hidden="true"> Comentario </li></a></td> 
               
                @endforeach
                @endfor 

                </tbody>

                    </table>
                    
                   <strong>OBSERVACIONES</strong> <br>
                   @for ($i =4; $i<count($encabezado) ; $i++)
                    @foreach($observaciones as $fila)
                    <!-----Se realiza la validacion para que las observaciones se llamen igual que las notas-->
                    @if(!empty($encabezado[$i])&&stristr($fila,$encabezado[$i])==$fila)
                    {{strtoupper($fila)}} <br>
                    @endif
                     @endforeach
                    @endfor  
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
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <script type="text/javascript">
      $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
    </script>
  </body>
</html>
