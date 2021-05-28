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
    <h1 align=left>Nuevo Comentario.</h1>

    <br>
    <h2>Docente {{$commentary->profe}} </h2>
     
      <p align="justify" >El Estudiante {{$commentary->username}} con el correo {{$commentary->useremail}} ha realizado el siguiente comentario con respecto a la calificacion del item <strong>{{$commentary->item}}</strong> con una nota de <strong>{{$commentary->nota}}</strong> de la materia <strong>{{$commentary->mate}}</strong> </p>

     <p  align="justify">{{$commentary->coment}}
     <br>
     <br>
     <ul>
     <li><a href="http://notas.madarme.co">Ingreso a la aplicación</a></li>
     </li>
     </ul>
     <br><br>
     Gracias por utilizar nuestro sistema,
     <br><br><br>
     Equipo de desarrollo <br>
     SITPRE UFPS</p>
     <img src="{{ $commentary->embed(public_path() . '/img/logo3.png') }}" />


</body>
</html>