<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema remis</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  <?php 
  	session_start();
  	if(!isset($_SESSION['usuario'])){

  		header("location:LoginRegistroLogin/login.php");

  	}

   ?>

   <script>

     // escuchar evento de click btn submit
     document.getElementById("enviar").addEventListener("click", leerRadioBtn);

     // funcion para buscar texto de radiobtn
     function leerRadioBtn() {
       // buscar valor de radio
       var genero = document.querySelector('input[name="genero"]:checked').parentNode.innerText;
       // poner valor en variable input hidden
       document.getElementById("damegenero").value = damegenero;
     }
      window.onload=function(){
      document.enviar.submit();}



    
    function alerta() {
      document.innerHtml("<div id='alert' class='alert alert-success d-flex align-items-center' role='alert'><svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg><div>Se ha cargado correctamente tus datos</div></div>");
  }



  </script>
</head>
<body>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="../imagen/logo_muni_fsa.png" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a style="text-decoration: none;" class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
     
                        
                    
            <!-- Navbar-->
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="LoginRegistroLogin/salir.php">Salir</a></li>
                    </ul>
                </li>
           



  <li class="nav-item d-none d-sm-inline-block">
        <a class="btn btn-success btn-sm" href="muni.html" target="_blank" class="nav-link">INGRESAR</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
    

    
         
        
     
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
    <a href="../index2.php" class="brand-link">
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
                <a href="form_choferes.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chofer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form_adherentes.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adherentes</p>
                </a>
              </li>
              <!--li class="nav-item">
                <a href="form_adhe_empresa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adherentes Empresas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form_barrios.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barrio</p>
                </a>
              </li-->
              
              <!--li class="nav-item">
                <a href="form_chofer_empresa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chofer Empresa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form_contactos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contactos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form_domicilios.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Domicilio</p>
                </a>
              </li-->
              <li class="nav-item">
                <a href="form_empresas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Empresas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form_habilitacion.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Habilitacion</p>
                </a>
              </li>
              <!--li class="nav-item">
                <a href="form_localidad.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Localidad</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form_personas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Personas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form_provincias.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Provincias</p>
                </a>
              </li-->
              <li class="nav-item">
                <a href="form_seguros.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seguro-Auto</p>
                </a>
              </li>
              <!--li class="nav-item">
                <a href="form_tipoCont.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipo-Contactos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form_tipodocumento.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipo-Documento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form_tipodomicilio.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipo-Domicilio</p>
                </a>
              </li-->
              <li class="nav-item">
                <a href="form_vehiculos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vehiculos</p>
                </a>
              </li>
            </ul>
          </li>
          


<!--COMIENZA LISTADO-->


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
                <a href="forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adherentes</p>
                </a>
              </li>
              <!--li class="nav-item">
                <a href="forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adherentes-Empresas</p>
                </a>
              </li-->
              <!--li class="nav-item">
                <a href="forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barrio</p-->
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
            <a href="gallery.html" class="nav-link">
              <i class="nav-icon fas fa-chart-area"></i>
              <p>
                Consultas
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
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

<div class="content-wrapper" style="min-height: 2021.88px;">




                        
                          

<!--Zona de contenidos -->
<div style="margin-left: 10%; margin-top: 10%; width: 800px;">
  
<?php 
$conexion = mysqli_connect("localhost","root","","remis");

$id = $_GET['id'];
$sql= "SELECT * FROM personas INNER JOIN domicilios ON personas.`id` = domicilios.`id_persona`
INNER JOIN localidad ON domicilios.`id_localidad` = localidad.`id`
INNER JOIN provincias ON localidad.`id_provincia` = provincias.`id`
INNER JOIN barrios ON barrios.`id_localidad` = localidad.`id`
INNER JOIN contactos ON contactos.`id_persona` = personas.`id` WHERE personas.id = '$id'";
$resultado = mysqli_query($conexion,$sql);
$row = mysqli_fetch_array($resultado);




