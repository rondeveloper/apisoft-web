
<?php
session_start();

include "app/items/variables.php";
include "app/items/DB.php";

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
  <link rel="shortcut icon" type="image/icon" href="../assets/img/logo-apisoft.png"/>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

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

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand p-0 d-flex justify-content-between">
      <div class="logo-apisoft"></div>
    
      <div class="dropdown d-none d-md-block">
        <img class="d-none d-lg-inline rounded-circle ml-1" width="32px" src="../assets/img/mario-casas-3.jpg" alt="MA"/>
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
            <a href="<?=$_dominio?>index.php?tog=palanca"><span class="oi oi-account-logout mr-2"></span>GO APISOFT
            </div></a>
            
        </div>
        <div class="col-lg-10 col-md-9 p-4">
        <script>
        function cerrar_session() {
            fetch('<?= $_dominio ?>admin/app/ajax/ajax.app.cerrar.php')
                .then(response => response.text())
                .then(data => {
                    window.location = 'login.php'
                })
        }
    </script>