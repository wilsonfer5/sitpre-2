<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SITPRE - Manejo de terceros previos</title>
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
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
<body class="nav-md" >
    <!--div class="container body ">
      <div class="main_container">
        <!--div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <a  href="/teacher">
            <img src="../img/logo3.svg"  class="site_title">
            </a>
            </div>
            <div class="clearfix"></div>
            <menu profile quick info -->
            <!--div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ auth()->user()->avatar }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h6 style="color:black">{{ auth()->user()->name }}</h6>
              </div>
              <div class="clearfix"></div>
            </div-->
            <!-- /menu profile quick info -->
            <!--br /-->
            <!-- sidebar menu -->
            <!--div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
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
            </div-->
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <!--div class="sidebar-footer hidden-small">  
              <a data-toggle="tooltip" data-placement="top" title="cerrar sesión" href="{{ url('homew/google/logout') }}" 
              style="width:100%;color:white">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            </menu footer buttons -->
          <!--/div>
        </div-->
   <!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
      <nav>
        <div class="navbar nav_title" style="border: 0;">
            <a  href="teacher">
            <img src="../img/logo3.svg"  class="site_title">
            </a>
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

<div class="col-md-12 col-sm-12 col-xs-12">
<h1 id="nmateria" style="text-align: center;">Detalle Materias: {{$nombre_materia}}</h1>
</div>

</div>

      <!---Mensaje de alertas-->
<div class="flash-message">
      @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
      @endforeach</div>
<!-- Fin Mensaje de alertas -->
<!-- formulario de filtro de tabla --> 
<div class="x_content"> 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <h3 style="text-align: left;" >Filtro de tabla</h3>
        <form action="#" id="formfiltro" class="formentrada">
          <div class="form-group">
            <div >
              <div class=" col-lg-2 col-md-6 col-sm-12" >
               <label data-toggle="tooltip" data-placement="top" title="Actividades de Tercera nota" >Item</label>
               <select class="form-control" id="itemMateria" name="itemMateria"> 
                <option  size="50%" value=""> Mostrar Todo </option>
               <@for($i= 4; $i<count($encabezado);$i++)
                  <option size="100%" value="{{$i}}">{{$encabezado[$i]}}</option>
                @endfor
               </select>
              </div>
              <div class=" col-lg-2 col-md-6 col-sm-12" >
               <label data-toggle="tooltip" data-placement="top" title="Calificacion Menor" >Intervalo Menor</label>
                <input id="min" name="min"  size="50%" class="form-control" type="number" step="0.1" min="0" max="5" placeholder="0"></input>
              </div>
              <div class=" col-lg-2 col-md-6 col-sm-12" >
               <label data-toggle="tooltip" data-placement="top" title="Calificacion Mayor" >Intervalo Mayor</label>
                <input  id="max" name="max"  class="form-control" type="number" step="0.1" min="0" max="5" placeholder="5"></input>
              </div>
            </div>     
          </div>
        </form>
      </div></div>
  <!-- fin de filtro -->
             
  <!-- tabla de datos de la hoja de excel -->
  <div class="col-md-12 col-sm-12 col-xs-12"> 
<div class="x_content"> 
  
   <table id="tabla_de_miembros"  name="miembros"   class="table table-striped table-bordered align-middle display nowrap  table-hover responsive" style="width:100%" align="center">
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
                  <td style="color: #F44336;text-align: center;" ><strong>{{ $fila[$encabezado[$j]]  }}</strong></td>
                  @elseif((str_replace('.',',',$fila[$encabezado[$j]]) >='3' && str_replace('.',',',$fila[$encabezado[$j]])<'4,5'))
                  <td style="color: #E28821;text-align: center;" > <strong>{{ $fila[$encabezado[$j]]  }}</strong></td>
                  @else   
                  <td style="color: #3FA435;text-align: center;"><strong>{{ $fila[$encabezado[$j]]  }}</strong></td>
                  @endif
              @else
                  <td style="text-align: center;">  {{$fila[$encabezado[$j]]}} </td>
              @endif
               @endfor 
            @else  
                @break 
            @endif                  
                  <td style="text-align: center;">
                  <button class="btn btn-xs btn-danger" data-toggle="modal" data-placement="right"  data-placement="top"  title="Detalle Estudiante" data-nombree="{{$fila[$encabezado[2]]}}" data-definitiva="{{$encabezado[count($encabezado)-1]}}" data-nota="{{$fila[$encabezado[count($encabezado)-1]]}}" data-iduser="{{$fila[$encabezado[0]]}}"  data-target="#detalle">
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
      

  <!--fin tabla de datos de la hoja de excel-->
<!-- fin page content -->

<!-- footer content -->
    <footer>
      
      <div class="pull-right">
         UFPS - Universidad Fransisco de Paula Santander <i class="fa fa-copyright" aria-hidden="true">{{date('Y')}}</i>
     </div>  
     <div class="clearfix"></div> 
    </footer>

   </div>
    </div>

    <!----------Modal para mostrar el detalles del estudiante seleccionado -------------->
         


<div class="modal fade" id="detalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" id="cerrar2" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Detalles Estudiante </h4>
        </div>

          <div class="modal-body">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="student" ></div>
          <br>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"  id="definitiva" ></div>
          <br>
          <div id="tabla" ></div>

          <div class="col-md-12 col-sm-12 col-xs-12" >
              <div class="card">
                  <div id="grafica" class="card-body">
                
                 </div>
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
  
<!-- fin footer content -->

<!-- fin footer content -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    
    
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
    <!--charts -->
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    


   <script type="text/javascript">
      $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
    </script>
 <!-- import pdf -->

 
  <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>



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
    