?>

  <h1>Formulario datos personales</h1>
  <form action="" method="POST">
  <div class="mb-3 row" >
    <div class="form-group col-md-6">
    <label for="staticEmail">Nombres:</label>
      <input type="text"  class="form-control" id="staticEmail" name="pers_nombres" placeholder="Ingresar nombres completo" value="<?php echo $row['pers_nombres'];?>" >
      <input type="hidden"  class="form-control" id="staticEmail" name="id" placeholder="Ingresar nombres completo" value="<?php echo $row['id'];?>" >
      
    </div>


  <div class="form-group col-md-6">
    <label for="staticEmail">Apellidos:</label>
      <input type="text"  class="form-control" id="staticEmail" name="pers_apellidos" placeholder="Ingresar apellidos" value="<?php echo $row['pers_apellidos']?>" >
    </div>
  </div>



  <div class="mb-3 row" >
    <div class="form-group col-md-6">
  <label for="staticEmail" class="col-sm-2 col-form-label">NºDocumento:</label>
  <input type="num"  class="form-control" id="staticEmail" name="pers_nroDocumento" placeholder="Ingresar numero" value="<?php echo $row['pers_nroDocumento']?>" >
    </div>

    <div class="form-group col-md-4">
    <label class="col-form-label" for="inputState" >Tipo Documento:</label><br>
    <select name="pers_tipoDocumento" id="estadoCivil" class="form-control">
    <option selected>...:</option>
    <option value="<?php echo $row['pers_tipoDocumento']?>"><?php echo $row['pers_tipoDocumento']?></option>
    </select>
    <input type="hidden" name="id">
 </div>


    <div class="form-group col-md-2" >
    <label for="staticEmail" class="col-sm-2 col-form-label">CUIL:</label>
      <input type="num"  class="form-control" id="staticEmail" name="pers_CUIL" placeholder="Ingresar CUIL" value="<?php echo $row['pers_CUIL']?>" >
    </div>
  </div>

  <div class="mb-3 row" >
    <label for="staticEmail" class="col-sm-2 col-form-label">Fecha de Nacimiento:</label>
    <div class="col-sm-10">
      <input type="date"  class="form-control" name="pers_fechaNacimiento" id="fechaNacimiento"  placeholder="Ingresar fecha" value="<?php echo $row['pers_fechaNacimiento']?>" >
    </div>
  </div>

  <div class="mb-3 row" >
    <label for="staticEmail" class="col-sm-2 col-form-label">Nacionalidad:</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="staticEmail" name="pers_nacionalidad" placeholder="Ingresar nacionalidad" value="<?php echo $row['pers_nacionalidad']?>">
    </div>
  </div>

  <select name="genero" id="genero" class="form-select" aria-label="Default select example">
  
  <option value="<?php echo $row['pers_genero']?>"><?php echo $row['pers_genero']?></option>
  
</select>

  

<div >
  <div  class="mb-3 row">
      <label for="staticEmail" class="col-form-label">Estado Civil:</label>
        <select name="pers_estadoCivil" id="estadoCivil"  aria-label="Default select example" class="form-control">
           <option value="<?php echo $row['pers_estadoCivil']?>"><?php echo $row['pers_estadoCivil']?></option>
            
        </select>
  </div>
</div>



  <div class="mb-3 row" >
    <label for="staticEmail" class="col-sm-2 col-form-label">Fecha Registro:</label>
    <div class="col-sm-10">
      <input type="date"  class="form-control" id="staticEmail" name="pers_fechaRegistro" placeholder="Ingresar Fecha" value="<?php echo $row['pers_fechaRegistro']?>" >
     
    </div>
  </div>


<div class="mb-3 row" >
    <label for="staticEmail" class="col-sm-2 col-form-label">Provincia:</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="staticEmail"name="provincia" placeholder="Ingresar Email" value="<?php echo $row['nombre_provincia']; ?>" >
    </div>
  </div>




<div class="mb-3 row" >
    <label for="staticEmail" class="col-sm-2 col-form-label">Localidad:</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="staticEmail" name="localidad" placeholder="Ingresar Email" value="<?php echo $row['nombre_localidad']; ?>">
      
    </div>
  </div>




  <div class="mb-3 row" >
    <label for="staticEmail" class="col-sm-2 col-form-label">Barrio:</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="staticEmail" name="nombre_barrio" placeholder="Ingresar Email" value="<?php echo $row['nombre_barrio'];?>">
      <input type="hidden"  class="form-control" id="staticEmail" name="nombre_barrio" placeholder="Ingresar Email" value="<? $row['id'];?>">
    </div>
  </div>





  <div><h2>Domicilio</h2></div>
