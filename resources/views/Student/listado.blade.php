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

    <style type="text/css">
      table th {
  text-align: center;
}
table td {
  text-align: center;
}

    </style>
  </head>

  <body class="nav-md">
    <!--div class="container body">
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
              
                <!--------------------------------A-D--------------------------------------->
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
                
                <!--li><a href="{{url("nota_materia/$fila->id")}}">{{$fila->code}} {{$fila->name}}</a></li>
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
  

            <!-- /menu footer buttons -->
            <!--div class="sidebar-footer hidden-small">
              
              <a data-toggle="tooltip" data-placement="top" title="cerrar sesión" href="{{ url('homew/google/logout') }}" 
              style="width:100%;color:white">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          <!--/div>
        </div-->

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <a  href="student">
            <img src="../img/logo3.svg"  class="site_title">
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

            <!----------------------------------Mensaje de alertas------------------------------------------------>
            <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
              @if(Session::has('alert-' . $msg))
              <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
              @endif
            @endforeach
          </div>
          
<!------------------------------------------------------------------------------------------------------>

            
            <div class="row ">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                <h1 align="center">{{$nombre_materia}}</h1>
                <h2 align="center"><strong>Prof.</strong> {{$nombre_docente}}</h2>
              

           



                    <br>
                  <!-- inicio tavbla Notas -->
                  <div class="x_content table-responsive">
                 
                    <table id="tabla_de_miembros"  class="table table-striped table-bordered table align-middle table table-hover " style="width:50%" align="center">
                        <thead width="130px">
                      <th style="text-align: center;" ><a>ITEM</a></th>
                      <th align="center"><a>NOTA</a></th>
                      <th align="center"><a>ACCIONES</a></th>
                   @for ($i =4; $i<count($encabezado); $i++)
                    
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
                      @if($fila[$encabezado[$i]] >= "0" && $fila[$encabezado[$i]] < "3")
                      <td style="color: #F44336;" ><strong>{{ $fila[$encabezado[$i]]}}</strong></td>
                      @elseif((str_replace('.',',',$fila[$encabezado[$i]]) >='3' && str_replace('.',',',$fila[$encabezado[$i]])<'4,5'))
                      <td style="color: #E28821;" > <strong>{{$fila[$encabezado[$i]]}}</strong></td>
                      @else    
                      <td style="color: #3FA435;"> <strong> {{$fila[$encabezado[$i]]}} </strong></td>
                      @endif 
                   @endif 
                      <td>
                        <button class="btn btn-xs btn-danger" style="width: 30%" data-toggle="modal" data-placement="right" title="Realiza un comentario sobre la nota obsevada." data-placement="top" data-item="{{$encabezado[$i]}}" data-nota= "{{ $fila[$encabezado[$i]]  }}" data-mate="{{$nombre_materia}}" data-emailpro="{{$email_docente}}"data-profe="{{$nombre_docente}}" data-username="{{ auth()->user()->name }}"  data-useremail="{{ auth()->user()->email}}" data-userurl="{{request()->url()}}" title="Editar Materia" data-target="#comentario">
                       <i class="fa fa-location-arrow" aria-hidden="true"> Comentario </i></button>
                       
                       <button class="btn btn-xs btn-danger"  style="width: 30%" data-toggle="modal" data-placement="right" title="ver Detalles" data-placement="top"  title="Detalle Nota" data-itemd="{{$encabezado[$i]}}" data-notad="{{$fila[$encabezado[$i]]}}"  data-target="#detallenota">
                       <i class="fa fa-eye" aria-hidden="true"> Detalle </i></button>

                    </td> 
                @endforeach 
                @endfor 

                </tbody>

                    </table>
                  <div class="container-fluid">
                    <div align="center">
                      <button id="gaficar" style="height: 30px;" onclick="mostrarfrafica()" class="btn btn-xs btn-danger"  > <i class="fa  fa-bar-chart-o " > Graficar Notas </i> </button>
                    </div>
                  </div> 

                  <div class="container-fluid">
                     <div class="container">
            <div class="row responsive">

              <!-- div class="col-md-6 col-sm-6 col-xs-12" >
                 <h1 align="center" style="font-size: 200px;">
                  @foreach($listado2 as $fila)
                   @if($fila[$encabezado[count($encabezado)-1]]=="")
                   <strong>N/N</strong> 
                   @elseif($fila[$encabezado[count($encabezado)-1]]>= "0" && $fila[$encabezado[count($encabezado)-1]] < "3")
                   <strong style="color: #F44336;"> {{$fila[$encabezado[count($encabezado)-1]]}}</strong> 
                   @elseif(($fila[$encabezado[count($encabezado)-1]]>="3" && $fila[$encabezado[count($encabezado)-1]]<"4,5")||($fila[$encabezado[count($encabezado)-1]]>="3" && $fila[$encabezado[count($encabezado)-1]]<"4.5"))
                   <strong style="color:#E28821;"> {{$fila[$encabezado[count($encabezado)-1]]}}</strong> 
                   @else
                   <strong style="color: #3FA435;"> {{$fila[$encabezado[count($encabezado)-1]]}}</strong> 
                   @endif
                   <br>
                    
                    @foreach($observaciones as $fila2)
                    
                    @if(!empty($encabezado[count($encabezado)-1])&&stristr($fila2,$encabezado[count($encabezado)-1])==$fila2)
                   <h3 align="center" style="font-size: 50px;" data-toggle="tooltip" data-placement="top" title="{{strtoupper($fila2)}}"> {{$encabezado[count($encabezado)-1]}} </h3>
                   @endif
                     @endforeach
                    
                  @endforeach
               </h1>
                  
              </div-->
                

                <div id="migrafica" class="col-md-12 col-sm-12 col-xs-12" >
                        <div class="card" align="center">
                            <div class="card-body" style="height:80% ; width: 60%;">
                                <canvas id="singelBarChart" ></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                </div>

                </div>
                </div>   
                    <!--            
                   <strong>OBSERVACIONES</strong> <br>
                   @for ($i =4; $i<count($encabezado) ; $i++)
                    @foreach($observaciones as $fila)
                    <!-----Se realiza la validacion para que las observaciones se llamen igual que las notas-->
                    <!--@if(!empty($encabezado[$i])&&stristr($fila,$encabezado[$i])==$fila)
                    {{strtoupper($fila)}} <br>
                    @endif
                     @endforeach
                    @endfor 
                  -->
                   </div>
                   <!-- fin tabla notas -->
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
   

   </div>