<script type="text/javascript">
  

  $('#detalle').on('show.bs.modal',function (event) {
console.log("inicio")
      var button = $(event.relatedTarget) 

 
      var nombree = button.data('nombree') 
      var definitiva= button.data('definitiva')
      var nota=button.data('nota')
      var id=button.data('iduser')
  
      //var cabeza=button.data('cabeza')
      
  var modal=(this);
  var body1 = document.getElementById("student");
  var body2 = document.getElementById("definitiva");
  var btncerrar=document.getElementById("cerrar");
  var btnc2=document.getElementById("cerrar2");
  var myTable=document.getElementById("tabla");
  var grafico=document.getElementById("grafica");


  var nomE = document.createElement("h3");
  nomE.innerHTML = nombree;
  body1.appendChild(nomE);

//var notadef = document.createElement("h3"); 
 //notadef.innerHTML=nota;
 //if (nota>= '0' && nota<'3'){
  //notadef.style.color="red"; 
  //notadef.setAttribute('style', 'text-align: center;color:#F44336;font-size: 80px;');
 //}else if ((nota>= '3' && nota<'4,5')||(nota>= '3' && nota<'4.5')){
  //notadef.style.color='#e8a010';
  //notadef.setAttribute('style', 'text-align: center;color:#E28821;font-size: 80px;')
  //}else{
 // notadef.style.color='green';
  //notadef.setAttribute('style', 'text-align: center;color:#3FA435;font-size: 80px;')
  //}
 //  body2.appendChild(notadef)

  //var def = document.createElement("h4") 
  //def.innerHTML=definitiva
  //def.setAttribute('style', 'text-align: center')
  //body2.appendChild(def) 
//tabla_de_miembros
 var imp=[];
 var her= document.getElementsByTagName('thead')[
 0].rows[0].cells;
 for(i=4; i < (her.length) -1; i++ )
 {
 imp.push(document.getElementsByTagName('thead')[
 0].rows[0].cells[i].textContent)
 }
//console.log(imp)
var bo=document.getElementsByTagName('tbody')[0].rows;
var bo2=(document.getElementsByTagName('tbody')[0].rows[0].cells.length)-1;
var imp2 = new Array(bo.length);
 for(var k=0; k < bo.length; k++ )
 {
  if (id == document.getElementsByTagName('tbody')[0].rows[k].cells[0].textContent){
    imp2[k] = new Array(bo2);
  for ( var j = 4; j < bo2; j++) 
  {
    imp2 [k][j] =document.getElementsByTagName('tbody')[0].rows[k].cells[j].textContent
  }
  }
 }
  

    let table = document.createElement('table');
    table.classList.add('table', 'table-striped', 'table-bordered', 'align-middle', 'display', 'nowrap', 'table-hover', 'responsive');
    let headerRow = document.createElement('tr');
 
    imp.forEach(headerText => {
        let header = document.createElement('th');
        let textNode = document.createTextNode(headerText);
        header.setAttribute('style','text-align: center ;')
        header.appendChild(textNode);
        headerRow.appendChild(header);
    });
 
    table.appendChild(headerRow);
 
    imp2.forEach(emp => {
        let row = document.createElement('tr');
 
        Object.values(emp).forEach(text => {
            let cell = document.createElement('td');
            let textNode = document.createTextNode(text);

            if (text.trim()>='0'&&text.trim()<'3,0') {
            cell.setAttribute('style','text-align: center; color:#F44336;') 
            }else if(text.replace(',','.')>=3 &&text.replace(',','.')<4.5){
              cell.setAttribute('style','text-align: center;color:#E28821; ')
            }else{
              cell.setAttribute('style','text-align: center;color:#3FA435;')
            }
            
            cell.appendChild(textNode);
            row.appendChild(cell);
        })
 
        table.appendChild(row);
    });
 
    myTable.appendChild(table);

// grafico


//console.log(label)


btncerrar.onclick = function() {
close();
 
};
btnc2.onclick = function() {
close(); 
 
};

function close(){
body1.removeChild(nomE);
//body2.removeChild(notadef)
//body2.removeChild(def)
myTable.removeChild(table);

}
});


</script>




<script type="text/javascript">
    /* Custom filtering function which will search data in column four between two values */
    $.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
          console.log('entro a funtion')
            var min = parseFloat( $('#min').val(), 0);
            var max = parseFloat( $('#max').val(), 0 );
            var e = document.getElementById("itemMateria");
            var strUser = e.value;
            var note=data[strUser];
            if(/^[a-zA-Z]+$/.test(note)){
              note || 0;
            }else{
                note = data[strUser].replace(",",".") || 0; 
            }
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
     var lastIndex = $('#tabla_de_miembros').find("tr").first().find("td").last().index();
     console.log("tamaño de la tabla"+lastIndex);
    $(document).ready(function() {
        var table = $('#tabla_de_miembros').DataTable({
          info:false,
          dom: 'Bfrtip',
    buttons: [
    {
    extend: 'pdf',
    text: 'PDF',
     exportOptions: {
                   columns: ':not(:last-child)',
                },
    title: function () { return $('#nmateria').text(); },
  },{
    extend: 'excel',
    text: 'Excel',
    exportOptions: {
                   columns: ':not(:last-child)',
                },
    title: function () { return $('#nmateria').text(); },
  }],
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
        "search": "Buscar Estudiante:",
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

        // Event listener to the two range filtering inputs to redraw on input
        $('#min, #max').change(function(){
          table.draw();
        });
        $('#itemMateria').change(function(){
         var selectElement = document.getElementById('itemMateria').value;
         if(selectElement==""){
           $('#min').val("");
           $('#max').val("");
           
         }
        // console.log("select = "+selectElement);
          table.draw();
        });
    } );
    </script>


    
</body>
</html>
