
<?php
session_start();
include "app/items/variables.php";
if (!isset($_SESSION['token-usuario'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ADMINISTRACION DE USUARIO</title>
  <link rel="stylesheet" href="assets/polished.min.css">
  <link rel="stylesheet" href="assets/iconic/css/open-iconic-bootstrap.min.css">
  <link rel="icon" href="assets/polished-logo-small.png">

  <style>
    .logo-apisoft{
      background-image: url('../assets/img/logo-apisoft.png');
      height: 50px;
      width: 150px;
      background-position: 0 -25px;
      margin-left: 30px;
      background-size: 100% 100px;
    }
    .grid-highlight {
      padding-top: 1rem;
      padding-bottom: 1rem;
      background-color: #5c6ac4;
      border: 1px solid #202e78;
      color: #fff;
    }

  </style>
</head>

<body>

    <nav class="navbar navbar-expand p-0 d-flex justify-content-between">
      <div class="logo-apisoft"></div>
    
      <div class="dropdown d-none d-md-block">
        <img class="d-none d-lg-inline rounded-circle ml-1" width="32px" src="../assets/img/mario-casas-3" alt="MA"/>
        <button class="btn btn-link btn-link-primary dropdown-toggle" id="navbar-dropdown" data-toggle="dropdown">
          Ronaldo Alcon
        </button>
        <div class="dropdown-menu dropdown-menu-right" id="navbar-dropdown">
        <a class="dropdown-item text-danger" href="#" onclick="cerrar_session()"><i class='bx bxs-exit bx-flashing fs-3'></i> CERRAR SESION</a>
        </div>
      </div>
    </nav>
  <div class="container-fluid h-100 p-0">
    <div style="min-height: 100%" class="flex-row d-flex align-items-stretch m-0">
        <div class="polished-sidebar bg-light col-12 col-md-3 col-lg-2 p-0 collapse d-md-inline" id="sidebar-nav">

            <?php
            require_once 'app/menu/menu-principal.php';
            ?>

            <div class="pl-3 d-none d-md-block position-fixed" style="bottom: 0px">
            <a href="<?=$_dominio?>apisoft-web/index.php?tog=palanca"><span class="oi oi-account-logout mr-2"></span>GO APISOFT
            </div></a>
            
        </div>
        <div class="col-lg-10 col-md-9 p-4">
        <script>
        function cerrar_session() {
            fetch('<?= $_dominio ?>apisoft-web/admin/app/ajax/ajax.app.cerrar.php')
                .then(response => response.text())
                .then(data => {
                    window.location = 'login.php'
                })
        }
    </script>