<!----------Modal para editar las materias-------------->
         

<div class="modal fade" id="comentario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Enviar Comentario</h4>
      </div>
      
       <form action="{{url('enviar_comentario')}}"  method="post" id="f_editar_usuario"  class="formentrada"  >
                
        <div class="modal-body">
            <div class="form-group">   
            <div class="input-group ">
              <div class="col-lg-6 col-md-6 col-sm-6">
              <label for="profe">Profesor</label>
              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
              <input type="text" size="100%" readonly="readonly" class="form-control" name="profe" id="profe"  required>
              <input type="hidden" readonly="readonly" class="form-control" name="emailpro" id="emailpro"  required>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
              <label for="materia">Materia</label>
              <input type="text" size="100%" readonly="readonly" class="form-control" name="mate" id="mate"  required>
                </div>
            </div>
                </div>
        <div class="form-group ">
          <div class="input-group ">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <label for="item">Item</label>
              <input type="text" size="100%" readonly="readonly" class="form-control " name="item" id="item"  required>
              </div>
              <div class=" col-lg-6 col-md-6 col-sm-6" >
              <label for="nota">Nota</label>
              <input type="text" size="100%" readonly="readonly" class="form-control " name="nota" id="nota"  required>
                </div>
            </div>
          </div>

              <div class="form-group">
                <input type="hidden" class="form-control" name="username" id="username" > 
                <input type="hidden" class="form-control" name="useremail" id="useremail" > 
                <input type="hidden" class="form-control" name="userurl" id="userurl" > 
              <label for="coment">Comentario</label>
              <textarea  class="form-control " name="coment" id="coment" cols="25" rows="10"  required > </textarea>
             
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Enviar Comentario</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </form>
    </div>
  </div>
</div>
            <!--------------------------------->

 <!----------Modal para mostrar el detalles de la nota -------------->
         


<div class="modal fade" id="detallenota" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" id="cerrar2" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Detalle Nota</h4>
        </div>

          <div id="modalbody" class="modal-body">
          <div >
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="itemnotam" ></div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"  id="notam" ></div>
          </div>
          <div class="" >
              <div id="observam" class="card">
                 
             </div>
          </div>
          <br>
          </div>
          <div class="modal-footer">
          <button type="button" id="cerrar" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
    </div>
  </div>
</div>
            <!--------------------------------->




           </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            UFPS - Universidad Fransisco de Paula Santander <i class="fa fa-copyright" aria-hidden="true"> <?php echo date('Y') ?> </i>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
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

<script>
var x = document.getElementById("migrafica");
x.style.display="none";  

