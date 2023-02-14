<!DOCTYPE html>


<?php 
include_once "../../M/conexion.php";
include_once "../../M/data.php";
$con = new Conexion();
$data = new Data($con->conectar());

$arreglosCentros = $data->getCentros();


/////QR/////////





?>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
<!-- <style>
  .botonsito{
    background-color: #553182;
    
  }
</style> -->
  
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Gestion de Activos</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../vendors/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../../vendors/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../vendors/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../vendors/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../vendors/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <?php
include_once "../../M/conexion.php";
 include_once "../../M/data.php";
$con = new Conexion();
$data = new Data($con->conectar());

$arreglosCentros = $data->getCentros();


/////QR/////////




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
<!-- <style>
  .botonsito{
    background-color: #553182;
    
  }
</style> -->
  






<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Gestion de Activos</title>

    <meta name="description" content="" />

    <!-- LOGOPEQUEÑ000000 -->
    

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../../vendors/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../vendors/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../vendors/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />


    <link rel="stylesheet" href="../../vendors/assets/css/demo.css" />
  <!-- Columnas   -->
    <link rel="stylesheet" href="../../vendors/SCSS/NUEVO/css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../vendors/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- validador Rut -->

    <script src="jquery.rut.js"></script>


    <!-- Helpers -->
    <script src="../../vendors/assets/vendor/js/helpers.js"></script>



    <!---calendario----->

  

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../vendors/assets/js/config.js"></script>



<style>
 .card {
  border-top-width: 10px;
  border-right-width: 1em;
  border-bottom-width: thick;
  border-left-width: thin;
}

</style>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>




 


 <script src="https://unpkg.com/qrious@4.0.2/dist/qrious.js"></script>

  </head>

  <body>
  <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="../V/index.html" class="app-brand-link">
             
              <span class="app-brand-text demo menu-text fw-bolder ms-2"></span>

              <div class="img-container">
              <img style="margin-left:0px" width="70%"  height="70%"    src="../../vendors/imagenes/logocormun.png" alt="">
              </div>


            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="../index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Gestion de Activos</div>
              </a>
            </li>

            <!-- Layouts -->
           

            
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Entradas de Activos</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item active">
                  <a href="v/ingresarActivo.php" class="menu-link">
                    <div data-i18n="Account">Ingreso Activo</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../reportes/reportes.php" class="menu-link">
                    <div data-i18n="Notifications">Reporte de Activos</div>
                  </a>
                </li>
                
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Authentications">Asignaciones de Activos</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/entregadeActivo.php" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Entrega de Activo</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="reportes/reporte_Entrega.php" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Reporte de Entrega</div>
                  </a>
                </li>
                
              </ul>
            </li>
            
            <!-- Components -->
           

            <!-- Extended components -->
           

            <!-- Forms & Tables -->
            
            <!-- Forms -->
            
           
            <!-- Tables -->
            
            <!-- Misc -->
            
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            
            
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
                

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
               
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../vendors/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"></span>
                            <small class="text-muted"></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Ingrese Activo</span>
                      </a>
                    </li>
                    
                    
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Asignaciones de Activos /</span> Entrega de Activo</h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Registro</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="reporte_Entrega.php"
                        ><i class="bx bx-bell me-1"></i> Reporte de Entrega</a
                      >
                    </li>
                    
                  </ul>
                  <div class="card mb-4">
                    <h5 class="card-header">Datos de Usuarios</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                      
                        <div class="button-wrapper">
                          
                          </label>
                         

                          <p class="text-muted mb-0"></p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">


