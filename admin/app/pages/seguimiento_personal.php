<?php
  include "app/items/DB.php";
  if (isset($_POST['agregar-seguimiento_personal'])) {
    $id_personal = $_POST['id-personal'];
    $id_proyecto_actual = $_POST['id-proyecto-actual'];
    $actividad_actual = $_POST['actividad-actual'];
    $consulta_insert_seguimiento_personal = "INSERT INTO seguimiento_personal
    (`id_personal`, `id_proyecto_actual`, `actividad_actual`) 
    VALUES 
    ('$id_personal', '$id_proyecto_actual', '$actividad_actual')";
     $resultado = mysqli_query($conexion, $consulta_insert_seguimiento_personal);
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
        HAY UN ERROR: <?= $consulta_insert_seguimiento_personal . mysqli_error($conexion) ?>.
      </div>
    <?php
    }
  }
  if (isset($_POST['editar-seguimiento_personal'])) {
    $id_seguimiento_personal = $_POST['id-seguimiento-personal'];
    $id_personal = $_POST['id-personal'];
    $id_proyecto_actual = $_POST['id-proyecto-actual'];
    $actividad_actual = $_POST['actividad-actual'];
    $consulta_update_seguimiento_personal = "UPDATE seguimiento_personal SET  
    `id_personal`='$id_personal', `id_proyecto_actual`='$id_proyecto_actual',
     `actividad_actual`='$actividad_actual'
    WHERE `id_seguimiento_personal`='$id_seguimiento_personal' LIMIT 1 ";
    $resultado = mysqli_query($conexion,$consulta_update_seguimiento_personal);
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
        HAY UN ERROR: <?= $consulta_update_seguimiento_personal . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  if (isset($_POST['eliminar-seguimiento_personal'])) {
    $id_seguimiento_personal = $_POST['id-seguimiento-personal'];
    $consulta_delete_seguimiento_personal = "DELETE FROM seguimiento_personal WHERE `id_seguimiento_personal`='$id_seguimiento_personal' LIMIT 1 ";
    $resultado = mysqli_query($conexion,  $consulta_delete_seguimiento_personal );
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
        HAY UN ERROR: <?=$consulta_delete_seguimiento_personal  . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }?>
<div class="d-flex justify-content-between">
    <h4 class="text-primary fw-bolder fs-2 my-0">Seguimiento Personal <i class='bx bx-group nav_icon bx-flashing fs-3'></i></h4>
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="datos_modal_agregar()">
      Agregar Seguimiento Personal
    </button>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">APISOFT Seguimiento Personal</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="body_modal_agregar">
          
        </div>
      </div>
    </div>
  </div>
  <?php
 $consulta_select_seguimiento_personal= "SELECT * FROM seguimiento_personal ORDER BY `ID_seguimiento_personal` ASC";
$resultado_consulta = mysqli_query($conexion, $consulta_select_seguimiento_personal);
?>
<hr>
<table class="table table-striped table-light table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id Seguimiento Personal</th>
      <th scope="col">Id Personal</th>
      <th scope="col">Id Proyecto Actual</th>
      <th scope="col">Actividad Actual</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $seguimiento_personal_contar = 1;
    while ($datos_array = mysqli_fetch_array($resultado_consulta)) {
    ?>
      <tr>
        <th scope="row"><?= $seguimiento_personal_contar ?></th>
        <td class="text-center"><?php echo $datos_array['id_seguimiento_personal']; ?></td>
        <td><?php echo $datos_array['id_personal']; ?></td>
        <td><?php echo $datos_array['id_proyecto_actual']; ?></td>
        <td><?php echo $datos_array['actividad_actual']; ?></td>
        <td class="">
          <div class="d-flex ">
          <button onclick="mostrar_datos_modal_editar(<?php echo $datos_array['id_seguimiento_personal']; ?>)" class="btn btn-outline-info" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-editar">
            <i class='bx bx-edit nav_icon'>Editar</i>
          </button>
          &nbsp;
          <button onclick="mostrar_datos_modal_eliminar(<?php echo $datos_array['id_seguimiento_personal']; ?>)" class="btn btn-outline-danger" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-eliminar">
            <i class='bx bx-trash nav_icon'>Eliminar</i>
          </button>
         </div>
        </td>
      </tr>
    <?php 
    $seguimiento_personal_contar++;
    }
    ?>
  </tbody>
</table>
<div class="modal fade" id="modal-editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Seguimiento Personal</h5>
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
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Seguimiento Personal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_eliminar"></div>
    </div>
  </div>
</div>
<script>
    function mostrar_datos_modal_editar(id_seguimiento_personal) {
      body_modal_editar = document.getElementById('body_modal_editar')
      fetch('<?=$_dominio?>apisoft-web/admin/app/ajax/ajax.seguimiento.personal.editar.php?codigo_seguimiento_personal=' + id_seguimiento_personal)
        .then(response => response.text())
        .then(data => {
          body_modal_editar.innerHTML = data
        })
    }

    function mostrar_datos_modal_eliminar(id_seguimiento_personal) {
      body_modal_eliminar = document.getElementById('body_modal_eliminar')
      fetch('<?=$_dominio?>apisoft-web/admin/app/ajax/ajax.seguimiento.personal.eliminar.php?codigo_seguimiento_personal=' + id_seguimiento_personal)
        .then(response => response.text())
        .then(data => {
          body_modal_eliminar.innerHTML = data
        })
    }

    function datos_modal_agregar() {
      body_modal_agregar = document.getElementById('body_modal_agregar')
      fetch('<?=$_dominio?>apisoft-web/admin/app/ajax/ajax.seguimiento.personal.agregar.php')
        .then(response => response.text())
        .then(data => {
          body_modal_agregar.innerHTML = data
        })
    }
</script>