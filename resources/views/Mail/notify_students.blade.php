<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title> <strong>SITPRE</strong></title>
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
</head>
<body>
   
    <h1>Notificación de carga de notas.</h1>
     
      <p style="text-align: justify;" >Se han publicado notas de la materia : {{$notificacion['mat']}} con el codigo {{$notificacion['cod']}}.
      </p>

     <p  style="text-align: justify;">{{$notificacion['coment']}}
     <br>
     <br>
     <ul>
     <li><a href="http://notas.madarme.co/sitpre_nuevo/public_html/">Ingresa a SITPRE<a> y revisa tus calificaciones. </li>
     </li>
     </ul>
     <br><br>
     Gracias por utilizar nuestro sistema,
     <br><br><br>
     Equipo de desarrollo <br>
     SITPRE UFPS</p>

</body>
</html>