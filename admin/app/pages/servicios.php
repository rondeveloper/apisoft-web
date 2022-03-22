<?php
  include "app/items/DB.php";
  if (isset($_POST['agregar-servicio'])) {
    $id_programadores = $_POST['id-programadores'];
    $id_proyecto = $_POST['id-proyecto'];
    $id_cliente = $_POST['id-cliente'];
    $servicio = $_POST['servicio'];
    $detalles = $_POST['detalles'];
    $consulta_insert_servicios = "INSERT INTO servicios
    (`id_programadores`, `id_proyecto`, `id_cliente`, `servicio`, `detalles`) 
    VALUES 
    ('$id_programadores', '$id_proyecto', '$id_cliente', '$servicio', '$detalles')";
     $resultado = mysqli_query($conexion, $consulta_insert_servicios);
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
        HAY UN ERROR: <?= $consulta_insert_servicios . mysqli_error($conexion) ?>.
      </div>
    <?php
    }
  }
  if (isset($_POST['editar-servicio'])) {
    $id_servicio = $_POST['id-servicio'];
    $id_programadores = $_POST['id-programadores'];
    $id_proyecto = $_POST['id-proyecto'];
    $id_cliente = $_POST['id-cliente'];
    $servicio = $_POST['servicio'];
    $detalles = $_POST['detalles'];
    $consulta_update_servicios = "UPDATE servicios SET  
    `id_programadores`='$id_programadores', `id_proyecto`='$id_proyecto',
     `id_cliente`='$id_cliente', `servicio`='$servicio', 
     `detalles`='$detalles'
    WHERE `id_servicio`='$id_servicio' LIMIT 1 ";
    $resultado = mysqli_query($conexion,$consulta_update_servicios);
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
        HAY UN ERROR: <?= $consulta_update_servicios . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  if (isset($_POST['eliminar-servicio'])) {
    $id_servicio = $_POST['id-servicio'];
    $consulta_delete_servicios = "DELETE FROM servicios WHERE `id_servicio`='$id_servicio' LIMIT 1 ";
    $resultado = mysqli_query($conexion,  $consulta_delete_servicios );
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
        HAY UN ERROR: <?=$consulta_delete_servicios  . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  
  if (isset($_POST['agregar-plan'])) {
    $id_servicio = $_POST['id-servicio'];
    $id_programadores = $_POST['id-programadores'];
    $id_proyecto = $_POST['id-proyecto'];
    $plan = $_POST['plan'];
    $actividades = $_POST['actividades'];
    $tareas = $_POST['tareas'];
    $consulta_insert_plan = "INSERT INTO planes
    (`id_servicio`, `id_programadores`, `id_proyectos`, `plan`, `actividades`, `tareas`) 
    VALUES 
    ('$id_servicio', '$id_programadores', '$id_proyecto', '$plan', '$actividades', '$tareas')";
     $resultado = mysqli_query($conexion, $consulta_insert_plan);
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
        HAY UN ERROR: <?= $consulta_insert_plan . mysqli_error($conexion) ?>.
      </div>
    <?php
    }
  }?>
<div class="d-flex justify-content-between">
    <h4 class="text-primary fw-bolder fs-2 my-0">Servicios <i class='bx bx-group nav_icon bx-flashing fs-3'></i></h4>
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#servicios" onclick="datos_modal_agregar_servicio()">
      Agregar Servicio
    </button>
  </div>
  <div class="modal fade" id="servicios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">APISOFT Servicio</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="body_modal_agregar">
        </div>
      </div>
    </div>
  </div>
  <?php
  
 $consulta_select_servicios= "SELECT * FROM servicios ORDER BY `id_servicio` ASC";
$resultado_consulta_servicio = mysqli_query($conexion, $consulta_select_servicios);
?>
<hr>
<table class="table table-striped table-light table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id Servicio</th>
      <th scope="col">Id Programadores</th>
      <th scope="col">Id Proyecto</th>
      <th scope="col">Id Cliente</th>
      <th scope="col">Servicio</th>
      <th scope="col">detalles</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $servicio_contar = 1;
    while ($datos_servicio = mysqli_fetch_array($resultado_consulta_servicio)) {
    ?>
      <tr>
        <th scope="row"><?= $servicio_contar ?></th>
        <td class="text-center"><?php echo $datos_servicio['id_servicio']; ?></td>
        <td><?php echo $datos_servicio['id_programadores']; ?></td>
        <td><?php echo $datos_servicio['id_proyecto']; ?></td>
        <td><?php echo $datos_servicio['id_cliente']; ?></td>
        <td><?php echo $datos_servicio['servicio']; ?></td>
        <td><?php echo $datos_servicio['detalles']; ?></td>
        <td class="">
          <div class="d-flex ">
          <button onclick="mostrar_datos_modal_editar(<?php echo $datos_servicio['id_servicio']; ?>)" class="btn btn-outline-info" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-editar">
            <i class='bx bx-edit nav_icon'>Editar</i>
          </button>
          &nbsp;
          <button onclick="mostrar_datos_modal_eliminar(<?php echo $datos_servicio['id_servicio']; ?>)" class="btn btn-outline-danger" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-eliminar">
            <i class='bx bx-trash nav_icon'>Eliminar</i>
          </button>
          &nbsp;<button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#exampleplan" onclick="datos_modal_agregar()">
      Agregar Plan
    </button>
  <div class="modal fade" id="exampleplan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">APISOFT Plan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="body_modal_agregar_plan">
          
        </div>
      </div>
    </div>
  </div>
         </div>
        </td>
      </tr>
    <?php 
    $servicio_contar++;
    }
    ?>
  </tbody>
</table>
<div class="modal fade" id="modal-editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Servicio</h5>
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
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Servicio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_eliminar"></div>
    </div>
  </div>
</div>
<script>
    function mostrar_datos_modal_editar(id_servicio) {
      body_modal_editar = document.getElementById('body_modal_editar')
      fetch('<?=$_dominio?>admin/app/ajax/ajax.servicio.editar.php?codigo_servicio=' + id_servicio)
        .then(response => response.text())
        .then(data => {
          body_modal_editar.innerHTML = data
        })
    }

    function mostrar_datos_modal_eliminar(id_servicio) {
      body_modal_eliminar = document.getElementById('body_modal_eliminar')
      fetch('<?=$_dominio?>admin/app/ajax/ajax.servicio.eliminar.php?codigo_servicio=' + id_servicio)
        .then(response => response.text())
        .then(data => {
          body_modal_eliminar.innerHTML = data
        })
    }

    function datos_modal_agregar_servicio() {
      body_modal_agregar = document.getElementById('body_modal_agregar')
      fetch('<?=$_dominio?>admin/app/ajax/ajax.servicio.agregar.php')
        .then(response => response.text())
        .then(data => {
          body_modal_agregar.innerHTML = data
        })
    }
    
    function datos_modal_agregar() {
      body_modal_agregar = document.getElementById('body_modal_agregar_plan')
      fetch('<?=$_dominio?>admin/app/ajax/ajax.plan.agregar.php')
        .then(response => response.text())
        .then(data => {
          body_modal_agregar.innerHTML = data
        })
    }
</script>