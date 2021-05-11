<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Bienvenido a <strong>SITPRE</strong></title>
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
    <h4 align=left>Bienvenid@ {{$distressCall->name}},</h1>
     


     <p  align="justify">Su usuario se encuentra activo puede empezar a usar SITPRE.
     <br><br>Recuerde, en el los siguientes link puede encontrar desde el acceso a la aplicación, el video sobre el uso de la aplicación y un ejemplo de una hoja de calculo con el formato requerido por SITPRE: 
     <br>
     <ul>
     <li><a href="http://notas.madarme.co">Ingreso a la aplicación</a></li>
     <li><a href="https://www.youtube.com/watch?v=iRg7EF3PG6w">Video sobre el uso.</a></li>
     <li><a href="https://docs.google.com/spreadsheets/d/134xXxhS3yO9zZozcEY1K3R5hR7JbAVfCduJj5V_FSJs/edit?usp=sharing">Hoja de calculo ejemplo.</a></li>
     </ul>
     <br><br>
     Gracias por utilizar nuestro sistema,
     <br><br><br>
     Equipo de desarrollo <br>
     SITPRE UFPS</p>
     <img src="{{ $message->embed(public_path() . '/img/logo3.png') }}" />


</body>
</html>