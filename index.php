<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Sistema midland</title>
</head>
<body style="background-color:#90caf9">
<!--navbar-->
<?php include("./components/navbar.php")?>
<!--navbar-->

<!--botones-->
<br><br><br>
<div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
   <div class="row">
    <div class="col-sm-5 ">
    <div class="card text-white bg-primary mb-3 " style="max-width: 18rem;" onclick="window.location.replace('./pages/socios.php')" >
        <div class="card-header"></div>
        <div class="card-body boton">
            <h3 class="card-title  fuente"><i class="fa fa-users"></i> Socios</h3>
            <p class="card-text" ></p>
        </div>
        </div>
    </div>
    
    <div class="col-sm-5">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;  " onclick="window.location.replace('./pages/actividades.php')"  >
        <div class="card-header"></div>
        <div class="card-body boton">
            <h3 class="card-title fuente"><i class="fa fa-calendar"></i> Actividades</h3>
        </div>
        </div>
    </div>
   <div class="col-sm-5" data-bs-toggle="modal" href="#exampleModalToggle">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;  ">
        <div class="card-header"></div>
        <div class="card-body boton">
            <h3 class="card-title fuente"><i class="fa fa-database"></i> Backup</h3>
        </div>
        </div>
            </div>
             <!--
            <div class="col-sm-5">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;  ">
        <div class="card-header"></div>
        <div class="card-body boton">
            <h3 class="card-title fuente">Eliminar alumnos</h3>
        </div>
        </div>
            </div>
   </div>-->
</div></div></div></div>
<!--botones-->





<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-success" style="color: white;" id="modal-bkp">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel" ><i class="fa fa-database"></i> Backup</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-modal"></button>
      </div>
      <div class="modal-body">
        Si desea realizar una copia de seguridad presione <strong>Continuar.</strong>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" onclick="sendRequest()">Continuar</button>
      </div>
    </div>
    <div id="loader"  style="display:none;" class="modal-dialog modal-dialog-centered">
        <h1 style="color: white">Cargando...</h1>
        <div class="spinner-grow text-primary" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-light" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-primary" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-light" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-primary" role="status">
          <span class="sr-only">Loading...</span>
        </div>
    </div>
  </div>
 
</div>
















<?php
    include("./components/footer.php");


?>
<script src="./plugins/jquery/jquery.min.js"></script>

<script src="./js/sendBackupRequest.js"></script>
</body>
</html>