<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Sistema de Denuncia</title>
<link rel="stylesheet" href="usuario/files/bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="usuario/files/bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="estilo/estilo.css">
<script src="usuario/files/plugins/sweetalert2/sweetalert2.all.js"></script>
</head>
<body>
<link rel="stylesheet" href="style.css">
<header class="header">
<div class="logo-nav">
 <span class="menu-icon"><i style="font-size: 10pt;
    margin-right: 10px;" class="fas fa-bars" aria-hidden="true"></i></span>   
</div>
<div class="container logo-nav-container">
<a href="#" class="logo"></a>
<nav class="navigation">
<ul class="">
<li><a href="index.php">Usuario</a></li>
<li><a href="admin/index.php">Administrador</a></li>
<li><a href="registrar_usuario.php" >Registrarse</a></li>
</ul>	
</nav>
</div>
</header>
<main class="main">
<div class="container">
<form action="" method="post">
<center><h2>USUARIO</h2></center>
<input type="text" name="denunciante_cod" placeholder="&#127380;ingrese su numero de cedula" class="form-control mb" required>
<input type="password" name="clave" placeholder="&#128273;ingrese su clave" class="form-control mb" required>
<?php include 'usuario/login_usuario.php'?>
<center><button class="btn btn-primary " name="login"> Ingresar</button></center>            
</form>
</div>	
</main>       
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<script src="usuario/files/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

</body>
</html>