<?php
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
      ?>
      <div class="alert alert-success mx-auto w-50 text-center alert-dismissible fade show" role="alert">
        <strong>EXITO!</strong> YA SE AGREGO CORRECTAMENTE
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

    <?php
    } else {
    ?>
      <div class='alert alert-danger'>
        HAY UN ERROR: <?= $consulta_insert_Consulta . mysqli_error($conexion) ?>.
      </div>
    <?php
    }
  }
  if (isset($_POST['editar-consulta'])) {
    $id_consulta = $_POST['id-consulta']; 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $consulta_update = "UPDATE consultas SET  
    `nombre`='$nombre', `apellido`='$apellido',
     `email`='$email', `telefono`='$telefono', 
     `mensaje`='$mensaje'
    WHERE `id_consulta`='$id_consulta' LIMIT 1 ";
    $resultado = mysqli_query($conexion,$consulta_update);
    if ($resultado) {
    ?>
      <div class="alert alert-success mx-auto w-50 text-center alert-dismissible fade show" role="alert">
        <strong>EXITO!</strong> YA SE ACTUALIZO CORRECTAMENTE
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php
    } else {
    ?>
      <div class='alert alert-danger'>
        HAY UN ERROR: <?= $consulta_update . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  if (isset($_POST['eliminar-consulta'])) {
    $id_consulta = $_POST['id-consulta'];
    $consulta_delete = "DELETE FROM consultas WHERE `id_consulta`='$id_consulta' LIMIT 1 ";
    $resultado = mysqli_query($conexion,  $consulta_delete );
    if ($resultado) {
    ?>
      <div class="alert alert-success mx-auto w-50 text-center alert-dismissible fade show" role="alert">
        <strong>EXITO!</strong> YA SE ELIMINO CORRECTAMENTE
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php
    } else {
    ?>
      <div class='alert alert-danger'>
        HAY UN ERROR: <?=$consulta_delete . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  ?>
<div class="d-flex justify-content-between">
    <h4 class="text-primary fw-bolder fs-2 my-0">Consultas <i class='bx bx-search bx-flashing fs-3' ></i></h4>
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="datos_modal_agregar()">
      Agregar Consulta
    </button>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">APISOFT Consulta</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="body_modal_agregar">
        </div>
      </div>
    </div>
  </div>
  <?php
 $consulta_select_consulta= "SELECT * FROM consultas ORDER BY `id_consulta` ASC";
$resultado_consulta = mysqli_query($conexion, $consulta_select_consulta);
?>
<hr>
<table id="mytable" class="table table-striped table-light table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id Consulta</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Mensaje</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $contar = 1;
    while ($datos_array = mysqli_fetch_array($resultado_consulta)) {
    ?>
      <tr>
        <th scope="row"><?= $contar ?></th>
        <td class="text-center"><?php echo $datos_array['id_consulta']; ?></td>
        <td><?php echo $datos_array['nombre']; ?></td>
        <td><?php echo $datos_array['apellido']; ?></td>
        <td><?php echo $datos_array['email']; ?></td>
        <td><?php echo $datos_array['telefono']; ?></td>
        <td><?php echo $datos_array['mensaje']; ?></td>
      
        <td class="">
          <div class="d-flex ">
            <div>
          <button onclick="mostrar_datos_modal_editar(<?php echo $datos_array['id_consulta']; ?>)" class="btn btn-outline-info" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-editar">
            <i class='bx bx-edit nav_icon'>Editar</i>
          </button>
          &nbsp;
          <button onclick="mostrar_datos_modal_eliminar(<?php echo $datos_array['id_consulta']; ?>)" class="btn btn-outline-danger" id="btn_eliminar" type="button" data-bs-toggle="modal" data-bs-target="#modal-eliminar">
            <i class='bx bx-trash nav_icon'>Eliminar</i>
          </button>
          &nbsp; </div>
          <div>
         
          </div>
         </div>
        </td>
      </tr>
    <?php 
    $contar++;
    }
    ?>
  </tbody>
</table>
<div class="modal fade" id="modal-editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Consulta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_editar"></div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Consulta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_eliminar"></div>
    </div>
  </div>
</div>
<script>
    function mostrar_datos_modal_editar(id_consulta) {
      body_modal_editar = document.getElementById('body_modal_editar')
      fetch('<?=$_dominio?>admin/app/ajax/ajax.consulta.editar.php?codigo_consulta=' + id_consulta)
        .then(response => response.text())
        .then(data => {
          body_modal_editar.innerHTML = data
        })
    }

    function mostrar_datos_modal_eliminar(id_consulta) {
      body_modal_eliminar = document.getElementById('body_modal_eliminar')
      fetch('<?=$_dominio?>admin/app/ajax/ajax.consulta.eliminar.php?codigo_consulta=' + id_consulta)
        .then(response => response.text())
        .then(data => {
          body_modal_eliminar.innerHTML = data
        })
    }

    function datos_modal_agregar() {
      body_modal_agregar = document.getElementById('body_modal_agregar')
      fetch('<?=$_dominio?>admin/app/ajax/ajax.consulta.agregar.php?guardar-consulta=success')
        .then(response => response.text())
        .then(data => {
          body_modal_agregar.innerHTML = data
        })
    }
    
</script>
<script>
$(document).ready( function () {
    $('#mytable').DataTable();
} );
</script>