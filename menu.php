 <?php 
          
                  $row101 = $db->query("SELECT * FROM usuarios  WHERE email = '".$_SESSION['email']."' ")->fetch(PDO::FETCH_ASSOC); 
          
         
  ?> 
   <!-- Navegaci®Æn de Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="index2.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Panel de Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Configuraci√≥n
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Mi Perfil</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Editar datos:</h6>
                         <a class="collapse-item" href="editarperfil.php">Editar</a>
                    </div>
                </div>
            </li>

           
            <!-- Divider -->
            <hr class="sidebar-divider">


       <!-- Nav Item - Pages Collapse Menu -->
       

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $r ?> incluir/logout.php">
                    <i class="fas fa-arrow-right"></i>
                    <span>Salir</span></a>
            </li>
