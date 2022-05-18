<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

 <!--Copia de mi sistema prueba-->
        <link href="../css/styles.css" rel="stylesheet" />
  
 <?php 
  	session_start();
  	if(!isset($_SESSION['usuario'])){

  		header("location:LoginRegistroLogin/login.php");

  	}

   ?>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="../imagen/logo_muni_fsa.png" alt="" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
     
                        
                    
            <!-- Navbar-->
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../LoginRegistroLogin/salir.php">Salir</a></li>
                    </ul>
                </li>
  
  <li class="nav-item d-none d-sm-inline-block">
        <a class="btn btn-success btn-sm" href="../SitioWeb.php" target="_blank" class="nav-link">INGRESAR</a>
      </li>
    </ul>

    <label><H4>MUNICIPALIDAD-SUBSECRETARIA DE TRANSPORTE Y EMERGENCIA</H4></label>




      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

    
         
        
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a style="text-decoration: none; " href="../index2.php"  class="brand-link">
      <img src="../imagen/logo_muni_fsa.png" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sector Remis</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="" class="img-circle elevation-2" >
        </div>
        <div class="info">

        	<?php 

        		$conexion = new mysqli("localhost","root","","remis");
        		$sql = "SELECT * FROM USUARIO ";
        		$result = $conexion->query($sql);
        		while($row =mysqli_fetch_array($result)) {
        	?>
          <a style="text-decoration:none; " href="#" class="d-block"> Hola <?php echo $row['nombre']; }?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!--div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          </li>
          
<!-- enlace para hacer algo ------------------------------------------------------------>
         
          <li class="nav-item">
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar <small>+ Custom Area</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>


         <!----aqui comienza los enlaces de la izquierda ----> 
         <li class="nav-header">Configuración</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Opciones Personales
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="cambiarContraseña.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cambiar contraseña</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="email_lista.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Actualiza Email</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Actualiza Datos Personales</p>
                </a>
              </li>
              <!--li class="nav-item">
                <a href="pages/charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li-->
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Gestiones Adminis...
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Gestion/buscarChofer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Historial Chofer</p>
                </a>
              </li>
              <!--li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Solicitar Turno</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Turno</p>
                </a>
              </li-->



              <!--li class="nav-item">
                <a href="pages/UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li-->
            </ul>
          </li>
          <!--li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li-->
          <!--li class="nav-header">Consultas</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Formulario
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Kanban Board
              </p>
            </a>
          </li-->
          <li class="nav-header">Consultas</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Formularios
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Formulario1/form_datosPersonales.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Datos Personales</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="../Formulario1/pruebachofer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chofer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Formulario1/form_adherente.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adherentes</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="../Formulario1/form_empresas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Empresas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Formulario1/form_habilitacion.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Habilitacion</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="../Formulario1/form_seguro.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seguros</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Formulario1/form_vehiculos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vehiculos</p>
                </a>
              </li>
            </ul>


          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book-open" ></i>
              <p>
                Listas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Lista1/form_datosPersonales.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Datos Personales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../listas/choferes_listas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chofer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Lista1/.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adherentes</p>
                </a>
              </li>
              
              
              <li class="nav-item">
                <a href="../listas/emp_listas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Empresa</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="../listas/hab_listas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Habilitación</p>
                </a>
              </li>
              <
              
              <li class="nav-item">
                <a href="../listas/seg_listas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seguros-Auto</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../listas/vehiculos_listas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vehiculos</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="../tarifas/tarifas_listas.php" class="nav-link ">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Tarifa
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="../formularioBusqueda.php" class="nav-link ">
              <i class="nav-icon fas fa-chart-area"></i>
              <p>
                Consultas Graficas
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="Busquedas/formularioBusqueda.php" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Generar código QR
              </p>
            </a>
          </li>  
         </li>
        </ul>

  <!--fin de los link izquierdo-------------------------------------------->
  
    </nav>
  </div>
</aside>
   

<div class="content-wrapper" style="min-height: 2120.88px;">


<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cambiar Contraseña</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST" action="entrar.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña Nueva</label>
                    <input type="password" name="contra" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Repite Contraseña</label>
                    <input type="password" name="repi" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                    
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="enviar" >Guardar Datos</button>
                  <button type="reset" class="btn btn-primary" style="background: red;" name="enviar" >Borrar Datos</button>
                </div>
              </form>
            </div>


<!--svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>


<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    <!--?php

    	//echo "Se ha modificado correctamente";


    //}


     ?-->
  </div>
</div>



</div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->  
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="">MUNICIPALIDAD DE LA CIUDAD DE FORMOSA</a>.</strong>
    Reservados todos los derechos.
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>
</div>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../plugins/raphael/raphael.min.js"></script>
<script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>


 

<!-- Aqui el que le hace funcionar el login-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  </body>
</html>