<br>
<br>

<div class="mb-3 row" >
    <label for="staticEmail">Número de Manzana:</label>
      <input type="text"  class="form-control" id="staticEmail" name="dom_manzana" placeholder="Ingresar manzana" value="<?php echo $row['dom_manzana'];?>">
  </div>
  <div class="mb-3 row">
    <label for="staticEmail">Número de Casa:</label>
      <input type="text" class="form-control" name="dom_casa" placeholder="Ingresar Número de Casa" value="<?php  echo $row['dom_casa'];?>">
  </div>
  <div class="mb-3 row">
    <label for="inputPassword">Número de Piso:</label>
      <input type="text" class="form-control" id="inputPassword" name="dom_piso" placeholder="Ingresar Número de Piso" value="<?php echo $row['dom_piso'];?>">
    </div>

  <div class="mb-3 row">
    <label for="inputPassword">Nombre de la Calle:</label>
      <input type="text" class="form-control" id="inputPassword" name="dom_calle" id="dom_calle"  placeholder="Ingresar nombre" value="<?php echo $row['dom_calle'];?>">
    </div>

 <div class="mb-3 row">
    <label for="inputPassword">Número de Departamento:</label>
      <input type="text" class="form-control" id="inputPassword" name="dom_departamento" placeholder="Ingresar Número" value="<?php echo $row['dom_departamento'];?>">
    </div>
  
  
 

   <div class="mb-3 row">
    <label for="inputPassword">Ingresar Altura:</label>
      <input type="text" class="form-control" id="inputPassword" name="dom_altura" id="dom_altura" placeholder="Ingresar Altura" value="<?php echo $row['dom_altura'];?>">
    </div> 


    <h3>Contacto</h3>

<div class="mb-3 row" >
    <label for="staticEmail" class="col-sm-2 col-form-label"> Tipo de Contacto:</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="staticEmail" name="tipo" placeholder="Ingresar Contacto" value="<?php echo $row['tipo_contacto'] ?>" >
    </div>
  </div>
   
  <div class="mb-3 row" >
    <label for="staticEmail" class="col-sm-2 col-form-label">correo:</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="staticEmail"name="correo" placeholder="Ingresar Email" value="<?php echo $row['correo'];?>" >
    </div>
  </div>


    <h3>Contacto</h3>


    <div class="mb-3 row" >
    <label for="staticEmail" class="col-sm-2 col-form-label">Contactos:</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="staticEmail"name="cont_contactos" placeholder="Ingresar Contacto">
    </div>
  
  <div class="mb-3 row" >
    <label for="staticEmail" class="col-sm-2 col-form-label">Localidad:</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="staticEmail"name="localidad" placeholder="Ingresar Email">

















      <input type="hidden"  class="form-control" id="staticEmail"name="id_loc" placeholder="Ingresar Email">
    </div>
  </div>
  <div class="mb-3 row" >
    <label for="staticEmail" class="col-sm-2 col-form-label">Provincia:</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="staticEmail"name="provincia" placeholder="Ingresar Email">
    </div>
  </div>
  
  <div class="mb-3 row" >
    <label for="staticEmail" class="col-sm-2 col-form-label">tipo de contacto:</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="staticEmail"name="tipo_contacto" placeholder="Ingresar Email">
    </div>
  </div>
  <div class="mb-3 row" >
    <label for="staticEmail" class="col-sm-2 col-form-label">correo:</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="staticEmail"name="correo" placeholder="Ingresar Email">
    </div>
  </div>
    
  <div class="d-grid gap-2"-->
    <!--button type="submit" class="btn btn-primary" id="enviar">Editar</button-->
   <input class="btn btn-primary" type="submit" value="Editar" name="editar"> 
   <button type="reset" class="btn btn-danger">Borrar</button>
   </div>
   </div>            
</form>


<?php 

