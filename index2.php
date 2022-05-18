<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema remis</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
    <img class="animation__wobble" src="imagen/logo_muni_fsa.png" alt="" height="60" width="60">
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
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="LoginRegistroLogin/salir.php">Salir</a></li>
                    </ul>
                </li>
           




      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
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
    <a href="" class="brand-link">
      <img src="imagen/logo_muni_fsa.png" class="brand-image img-circle elevation-3" style="opacity: .8">
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
          <a href="#" class="d-block"> Hola <?php echo $row['nombre']; }?></a>
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
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cambiar contraseña</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Actualiza Email</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
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
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Historial Chofer</p>
                </a>
              </li>
              <li class="nav-item">
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
              </li>
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
                <a href="Formularios/form_adherentes.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adherentes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Formularios/form_adhe_empresa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adherentes Empresas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Formularios/form_barrios.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barrio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Formularios/form_choferes.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chofer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Formularios/form_chofer_empresa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chofer Empresa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Formularios/form_contactos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contactos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Formularios/form_domicilios.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Domicilio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Formularios/form_empresas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Empresas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Formularios/form_habilitacion.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Habilitacion</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Formularios/form_localidad.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Localidad</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Formularios/form_personas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Personas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Formularios/form_provincias.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Provincias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Formularios/form_seguros.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seguro-Auto</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Formularios/form_tipoCont.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipo-Contactos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Formularios/form_tipodocumento.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipo-Documento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Formularios/form_tipodomicilio.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipo-Domicilio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Formularios/form_vehiculos.php" class="nav-link">
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
                <a href="Listado/adhe_actualizar.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adherentes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adherentes-Empresas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barrio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chofer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Empresa</p>
                </a>
              </li><li class="nav-item">
                <a href="forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contactos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Domicilios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Empresas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Habilitación</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Localidad</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Personas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Provincias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seguros-Auto</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipo-Contactos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipo-Documento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipo-Domicilio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vehiculos</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="calendar.html" class="nav-link ">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="gallery.html" class="nav-link ">
              <i class="nav-icon fas fa-chart-area"></i>
              <p>
                Consultas
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="Busquedas/buscarChofer.php" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Buscar Chofer
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

<!--Zona de contenidos -->
    






</div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->  
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>


 

<!-- Aqui el que le hace funcionar el login-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


</body>
</html>