function mostrarfrafica() {
  
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

<script>
  
  $('#comentario').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
      var profe = button.data('profe')
      var emailpro = button.data('emailpro') 
      var mate = button.data('mate') 
      var item = button.data('item') 
      var nota = button.data('nota') 
      var username = button.data('username') 
      var useremail = button.data('useremail') 
      var userurl = button.data('userurl') 
      
        
      var modal = $(this)
      modal.find('.modal-body #profe').val(profe);
      modal.find('.modal-body #emailpro').val(emailpro);
      modal.find('.modal-body #mate').val(mate);
      modal.find('.modal-body #item').val(item);
      modal.find('.modal-body #nota').val(nota);
      modal.find('.modal-body #username').val(username);
      modal.find('.modal-body #useremail').val(useremail);
      modal.find('.modal-body #userurl').val(userurl);
      
     
})

 
</script>
    
    <script >
 
var items=[];

var not=[]
var color=[]

<?php $ind=0;
for($i=4; $i< count($encabezado);$i++){ ?>          
items[<?php echo($ind) ?>]='<?php echo $encabezado[$i] ?>'
<?php $ind++; } ?>

<?php 
 $in=0;
for($j=4; $j< count($encabezado);$j++){
 
foreach($listado2 as $fila){    ?> 
  var temp=<?php echo str_replace(',', '.', trim($fila[$encabezado[$j]]))?>;
not[<?php echo($in) ?>]=temp; 
if (temp>='0'&& temp<'3') {
color[<?php echo($in) ?>]="#F44336";
}else if(temp>='3'&& temp<'4.5'){
color[<?php echo($in) ?>]="#E28821";
}else{
color[<?php echo($in) ?>]="#3FA435";
}
<?php } $in++; } ?>

    var ctx = document.getElementById( "singelBarChart");
    ctx.height = 100;
    
    
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: items,
            datasets: [
                {
                    label: "Notas",
                    data: not,
                    borderColor: color,
                    borderWidth: "0",
                    backgroundColor: color
                            

                            }
                        ]
        },
        options: {
           legend: {
            display: true,
            legendText : ['Current','Vs last week/month/year','% Change']
                },
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true,
                        precision: 0,
                        fixedStepSize: 1
                    }
                                } ]
            }
        }
    } );

    </script >

    <script type="text/javascript">
  

  $('#detallenota').on('show.bs.modal',function (event) {

      var button = $(event.relatedTarget) 
      var itemnota = button.data('itemd') 
      var not=button.data('notad')
      //console.log(itemnota +"-"+ not)
      
  
      //var cabeza=button.data('cabeza')
      
  var modal=(this);
  var body1 = document.getElementById("itemnotam");
  var body2 = document.getElementById("notam");
  var obsm = document.getElementById("observam");
  var btncerrar=document.getElementById("cerrar");
  var btnc2=document.getElementById("cerrar2");
  


  var itemn = document.createElement("h3");
  itemn.innerHTML = itemnota;
  body1.appendChild(itemn);
//console.log("con ,"+(not>= '3' && not<'4,5'))
//console.log("con ."+(not>= 3 && not<4.5))
var nota = document.createElement("h3"); 
 nota.innerHTML=not;
 if (not>= '0' && not<'3'){
  nota.setAttribute('style', 'text-align: center;color:#F44336;');
 }else if ((not>= '3' && not<'4,5')||(not>= 3 && not<4.5)){
  nota.setAttribute('style', 'text-align: center;color:#E28821;')
  }else{
  nota.setAttribute('style', 'text-align: center;color:#3FA435;')
  }
   body2.appendChild(nota);
 
 var no="";
 var obsnotsm=document.createElement('p');
 obsnotsm.setAttribute('align','justify'); 
 obsnotsm.setAttribute('style','font-size:150%;');

 <?php foreach($observaciones as $obs){?>
    no= (<?php echo (json_encode($obs))?>);
    if(no.includes(itemnota)){
     var a=no.split(':');
    obsnotsm.innerHTML=a[1];
    }<?php  }?>

    obsm.appendChild(obsnotsm);
    

//tabla_de_miembros

btncerrar.onclick = function() {
close();
};
btnc2.onclick = function() {
close(); 
};

function close(){
body1.removeChild(itemn);
body2.removeChild(nota);
obsm.removeChild(obsnotsm);

}

});


</script>


    <script type="text/javascript">
      $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
    </script>
 <script type="text/javascript">
      $(function () {
  $('[data-toggle="modal"]').tooltip()
})
    </script>
    
  </body>
</html>