$conexion = mysqli_connect("localhost","root","","remis");


if (isset($_POST['editar'])) {
  # code...


$nombre = $_POST['pers_nombres'];
$apellido = $_POST['pers_apellidos'];
$documento = $_POST['pers_nroDocumento'];
$cuil = $_POST['pers_CUIL'];
$fecha_Nacimiento = $_POST['pers_fechaNacimiento'];
$nacionalidad= $_POST['pers_nacionalidad'];
$genero=$_POST['genero'];
$tipo_documento = $_POST['pers_tipoDocumento'];
$estadoCivil = $_POST['pers_estadoCivil'];
$fecha_registro = $_POST['pers_fechaRegistro'];

$sql= "UPDATE `personas` SET `pers_nombres`='$nombre',`pers_apellidos`='$apellido',`pers_nroDocumento`='$documento',`pers_CUIL`='$cuil',`pers_fechaNacimiento`='$fecha_Nacimiento',`pers_genero`='$genero',`pers_estadoCivil`='$estadoCivil',`pers_nacionalidad`='$nacionalidad',`pers_fechaRegistro`='fecha_registro',`pers_tipoDocumento`='$tipo_documento' WHERE `id`='$id'";

$resultado = mysqli_query($conexion,$sql);


$provincia=$_POST['provincia'];

$sql5="UPDATE `provincias` SET `nombre_provincia`='$provincia' WHERE `id`='$id'";
$resultado1 = mysqli_query($conexion,$sql5);



$localidad = $_POST['localidad'];

$sql9="UPDATE `localidad` SET `nombre_localidad`='$localidad'WHERE `id`='$id'";
$resultado9=mysqli_query($conexion,$sql9);



$nombre_barrio = $_POST['nombre_barrio'];
$sql6="UPDATE `barrios` SET `nombre_barrio`='$nombre_barrio' WHERE `id`='$id'";
//$sql6="INSERT INTO barrios(nombre_barrio) VALUES ('$nombre_barrio')";
$resultado6= mysqli_query($conexion,$sql6);
//$sql5="INSERT INTO provincias(nombre_provincia) VALUES ('$provincia')";


$domicilioManz = $_POST['dom_manzana'];
$domicilioCasa = $_POST['dom_casa'];
$domicilioPiso = $_POST['dom_piso'];
$domicilioCalle = $_POST['dom_calle'];
$domicilioDepartamento= $_POST['dom_departamento'];
$domicilioAltura = $_POST['dom_altura'];


$sql3= "UPDATE `domicilios` SET `dom_manzana`='$domicilioManz',`dom_casa`='$domicilioCasa',`dom_piso`='$domicilioPiso',`dom_calle`='$domicilioCalle',`dom_departamento`='$domicilioDepartamento',`dom_altura`='$domicilioAltura' WHERE `id`='$id'";

//$sql3= "INSERT INTO domicilios(dom_manzana, dom_casa, dom_piso,dom_calle,dom_departamento,dom_altura) VALUES ('$domicilioManz','$domicilioCasa','$domicilioPiso','$domicilioCalle','$domicilioDepartamento','$domicilioAltura')";

$resultado3 = mysqli_query($conexion,$sql3); 



$tipo = $_POST['tipo'];
$comunic_contactos = $_POST['cont_contactos'];
$correo = $_POST['correo'];

$sql7="UPDATE `contactos` SET `cont_contactos`='$comunic_contactos',`correo`='$correo',`tipo_contacto`='$tipo' WHERE `id`='$id'";
//$sql7 = "INSERT INTO contactos(cont_contactos, correo) VALUES ('$comunic_contactos','$correo')";
$resultado7= mysqli_query($conexion,$sql7);



if($resultado && $resultado1 && $resultado9 && $resultado6 && $resultado3 && $resultado7){


  header('location:mostrar_datosPersonales6.php');

}else{

  //header('location:mostrar_datosPersonales6.php');
}


}

 ?>


  
      
      


</div>



</div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->  
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014 <a href="https://adminlte.io">Muñoz Luz Maria.</a>.</strong>
    Reservado todos los derechos.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="FancyBox/source/jquery.fancybox.js"></script>

</body>
</html>