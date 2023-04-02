<?php

$r = '';
session_start();
if($_SESSION['email']){
	header ('Location:'.$r.'index2.php');
	exit();
}

require($r.'incluir/connection.php');

if($_POST['ingresologin']){

	$email = trim($_POST['email']);
	$qry = $db->query("SELECT * FROM usuarios WHERE email= '$email' ");
	$num = $qry->rowCount();
	if($num > 0){
		$num = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND password = sha1('".$_POST['password']."')")->rowCount();
		if($num > 0){
			$row = $qry->fetch(PDO::FETCH_ASSOC);
			$_SESSION['email']	= $row['email'];
			header('Location:index2.php');
			exit();
		}else $error = 'Password no coincide con el del usuario';
	}else $error = 'Usuario no existe';
	
}else{}



if($_POST['insertar']){
    
    $per_Id          = $_POST['id'];
    $per_Nombre      = $_POST['nombre'];
    $per_Email       = $_POST['email'];
    $per_Celular     = $_POST['celular'];
    $per_Password    = sha1($_POST['password1']);
    $planregistro    = $_POST['planregistro'];
    
	$qry = $db->query("INSERT INTO usuarios (usu_Id, per_tipo_Doc, per_exp_Doc, per_Nombre, per_Password, per_Email, per_Celular, per_Telefono, per_Departamento, per_Ciudad, per_Direccion, per_Estado, per_Perfil, imagen) VALUE ('$per_Id', '1', '1', '$per_Nombre', '$per_Password', 	'$per_Email', '$per_Celular', 'NA', 'NA', 'NA', 'NA', '1', '2', 'NA')");
	if($qry) $mensaje = 'Se inserto el usuario';
	else $error = 'No se pudo insertar el usuario';

    
}else{}


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

     <title>Comision de Asesores de Ventas</title>
    <!-- Estilos CSS -->
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                      
                                        <h1 class="h4 text-gray-900 mb-4">Comisión Ventas</h1>
                                    </div>
                                    <form class="user" action="index.php" method="POST">
                                        
                                          <input type="hidden" name="ingresologin" value="ingresologin" >

                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Ingresar Email..." required>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck" >
                                                <label class="custom-control-label" for="customCheck">Recordarme</label>
                                            </div>
                                        </div>
                                      
                                        <input type="submit" name="Login" value="Login" class="btn btn-primary btn-user btn-block" >
                        
                                        <hr>
                                     
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    
</body>

</html>
