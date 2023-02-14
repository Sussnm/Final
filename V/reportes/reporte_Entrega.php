
<?php



include_once "../../M/conexion.php";

include_once "../../M/data.php";

$con = new Conexion();
$data = new Data($con->conectar());



?>







<!DOCTYPE html>


<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>

  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Gestion de Activos</title>

    <meta name="description" content="" />



    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="..vendors/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../vendors/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../vendors/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../vendors/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../vendors/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- FONTS -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="https://kit.fontawesome.com/2de7b06ead.css" crossorigin="anonymous">

    <!-- Helpers -->
    <script src="../../vendors/assets/vendor/js/helpers.js"></script>


    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<!---PAGINATION TABLA---->

<link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css"/>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../vendors/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
              <div class="img-container">
              
              </div>
              </span>
              
              <img style="margin-left:0px" width="70%"  height="70%"    src="../../vendors/imagenes/logocormun.png" alt="">
           
           
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="../../index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Gestion de Activos</div>
              </a>
            </li>

            <!-- Layouts -->
            

              
            </li>

          
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Entradas de Activos</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="ingresarActivo.php" class="menu-link">
                    <div data-i18n="Account">Ingresar Activo</div>
                  </a>
                </li>
                <li class="menu-item active">
                  <a href="reporte/reportes.php" class="menu-link">
                    <div data-i18n="Notifications">Reporte de Activos</div>
                  </a>
                </li>
                <li class="menu-item">
                  
                  <a href="entregadeActivo.php" class="menu-link">
                  
                  <i class="menu-icon tf-icons bx bx-file"></i>

                    <div data-i18n="Connections">Asignaciones de Activos</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Entrega de Activo</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="auth-login-basic.html" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Reportes de Entrega</div>
                  </a>
                </li>
                
              </ul>
            </li>
            
            
            
            
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class=""
            id=""
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                

                <!-- User -->
                
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Asignaciones de Activos /</span> Reportes de Entrega
              </h4>

              <div class="row">
                <div class="col-md-12">
                  
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link" href="../ingresarActivo.php"
                        ><i class="bx bx-user me-1"></i> Registro</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"
                        ><i class="bx bx-bell me-1"></i> Reporte de Entrega</a
                      >
                    </li>
                    

                    <li class="nav-item">
                      <a class="nav-link" href="../generarExcel.php"
                      
                        ><i class="bx bx-link-alt me-1"></i> Imprimir PDF</a
                      >
                   
                    </li>

                    
                  </ul>
                  <form action="reportes.php"  id="Formfechas"   name="Formfechas"    method="get" accept-charset="utf-8">
                  <div class="row">
                    <div class="col">
                      <input type="date" name="fecha_inicio" class="form-control"  placeholder="fecha_inicio" required>
                    </div>
                    <div class="col">
                      <input type="date" name="fecha_final"   id="fecha_final"  class="form-control" placeholder="fecha_final" required>
                    </div>
                    <div class="col">
                     
                      <button type="submit" class="btn btn-primary mb-2">Filtrar</button>
                    </div>
                  </div>


                  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>


                </form>

<?php

 



?>
    <br /><br />
                  <div class="card">



                  
                    <!-- Notifications -->
                    <h5 class="card-header">Reporte activos</h5>
                    <div class="card-body">
                      
                      <div class="error"></div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered"   id="tablaresultado">
                        <thead>
                          <tr>

                          <th class="text-nowrap text-center"> Rut</th>
                          <th class="text-nowrap text-center"> Asignatario</th>
                          <th class="text-nowrap text-center"> Cargo</th>
                          <th class="text-nowrap text-center"> Centro de Costo</th>
                            <th class="text-nowrap text-center"> Equipo</th>
                            <th class="text-nowrap text-center"> Codigo de Equipo</th>
                            <th class="text-nowrap  text-center">Fecha de Entrega</th>
                            <th class="text-nowrap text-center"> Detalle</th>
                             <th class="text-nowrap  text-center">Rut</th>
                            <th class="text-nowrap text-center"> Consignatario</th>
                             <th class="text-nowrap text-center"> Cargo</th>
                             <th class="text-nowrap text-center">Opcioness</th>




                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                          <?php
