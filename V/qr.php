<?php



include_once "../M/conexion.php";

include_once "../M/data.php";

$con = new Conexion();
$data = new Data($con->conectar());



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../vendors/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../vendors/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../vendors/assets/css/demo.css" />

<style>
  .abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
}

.form {
  width: 450px;
  height: 450px;
}

h1 {
  text-align: center;
}

</style>


</head>
<body>
   
<h1> </h1>
<div class="container">
  <div class="abs-center">

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h1 class="card-title"  text-aligne>Imprime tu QR</h1>
        


        <div class="card">
  <div class="card-body">
    <h5 class="card-title">Imprime tu QR</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


      </div>
    </div>
  </div>
  </div>
  </div>

 











</body>
</html>