<!--------  -------------------------------------------FORMULARIO------------------------------------------------------------->
                      <form id="entregadeActivo" method="post"  action="\Final\C\entregaCtrl.php">
                        
                      
                      <input type="hidden" name="id_activo" value="<?php  echo $_REQUEST['id_activo']?>"/>
                      <input type="hidden"
                              id="metodo"
                              name="metodo"
                              value="editar"
                            />
                        
                      <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">RUT</label>
                            <input
                              class="form-control"
                              type="test"
                              id="rut_consigna"
                              name="rut_consigna"
                              value="<?php  echo $_REQUEST['rut_consignatario']?>"
                              maxlength="12"
                              autofocus
                          
                             
                            />
                      

                          </div>
                          
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Nombre Completo Consignatario</label>
                            <input class="form-control" type="text" name="tx_usuCon" id="tx_usuCon"  size="10"  value="<?php  echo $_REQUEST['nombre_consignatario']?>"/>
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Cargo</label>
                            <input class="form-control" type="text" name="tx_cargoConsigna" id="tx_cargoConsigna" size="10"  value="<?php  echo $_REQUEST['cargo_consignatario']?>" />
                          </div>


                          <div class="mb-3 col-md-6">
                            <label for="centro" class="form-label">Centro de Costo</label>
                            <select id="tx_centro" name="tx_centro" class="select2 form-select">
                            <option value="0" disabled>Select</option>
                              <?php
for($i = 0; $i < count($arreglosCentros); $i++){
echo'<option value="'.$arreglosCentros[$i][0].'"  '.($_REQUEST["centrocosto"]==$arreglosCentros[$i][0] || $_REQUEST["centrocosto"]==$arreglosCentros[$i][1]?"selected":"").'>'.$arreglosCentros[$i][1].'</option>';
				}
				?>
                             </select>
                            
                          </div>
                          



                          <div class="mb-3 col-md-6">
                            <label for="centro" class="form-label">Equipo</label>
                            <input
                              type="text"
                              class="form-control"
                              id="tx_equipo"
                              name="tx_equipo"
                              value="<?php  echo $_REQUEST['nom_activo']?>"
                            />
                          </div>


    
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Codigo Equipo</label>
                            <input
                              type="text"
                              class="form-control"
                              id="tx_codigoEquipo"
                              name="tx_codigoEquipo"
                              value="<?php  echo $_REQUEST['id_activo']?>"
                            />
                          </div>

                          <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Fecha de Entrega</label>
                            <input
                              class="form-control"
                              type="date"
                              id="tx_fechaentrega"
                              name="tx_fechaentrega"
                              value="<?php  echo $_REQUEST['fecha_entrega']?>"
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Detalle</label>
                            <input class="form-control" type="text" name="tx_detalle" id="tx_detalle"  value="<?php  echo $_REQUEST['detalle']?>" />
                          </div>




    <!-------EMPIEZA FORMULARIO CONSIGNATARIO--------------------------------------------------------->                      
   
                          
    

                     <div class="mb-3 col-md-6" >
                          
                            <label for="lastName" class="form-label">Rut</label>
                            <input class="form-control" type="text" name="tx_rutAsigna" id="tx_rutAsigna"  value="<?php  echo $_REQUEST['rut_asigna']?>" />
                          </div>
          
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Nombre Completo de Asignatario</label>
                            <input class="form-control" type="text" name="tx_nomAsigna" id="tx_nomAsigna"  value="<?php  echo $_REQUEST['nombre_asigna']?>" />
                          </div>
                        
                          <div class="mb-3 col-md-6">
                          <label for="lastName" class="form-label">Cargo</label>
                            <input class="form-control" type="text" name="tx_cargoAsigna" id="tx_cargoAsigna"  value="<?php  echo $_REQUEST['cargo_asigna']?>" />
                          </div>

<!--                           
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Cargo</label>
                            <input class="form-control" type="text" name="tx_cargoAsigna" id="tx_cargosigna" value="" />
                          </div> -->
                        
              <!-- ----------------------------TERMINNA EL FORM ASIGNATARIO---------------------------- -->               
                          </div>
                         </div>
                        <div class="mt-2">
                       <button type="submit" class="btn btn-primary me-2"  id="guardar"  >Añadir Registro</button>
                          <button type="reset" class="btn btn-outline-secondary">Cerrar</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                 
                

             


                </div>
              </div>
         
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                
                 
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
    <!-- / Layout wrapper -->

  

    







    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../vendors/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../vendors/assets/vendor/libs/popper/popper.js"></script>
    <script src="../vendors/assets/vendor/js/bootstrap.js"></script>
    <script src="../vendors/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../vendors/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../vendors/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../vendors/assets/js/pages-account-settings-account.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
  </body>
</html>
