<link rel="shortcut icon" type="image/icon" href="../assets/img/logo-apisoft.png"/>
<?php
session_start();
include "app/items/variables.php";
include "app/items/DB.php";
$mensaje="";
$mensaje_denegado="";
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $consulta_select_login = "SELECT * FROM usuarios WHERE `usuario`='$username' AND `password`='$password' LIMIT 1";
    $resultado = mysqli_query($conexion, $consulta_select_login);
    $datos_login = mysqli_num_rows($resultado);
    if($datos_login==1){
        $_SESSION['token-usuario']=true;
        $mensaje ="<div class='alert alert-success mx-auto text-uppercase text-center py-0' style='z-index:8;position:absolute; top:0;left:0;right:0;bottom:0;margin:auto; width:300px;height:50px;line-height:50px;'> usuario auntentificado</div>";
        echo "<script> 
          setTimeout(() => {
              window.location='index.php'
          },1500)
        </script>";
    }else{
        $mensaje_denegado= "<div class='py-0 alert alert-danger mx-auto text-uppercase text-center' style='z-index:8; position:absolute; top:100px; width:300px;height:50px;line-height:50px;'> acceso denegado</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio de Sesion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../assets/estilos.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
    <style>
        .btn-login{
            background-color: #006791; 
            border:#006791;
        }
        .btn-login:hover{
            background-color:#f5b102 ; border:#006791;
        }
        .login-form{
            width: 50vmin;
            background-color: rgba(255, 255, 255);
            opacity: 0.1;
            transition: all ease-in-out 4s;
        }
        .login-form:hover{
            opacity: 1;
        }
        main{
          position: absolute;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          width: 100%;
          height: 100%;
        }
        </style>
</head>
<body>

<main>
  <?=$mensaje?>
  <?=$mensaje_denegado?>
    <div class="container  ">
        <div class="row  mx-auto">
            <div class="col mt-5">
                <div class="login-form mt-5 p-4 rounded mx-auto" >
                    <form action="" method="post" class="row g-3" style="color: #006791; ">
                        <h4 class="text-center" >Ingreso de Usuario</h4>
                        <div class="col-12">
                            <label>Nombre de usuario</label>
                            <input type="text" name="username" class="form-control" placeholder="Nombre de usuario">
                        </div>
                        <div class="col-12">
                            <label>Contraseña</label>
                            <input type="password" name="password" class="form-control" placeholder="Contraseña">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-login btn-dark mx-auto d-block hover" >Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center"><a href="<?=$_dominio?>index.php?page=access" class="text-decoration-none">GO APISOFT</a></div>
    <div class="text-center fw-bolder text-light pt-5 mt-5">Para la Pasantia Formal de ApiSoft el Usuario:ron; Password:apisoft</div>
    </main>
    <div class="slider-box">
      <div class="main-img">
        <img src="../assets/img/log.jpg" alt="sample01-1" />
      </div>
      <ul class="thumb-img d-none">
        <li><img src="../assets/img/log.jpg" alt="sample01-1" /></li>
        <li><img src="../assets/img/log-2.jpg" alt="sample01-2" /></li>
        <li><img src="../assets/img/log-3.jpg" alt="sample01-3" /></li>
        <li><img src="../assets/img/log-4.jpg" alt="sample01-1" /></li>
        <li><img src="../assets/img/log-5.jpg" alt="sample01-2" /></li>
        <li><img src="../assets/img/log-6.jpg" alt="sample01-3" /></li>
      </ul>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="../assets/scripts.js"></script>
</body>
</html>