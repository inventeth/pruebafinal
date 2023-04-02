<?php

$r = '';
require($r.'incluir/connection.php');
require($r.'incluir/session.php');


if($_POST['editar']){
    
    $id_usuario        = $_POST['id_usuario'];
    $nombre            = $_POST['nombre'];
    $celular           = $_POST['celular'];
    $email             = $_POST['email'];
    $id_cargo          = $_POST['id_cargo'];
    $password          = sha1($_POST['password']);
    
    
    
    $sql24 = "UPDATE usuarios SET nombre = '$nombre', password='$password', celular='$celular', email = '$email', id_cargo='$id_cargo' WHERE id_usuario ='$id_usuario' limit 1 ";
	$db->query($sql24);
	
	
    
}else{}


if($_GET['eliminar']){
    
    
    $id_persona = $_GET['id_persona'];

	$qry = $db->query("DELETE FROM personas WHERE id_persona = $id_persona ");
	if($qry) $mensaje = 'Registro eliminado con exito!';
	else $error = 'No se pudo eliminar registro';
	
    
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

    <!-- Ajsutes proceso Fuetes e iconos con los contenidos css -->
    <link href="css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

  <!-- Estilos CSS -->
    <link href="css/estilos.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Inicio Encabezado -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Texto Titulo Aplicación -->
            <br>
            <h1 style="text-align:center; font-size:16px; color:#fff;" >Comisión de Ventas</h1>
            <br>
            <!-- Divisor 1 -->
            <hr class="sidebar-divider my-0">
            
             <!-- Menu de aplicación -->
              <?php require($r.'menu.php') ?>
         
            <!-- Dividsor 2 -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- Fin de Encabezado -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                 

                    <!-- Barra de navegación -->
                    <ul class="navbar-nav ml-auto">

                  
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                         
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                 
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    
                                    <? 
          
           
                                    $row100 = $db->query("SELECT * FROM usuarios  WHERE email = '".$_SESSION['email']."' ")->fetch(PDO::FETCH_ASSOC); 
          
                                    echo $row100['nombre'];
                                    
                                    ?>
                                    
                                </span>
                               <?php //require($r.'avatar.php') ?>
                                    
                                       
                            </a>
                            <!-- Menu Usuario 2 -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                         
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Editar Perfil</h1>
                     
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Datos de usuario</h6>
                                    <div class="dropdown no-arrow">
                                    
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <form id="form" name="form" enctype="multipart/form-data" class="ng-pristine ng-valid" action="editarperfil.php" method="post">
      
                               <input type="hidden" id="profile_update_firstName" name="editar" required="required" value="editar">
                               
                               <input type="hidden" id="profile_update_firstName" name="id_usuario" required="required" value="<?php echo $row100['id_usuario'] ?>">

                                <div class="col-xs-8 col-lg-6"><label class="form-label required" for="profile_update_firstName">Nombre</label><input type="text" id="profile_update_firstName" name="nombre" required="required" class="form-control form-control-sm" autocomplete="given-name" value="<?php echo $row100['nombre'] ?>" ></div>
                                <div class="col-xs-8 col-lg-6">                            
                                <label class="form-label required" for="profile_update_firstName">Cargo</label>
                               
                        
                                 <select   name="id_cargo" class="form-control form-control-sm"  required="required">
                                                                            <?php
                                                                            $qry = $db->query("SELECT * FROM cargos ");
                                                                            while($row23 = $qry->fetch(PDO::FETCH_ASSOC)) {
                                                                            echo '<option value='.$row23['id_cargo'].'>'.$row23['cargo_nombre'].'</option>';
                                                                            }
                                                                            ?>
                                                                            </select>
                                </div>
                                <div class="col-xs-8 col-lg-6"><label class="form-label required" for="profile_update_firstName">Email</label><input type="text" id="profile_update_firstName" name="email" required="required" class="form-control form-control-sm" autocomplete="given-name" value="<?php echo $row100['email'] ?>" ></div>
                            
                                <div class="col-xs-8 col-lg-6"><label class="form-label required" for="profile_update_firstName">Celular</label><input type="text" id="profile_update_firstName" name="celular" required="required" class="form-control form-control-sm" autocomplete="given-name" value="<?php echo $row100['celular'] ?>"></div>
                                
                                <div class="col-xs-8 col-lg-6"><label class="form-label required" for="profile_update_firstName">Password</label><input type="password" id="profile_update_firstName" name="password" required="required" class="form-control form-control-sm" autocomplete="given-name" value="<?php echo $row100['password'] ?>"></div>
                            
                               
                              
                                <br>
       
                              <!-- /.card-body -->
                              <div class="card-footer clearfix">
                                <button type="submit" class="btn btn-primary btn-sm col-xs-8">
                              Actualizar
                            </button>
                              </form>
                          <!-- fin formulario -->
                                </div>
                            </div>
                            
                        
                        </div>
                        
                  

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Desarrollado por Juan Carlos Ruiz. 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
       
  function multiplicar(){
  m1 = document.getElementById("multiplicando").value;
  m2 = document.getElementById("multiplicador").value;
  r = m1*m2;
  document.getElementById("resultado").value = r;
}

    </script>
    
    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="js/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="js/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/chart-area-demo.js"></script>
    <script src="js/chart-pie-demo.js"></script>
    


</body>

</html>