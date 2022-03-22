<?php
  include "app/items/DB.php";
  if (isset($_POST['agregar-proyecto'])) {
    $id_cliente = $_POST['id-cliente'];
    $id_encargado = $_POST['id-encargado'];
    $proyecto = $_POST['proyecto'];
    $presupuesto = $_POST['presupuesto'];
    $duracion_desarrollo_proyecto= $_POST['duracion-desarrollo-proyecto'];
    $fecha_inicio = $_POST['fecha-inicio'];
    $fecha_presentacion = $_POST['fecha-presentacion'];
    $fecha_entrega = $_POST['fecha-entrega'];
    $consulta_insert_proyectos = "INSERT INTO proyectos
    (`id_cliente`, `id_encargado`, `proyecto`, `presupuesto`, `duracion_desarrollo_proyecto`, `fecha_inicio`, `fecha_presentacion`,`fecha_entrega`) 
    VALUES 
    ('$id_cliente', '$id_encargado', '$proyecto', '$presupuesto', '$duracion_desarrollo_proyecto', '$fecha_inicio', '$fecha_presentacion', '$fecha_entrega')";
     $resultado = mysqli_query($conexion, $consulta_insert_proyectos);
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
        HAY UN ERROR: <?= $consulta_insert_proyectos . mysqli_error($conexion) ?>.
      </div>
    <?php
    }
  }
  if (isset($_POST['editar-proyecto'])) {
    $id_proyecto = $_POST['id-proyecto'];
    $id_cliente = $_POST['id-cliente'];
    $id_encargado = $_POST['id-encargado'];
    $proyecto = $_POST['proyecto'];
    $presupuesto = $_POST['presupuesto'];
    $duracion_desarrollo_proyecto= $_POST['duracion-desarrollo-proyecto'];
    $fecha_inicio = $_POST['fecha-inicio'];
    $fecha_presentacion = $_POST['fecha-presentacion'];
    $fecha_entrega = $_POST['fecha-entrega'];
    $consulta_update_proyectos = "UPDATE proyectos SET  
    `id_cliente`='$id_cliente', `id_encargado`='$id_encargado',
     `proyecto`='$proyecto', `presupuesto`='$presupuesto', `duracion_desarrollo_proyecto`='$duracion_desarrollo_proyecto', `fecha_inicio`='$fecha_inicio', `fecha_presentacion`='$fecha_presentacion', `fecha_entrega`='$fecha_entrega'
    WHERE `id_proyecto`='$id_proyecto' LIMIT 1 ";
    $resultado = mysqli_query($conexion,$consulta_update_proyectos);
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
        HAY UN ERROR: <?= $consulta_update_proyectos . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  if (isset($_POST['eliminar-proyecto'])) {
    $id_proyecto = $_POST['id-proyecto'];
    $consulta_delete_proyectos = "DELETE FROM proyectos WHERE `id_proyecto`='$id_proyecto' LIMIT 1 ";
    $resultado = mysqli_query($conexion,  $consulta_delete_proyectos );
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
        HAY UN ERROR: <?=$consulta_delete_proyectos  . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  ?>
 
 <div class="d-flex justify-content-between">
    <h4 class="text-primary fw-bolder fs-2 my-0">Proyectos <i class='bx bx-cut bx-flashing fs-3'></i></h4>
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#proyecto" onclick="proyecto_datos_modal_agregar()">
      Agregar Proyecto
    </button>
  </div>
  <div class="modal fade" id="proyecto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">APISOFT Proyecto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="proyecto_datos_modal_agregar">
        </div>
      </div>
    </div>
  </div>
  <?php
 $consulta_select_proyectos= "SELECT * FROM proyectos ORDER BY `id_proyecto` ASC";
$resultado_consulta = mysqli_query($conexion, $consulta_select_proyectos);
?>
<hr>
<table class="table table-striped table-light table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id Proyecto</th>
      <th scope="col">Id Cliente</th>
      <th scope="col">Id Encargado</th>
      <th scope="col">Proyecto</th>
      <th scope="col">Presupuesto</th>
      <th scope="col">Duracion Desarrollo Proyecto</th>
      <th scope="col">Fecha Inicio</th>
      <th scope="col">Fecha Presentacion</th>
      <th scope="col">Fecha Entrega</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $proyecto_contar = 1;
    while ($datos_proyecto = mysqli_fetch_array($resultado_consulta)) {
    ?>
      <tr>
        <th scope="row"><?= $proyecto_contar ?></th>
        <td class="text-center"><?php echo $datos_proyecto['id_proyecto']; ?></td>
        <td><?php echo $datos_proyecto['id_cliente']; ?></td>
        <td><?php echo $datos_proyecto['id_encargado']; ?></td>
        <td><?php echo $datos_proyecto['proyecto']; ?></td>
        <td><?php echo $datos_proyecto['presupuesto']; ?></td>
        <td><?php echo $datos_proyecto['duracion_desarrollo_proyecto']; ?></td>
        <td><?php echo $datos_proyecto['fecha_inicio']; ?></td>
        <td><?php echo $datos_proyecto['fecha_presentacion']; ?></td>
        <td><?php echo $datos_proyecto['fecha_entrega']; ?></td>
        <td class="">
          <div class="d-flex ">
          <button onclick="mostrar_datos_proyecto_modal_editar(<?php echo $datos_proyecto['id_proyecto']; ?>)" class="btn btn-outline-info" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-editar-proyecto">
            <i class='bx bx-edit nav_icon'>Editar</i>
          </button>
          &nbsp;
          <button onclick="mostrar_datos_proyecto_modal_eliminar(<?php echo $datos_proyecto['id_proyecto']; ?>)" class="btn btn-outline-danger" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-eliminar-proyecto">
            <i class='bx bx-trash nav_icon'>Eliminar</i>
          </button>
         </div>
        </td>
      </tr>
    <?php 
    $proyecto_contar++;
    }
    ?>
  </tbody>
</table>
<div class="modal fade" id="modal-editar-proyecto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Proyecto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_editar_proyecto"></div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-eliminar-proyecto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Proyecto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_eliminar_proyecto"></div>
    </div>
  </div>
</div>
<script>
function mostrar_datos_proyecto_modal_editar(id_proyecto) {
      proyecto_body_modal_editar = document.getElementById('body_modal_editar_proyecto')
      fetch('<?=$_dominio?>apisoft-web/admin/app/ajax/ajax.proyecto.editar.php?codigo_proyecto=' + id_proyecto)
        .then(response => response.text())
        .then(data => {
          proyecto_body_modal_editar.innerHTML = data
        })
    }

    function mostrar_datos_proyecto_modal_eliminar(id_proyecto) {
      proyecto_body_modal_eliminar = document.getElementById('body_modal_eliminar_proyecto')
      fetch('<?=$_dominio?>apisoft-web/admin/app/ajax/ajax.proyecto.eliminar.php?codigo_proyecto=' + id_proyecto)
        .then(response => response.text())
        .then(data => {
          proyecto_body_modal_eliminar.innerHTML = data
        })
    }
    function proyecto_datos_modal_agregar() {
      proyecto_body_modal_agregar = document.getElementById('proyecto_datos_modal_agregar')
      fetch('<?=$_dominio?>apisoft-web/admin/app/ajax/ajax.proyecto.agregar.php')
        .then(response => response.text())
        .then(data => {
          proyecto_body_modal_agregar.innerHTML = data
        })
    }
    </script>