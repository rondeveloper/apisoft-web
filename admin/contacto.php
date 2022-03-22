<link rel="shortcut icon" type="image/icon" href="../assets/img/logo-apisoft.png"/>
<?php
$alert="";
  include "app/items/DB.php";
  if (isset($_POST['agregar-consulta'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $consulta_insert = "INSERT INTO consultas
    (`nombre`, `apellido`,`email`, `telefono`,`mensaje`) 
    VALUES 
    ('$nombre', '$apellido','$email', '$telefono','$mensaje')";
     $resultado = mysqli_query($conexion, $consulta_insert);
    if ($resultado) {
      $alert='<div class="alert alert-success mx-auto w-50 text-center alert-dismissible fade show" role="alert">
      <strong>EXITO!</strong> YA SE AGREGO CORRECTAMENTE
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } 
  }
  ?>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
    <title>Contacto</title>
  </head>
  <body>
  <?php
   include 'app/items/header.modulos.secondary.php';
   ?>
    <section>
      <div class="contacto-bg">
        <p>CONTÁCTENOS</p>
        <div>
          <div>
            Nos encantaría saber de usted. Por favor llámenos o envíenos un
            correo electrónico con sus preguntas, comentarios o sugerencias.
            Queremos escuchar lo que tienes que decir.
          </div>
        </div>
        <div class="arrow">
          <a href="#btn-empezar"
            ><i class="bx bx-lg bx-arrow-to-bottom bx-fade-up"></i
          ></a>
        </div>
      </div>
    </section>
    <section>
      <div class="inf-contacto">
        <div class="inf-text">PONERSE EN CONTACTO</div>
        <div class="inf-contenido">
          <div class="inf-imagen"></div>
          <h2>Llámanos</h2>
          <p>Telefono: +591 62329106</p>
        </div>
        <div class="inf-contenido">
          <div class="inf-imagen-2"></div>
          <h2>ENVÍENOS UN CORREO ELECTRÓNICO</h2>
          <p>Correo:apisoft.bolivia@gmail.com</p>
        </div>
        <div class="inf-contenido">
          <div class="inf-imagen-3"></div>
          <h2>VISÍTANOS</h2>
          <p>
            Av.20 Octubre <br />Piso 8 of.1 esq. Mundo<br />
            La Paz - BOLIVIA
          </p>
        </div>
      </div>
    </section>
    <section id="btn-empezar">
      <div class="empezar-bg">
        <div>
        <p class="empezar-text" >
          HABLE CON NOSOTROS SOBRE SU PRÓXIMO SITIO WEB
        </p>
        <?=$alert?>
        <div class="emp btn btn-info btn-lg d-block mx-auto"  data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="datos_modal_agregar()">EMPEZAR</div></div>
      </div>
    </section>
      
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">APISOFT</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="body_modal_agregar">
          
        </div>
      </div>
    </div>
  </div>
    <a href="#" class="go-up"
      ><i class="bx bx-up-arrow-circle bx-fade-up bx-lg"></i
    ></a>
    <?php
    include 'app/items/footer.secondary.php';
    ?>
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
    <script>
    function datos_modal_agregar() {
      body_modal_agregar = document.getElementById('body_modal_agregar')
      fetch('<?=$_dominio?>admin/app/ajax/ajax.consulta.agregar.php')
        .then(response => response.text())
        .then(data => {
          body_modal_agregar.innerHTML = data
        })
    }
    </script>
    
  </body>
</html>