if(empty($_GET['fecha_inicio'])){

  $list = $data->getTabla();
  foreach ($list as $fila){
         echo "<tr>";
  
      
  
       
         echo "<td>".$fila['rut_consignatario']. "</td>" ;
         echo "<td>".$fila['nombre_consignatario']. "</td>";
         echo "<td>".$fila['cargo_consignatario']. "</td>";
         echo "<td>".$fila['centrocosto']. "</td>";
         echo "<td>".$fila['nom_activo']. "</td>";
         echo "<td>".$fila['id_activo']. "</td>";
         echo "<td>".$fila['fecha_entrega']. "</td>";
         echo "<td>".$fila['detalle']. "</td>" ;
         echo "<td>".$fila['rut_asigna']. "</td>";
         echo "<td>".$fila['nombre_asigna']. "</td>";
         echo "<td>".$fila['cargo_asigna']. "</td>";
         echo"<td>


       

      
        









         <a href='../ediciones/editarEntrega.php?nombre_consignatario=".$fila['nombre_consignatario'].  "&rut_consignatario=".$fila['rut_consignatario'].  "&cargo_consignatario=".$fila['cargo_consignatario']. "&centrocosto=".$fila['centrocosto']."&id_activo=".$fila['id_activo']. "&nom_activo=".$fila['nom_activo']. "&fecha_entrega=".$fila['fecha_entrega'].   "&detalle=".$fila['detalle']. "&rut_asigna=".$fila['rut_asigna']. "&nombre_asigna=".$fila['nombre_asigna'].  "&cargo_asigna=".$fila['cargo_asigna']."'><button type='button' class ='btn btn-'>EDITAR</a>
         
         
         
         
         </td>"; 
        
        
        
          
          }
        
        }else{
        
        
          $fechainicio= $_GET['fecha_inicio'];
          $fechafinal = $_GET['fecha_final'];
                                    
          $listado = $data->getFecha($fechainicio,$fechafinal);
          foreach ($listado as $columna){
                 echo "<tr>";
          
              
          
                 echo "<td>".$fila['rut_consignatario']. "</td>" ;
                 echo "<td>".$fila['nombre_consignatario']. "</td>";
                 echo "<td>".$fila['cargo_consignatario']. "</td>";
                 echo "<td>".$fila['centrocosto']. "</td>";
                 echo "<td>".$fila['nom_activo']. "</td>";
                 echo "<td>".$fila['id_activo']. "</td>";
                 echo "<td>".$fila['fecha_entrega']. "</td>";
                 echo "<td>".$fila['detalle']. "</td>" ;
                 echo "<td>".$fila['rut_asigna']. "</td>";
                 echo "<td>".$fila['nombre_asigna']. "</td>";
                 echo "<td>".$fila['cargo_asigna']. "</td>";
                echo "<td>
                
                
                
                
                </td>"; 
               ;
               
            echo  "</tr>";
            
          
          }
        }
        
        
        
        
        ?>
  
     



      
<td>
                          </tr>
                        </tbody>
                      </table>
                      
                    </div>
                    <div class="card-body">
                     
                     
                    </div>
                    <!-- /Notifications -->
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  
                  
                  
                 
                </div>
                

      

              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / SCRIPTS DE LA TABLA-->
  
    <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
        <script src="../../vendors/js/tabla_ejemplo.js"></script>



   

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../vendors/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../vendors/assets/vendor/libs/popper/popper.js"></script>
    <script src="../../vendors/assets/vendor/js/bootstrap.js"></script>
    <script src="../../vendors/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../../vendors/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../../vendors/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
