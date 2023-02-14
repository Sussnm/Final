<?php
include_once "../M/conexion.php";
 include_once "../M/data.php";
$con = new Conexion();
$data = new Data($con->conectar());
$arreglosEstados = $data->getEstados();
$arreglosCentros = $data->getCentros();


/////QR/////////
$rs = $data->getActivo();



foreach ($rs as $i) {
  

    
    $valor =" Valor: " .$i['valor']. " Fecha: " .$i['fecha']. 
    " Detalle: " .$i['descripcion']. " Estado: " .$i['estado']. 
    " Tipo de Activo: " .$i['activo']. " Centro de Costo: ".$i['centrocosto']. 
    " Serie: " . $i['num_serie'].
     " Marca: " .$i['marca'].    " Modelo: " .$i['modelo'].": correlativo 000".$i['id'];
     ;


}

echo($valor);



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
 <style>
  .botonsito{
    background-color: #696cff;
     color: white ;

    border: none;
    box-shadow: 0 2px 4px 0 rgb(105 108 255 / 40%);

transform: translateY(-1px);
margin-right: 0.5rem !important;

border: 1px solid transparent;
    padding: 0.4375rem 1.25rem;
    font-size: 0.9375rem;
    border-radius: 0.375rem;
    transition: all 0.2s ease-in-out;




  }
</style> 
   
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
    <link rel="stylesheet" href="../vendors/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../vendors/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../vendors/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../vendors/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../vendors/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../vendors/assets/vendor/js/helpers.js"></script>



    <!---calendario----->

  

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../vendors/assets/js/config.js"></script>


    <!--calendario---->

    <!-- <link href="../vendors/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
      <script src="js/bootstrap-datetimepicker.min.js"></script> -->

 <!--Puedes descargar el script e incluirlo de manera local si así prefieres-->
 <script src="https://unpkg.com/qrious@4.0.2/dist/qrious.js"></script>







<style>

.imagen{

  margin-left: auto;
  margin-right: auto;
  width: 50%;

}

</style>

<style>

  .botonsito{

  
  width: 110%;


  }
</style>



  </head>

  <body>

 




    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="../../../index.html" class="app-brand-link">
             
              <span class="app-brand-text demo menu-text fw-bolder ms-2"></span>

              <div class="img-container">
              <img style="margin-left:0px" width="70%"  height="70%"    src="../vendors/imagenes/logocormun.png" alt="">
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
                  <a href="V/../ingresarActivo.php" class="menu-link">
                    <div data-i18n="Account">Ingreso Activo</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../V/reportes/reportes.php" class="menu-link">
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
                  <a href="../V/entregadeActivo.php" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Entrega de Activo</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../V/reportes/reporte_Entrega.php" class="menu-link" target="_blank">
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
            class=""
            id="layout-navbar"
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
                  <!-- <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../vendors/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a> -->
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
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Gestion de Activos /</span> Ingresar Activo</h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Registro</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="reportes.php"
                        >  <i class="menu-icon tf-icons bx bx-detail"></i> Reporte de Activos</a
                      >
                    </li>
                    
                  </ul>
                  <div class="card mb-4">
                    <h5 class="card-header">Ingrese Activo</h5>
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
                      <form id="formAccountSettings" method="post"  action="../C/tablaController.php?method=formAccountSettings">
                       
                    



                      <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Activo</label>
                            <input
                              class="form-control"
                              type="text"
                              id="tx_activo"
                              name="tx_activo"  required
                              value=""
                              autofocus
                            

                            />
                      

                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Marca</label>
                            <input class="form-control" type="text" name="tx_marca" id="tx_marca" value="" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Modelo</label>
                            <input
                              class="form-control"
                              type="text"
                              id="tx_modelo"
                              name="tx_modelo"  required
                              value=""
                              
                            />
                            

                          </div>

    
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Serie</label>
                            <input
                              type="text"
                              class="form-control"
                              id="tx_serie"
                              name="tx_serie"  required
                              value=""
                            />
                          </div>

                          <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Valor</label>
                            <input
                              class="form-control"
                              type="text"
                              id="tx_valor"
                              name="tx_valor"  required
                              value=""
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Detalle</label>
                            <input class="form-control" type="text" name="tx_detalle"  required id="tx_detalle" value="" />
                          </div>
                          <div class="mb-3 col-md-6">
                           <label class="form-label" for="country">Estado</label>
                            <select id="tx_estado" name="tx_estado" class="select2 form-select">
                              <option value="0" disabled>Select</option>
                              <?php
for($i = 0; $i < count($arreglosEstados); $i++){
echo'<option value="'.$arreglosEstados[$i][0].'">'.$arreglosEstados[$i][1].'</option>';
				}
				?>
                             </select>
                          </div>
                          
                          <!-- <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Detalle</label>
                            <input class="form-control" type="text" name="tx_detalle" id="tx_detalle" value="" />
                          </div> -->
                          <div class="mb-3 col-md-6">
                           <label class="form-label" for="country">Centro de Costo</label>
                            <select id="tx_centro" name="tx_centro"  required   class="select2 form-select">
                              <option value="0" disabled>Select</option>
                              <?php
for($i = 0; $i < count($arreglosCentros); $i++){
echo'<option value="'.$arreglosCentros[$i][0].'">'.$arreglosCentros[$i][1].'</option>';
				}
				?>
                             </select>
                          </div>
                         
                        
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Fecha de Recepcion</label>
                            <input
                              type="date"
                              class="form-control"
                              id="tx_date"
                              name="tx_date" required
                            
                              maxlength="6" >
                          </div>


                              <div class="mb-3 col-md-6">
                          
                            <!-- <input type="text" class="form-control" value ="<?php echo $valor;?>" id="tx_qr" name="tx_qr"  /> -->
                          <input type="hidden" class="form-control" value ="" id="tx_qr" name="tx_qr"  required   />
                         
                          </div>
                          

                              

                          

                         </div>
                        <div class="mt-2">
                       <button type="submit" class="btn btn-primary me-2"  id="guardar"  >Añadir Registro</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  <div class="card">

                  

      

<!------------------------------Generador qr----------------------------------------------------------------------->

<div class="col-md-6 col-lg-4 mb-3"  style= "margin: 0 auto"; >
<div class="card h-400"  >
  <br> 
 <h3 style= "text-align: center">Generar Códigos QR </h3>
    <input hidden id="txt" type="text"value ="<?php echo $valor;?>">
    <br>
    <div class="imagen">
    <img alt="Código QR" id="codigo" 
                       
                       >
    <br>
    <button type="button"    class="botonsito" id="btnDescargar">Descargar</button>
    <div class="d-flex justify-content-center"  style="width: 150px;"  >
    <script>
        var valorrs = document.getElementById("txt").value;
        
        const $imagen = document.querySelector("#codigo"),
            $boton = document.querySelector("#btnDescargar");
       
        new QRious({
            element: $imagen,
            value: valorrs, // La URL o el texto
            size: 250,
            backgroundAlpha: 255, // 0 para fondo transparente
            foreground: "#553182", // Color del QR
            level: "M", // Puede ser L,M,Q y H (L es el de menor nivel, H el mayor)

        

        });
        $boton.onclick = () => {
            const enlace = document.createElement("a");
            enlace.href = $imagen.src;
            enlace.download = "Código QR generado desde parzibyte.me.png";
            enlace.click();
        };
    </script>


</div>


</div>                

</div></div>

                </div>
              </div>
            </div>

             </div> <!-- / Content -->


           























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