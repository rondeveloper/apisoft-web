<?php
  include "app/items/DB.php";
  if (isset($_POST['agregar-seguimiento_proyecto'])) {
    $id_proyecto = $_POST['id-proyecto'];
    $id_encargado = $_POST['id-encargado'];
    $id_programadores = $_POST['id-programadores'];
    $tareas_inicio = $_POST['tareas-inicio'];
    $tareas_final = $_POST['tareas-final'];
    $detalle_proyecto = $_POST['detalle-proyecto'];
    $consulta_insert_seguimiento_proyecto = "INSERT INTO seguimiento_proyectos
    (`id_proyecto`, `id_encargado`, `id_programadores`, `tareas_inicio`, `tareas_final`, `detalle_proyecto`) 
    VALUES 
    ('$id_proyecto', '$id_encargado', '$id_programadores', '$tareas_inicio', '$tareas_final', '$detalle_proyecto')";
     $resultado = mysqli_query($conexion, $consulta_insert_seguimiento_proyecto);
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
        HAY UN ERROR: <?= $consulta_insert_seguimiento_proyecto . mysqli_error($conexion) ?>.
      </div>
    <?php
    }
  }
  if (isset($_POST['editar-seguimiento_proyecto'])) {
    $id_seguimiento_proyecto = $_POST['id-seguimiento-proyecto'];
    $id_proyecto = $_POST['id-proyecto'];
    $id_encargado = $_POST['id-encargado'];
    $id_programadores = $_POST['id-programadores'];
    $tareas_inicio = $_POST['tareas-inicio'];
    $tareas_final = $_POST['tareas-final'];
    $detalle_proyecto = $_POST['detalle-proyecto'];
    $consulta_update_seguimiento_proyecto = "UPDATE seguimiento_proyectos SET  
    `id_proyecto`='$id_proyecto', `id_encargado`='$id_encargado',
     `id_programadores`='$id_programadores', `tareas_inicio`='$tareas_inicio', 
     `tareas_final`='$tareas_final', `detalle_proyecto`='$detalle_proyecto'
    WHERE `id_seguimiento_proyecto`='$id_seguimiento_proyecto' LIMIT 1 ";
    $resultado = mysqli_query($conexion,$consulta_update_seguimiento_proyecto);
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
        HAY UN ERROR: <?= $consulta_update_seguimiento_proyecto . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  if (isset($_POST['eliminar-seguimiento_proyecto'])) {
    $id_seguimiento_proyecto = $_POST['id-seguimiento-proyecto'];
    $consulta_delete_seguimiento_proyecto = "DELETE FROM seguimiento_proyectos WHERE `id_seguimiento_proyecto`='$id_seguimiento_proyecto' LIMIT 1 ";
    $resultado = mysqli_query($conexion,  $consulta_delete_seguimiento_proyecto );
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
        HAY UN ERROR: <?=$consulta_delete_seguimiento_proyecto  . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }?>
<div class="d-flex justify-content-between">
    <h4 class="text-primary fw-bolder fs-2 my-0">Seguimiento Proyectos <i class='bx bx-group nav_icon bx-flashing fs-3'></i></h4>
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="datos_modal_agregar()">
      Agregar Seguimiento Proyecto
    </button>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">APISOFT Seguimiento Proyecto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="body_modal_agregar">
          
        </div>
      </div>
    </div>
  </div>
  <?php
 $consulta_select_seguimiento_proyecto= "SELECT * FROM seguimiento_proyectos ORDER BY `id_seguimiento_proyecto` ASC";
$resultado_consulta = mysqli_query($conexion, $consulta_select_seguimiento_proyecto);
?>
<hr>
<table class="table table-striped table-light table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id Seguimiento Proyecto</th>
      <th scope="col">Id Proyecto</th>
      <th scope="col">Id Encargado</th>
      <th scope="col">Id Programadores</th>
      <th scope="col">Tareas Inicio</th>
      <th scope="col">Tareas Final</th>
      <th scope="col">Detalle Proyecto</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $contar_seguimiento_proyecto = 1;
    while ($datos_array = mysqli_fetch_array($resultado_consulta)) {
    ?>
      <tr>
        <th scope="row"><?= $contar_seguimiento_proyecto ?></th>
        <td class="text-center"><?php echo $datos_array['id_seguimiento_proyecto']; ?></td>
        <td><?php echo $datos_array['id_proyecto']; ?></td>
        <td><?php echo $datos_array['id_encargado']; ?></td>
        <td><?php echo $datos_array['id_programadores']; ?></td>
        <td><?php echo $datos_array['tareas_inicio']; ?></td>
        <td><?php echo $datos_array['tareas_final']; ?></td>
        <td><?php echo $datos_array['detalle_proyecto']; ?></td>

        <td class="">
          <div class="d-flex ">
          <button onclick="mostrar_datos_modal_editar(<?php echo $datos_array['id_seguimiento_proyecto']; ?>)" class="btn btn-outline-info" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-editar">
            <i class='bx bx-edit nav_icon'>Editar</i>
          </button>
          &nbsp;
          <button onclick="mostrar_datos_modal_eliminar(<?php echo $datos_array['id_seguimiento_proyecto']; ?>)" class="btn btn-outline-danger" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-eliminar">
            <i class='bx bx-trash nav_icon'>Eliminar</i>
          </button>
         </div>
        </td>
      </tr>
    <?php 
    $contar_seguimiento_proyecto++;
    }
    ?>
  </tbody>
</table>
<div class="modal fade" id="modal-editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Seguimiento Proyecto</h5>
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
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Seguimiento Proyecto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_eliminar"></div>
    </div>
  </div>
</div>
<script>
    function mostrar_datos_modal_editar(id_seguimiento_proyecto) {
      body_modal_editar = document.getElementById('body_modal_editar')
      fetch('<?=$_dominio?>apisoft-web/admin/app/ajax/ajax.seguimiento.proyecto.editar.php?codigo_seguimiento_proyecto=' + id_seguimiento_proyecto)
        .then(response => response.text())
        .then(data => {
          body_modal_editar.innerHTML = data
        })
    }

    function mostrar_datos_modal_eliminar(id_seguimiento_proyecto) {
      body_modal_eliminar = document.getElementById('body_modal_eliminar')
      fetch('<?=$_dominio?>apisoft-web/admin/app/ajax/ajax.seguimiento.proyecto.eliminar.php?codigo_seguimiento_proyecto=' + id_seguimiento_proyecto)
        .then(response => response.text())
        .then(data => {
          body_modal_eliminar.innerHTML = data
        })
    }

    function datos_modal_agregar() {
      body_modal_agregar = document.getElementById('body_modal_agregar')
      fetch('<?=$_dominio?>apisoft-web/admin/app/ajax/ajax.seguimiento.proyecto.agregar.php')
        .then(response => response.text())
        .then(data => {
          body_modal_agregar.innerHTML = data
        })
    }
</script>