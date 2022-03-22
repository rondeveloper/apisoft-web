<?php
  include "app/items/DB.php";
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
  }
  if (isset($_POST['editar-plan'])) {
    $id_plan = $_POST['id-plan'];
    $id_servicio = $_POST['id-servicio'];
    $id_programadores = $_POST['id-programadores'];
    $id_proyecto = $_POST['id-proyecto'];
    $plan = $_POST['plan'];
    $actividades = $_POST['actividades'];
    $tareas = $_POST['tareas'];
    $consulta_update_plan = "UPDATE planes SET  
    `id_servicio`='$id_servicio', `id_programadores`='$id_programadores',
     `id_proyectos`='$id_proyecto', `plan`='$plan', 
     `actividades`='$actividades', `tareas`='$tareas'
    WHERE `id_planes`='$id_plan' LIMIT 1 ";
    $resultado = mysqli_query($conexion,$consulta_update_plan);
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
        HAY UN ERROR: <?= $consulta_update_plan . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  if (isset($_POST['eliminar-plan'])) {
    $id_plan = $_POST['id-plan'];
    $consulta_delete_plan = "DELETE FROM planes WHERE `id_planes`='$id_plan' LIMIT 1 ";
    $resultado = mysqli_query($conexion,  $consulta_delete_plan );
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
        HAY UN ERROR: <?=$consulta_delete_plan  . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }?>
<div class="d-flex justify-content-between">
    <h4 class="text-primary fw-bolder fs-2 my-0">Planes <i class='bx bx-group nav_icon bx-flashing fs-3'></i></h4>
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="datos_modal_agregar()">
      Agregar Plan
    </button>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">APISOFT Plan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="body_modal_agregar">
          
        </div>
      </div>
    </div>
  </div>
  <?php
 $consulta_select_planes= "SELECT * FROM planes ORDER BY `id_planes` ASC";
$resultado_consulta = mysqli_query($conexion, $consulta_select_planes);
?>
<hr>
<table class="table table-striped table-light table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id Plan</th>
      <th scope="col">Id Servicio</th>
      <th scope="col">Id Programadores</th>
      <th scope="col">Id Proyecto</th>
      <th scope="col">Plan</th>
      <th scope="col">Actividades</th>
      <th scope="col">Tareas</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $plan_contar = 1;
    while ($datos_array = mysqli_fetch_array($resultado_consulta)) {
    ?>
      <tr>
        <th scope="row"><?= $plan_contar ?></th>
        <td class="text-center"><?php echo $datos_array['id_planes']; ?></td>
        <td><?php echo $datos_array['id_servicio']; ?></td>
        <td><?php echo $datos_array['id_programadores']; ?></td>
        <td><?php echo $datos_array['id_proyectos']; ?></td>
        <td><?php echo $datos_array['plan']; ?></td>
        <td><?php echo $datos_array['actividades']; ?></td>
        <td><?php echo $datos_array['tareas']; ?></td>

        <td class="">
          <div class="d-flex ">
          <button onclick="mostrar_datos_modal_editar(<?php echo $datos_array['id_planes']; ?>)" class="btn btn-outline-info" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-editar">
            <i class='bx bx-edit nav_icon'>Editar</i>
          </button>
          &nbsp;
          <button onclick="mostrar_datos_modal_eliminar(<?php echo $datos_array['id_planes']; ?>)" class="btn btn-outline-danger" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-eliminar">
            <i class='bx bx-trash nav_icon'>Eliminar</i>
          </button>
         </div>
        </td>
      </tr>
    <?php 
    $plan_contar++;
    }
    ?>
  </tbody>
</table>
<div class="modal fade" id="modal-editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Plan</h5>
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
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Plan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_eliminar"></div>
    </div>
  </div>
</div>
<script>
    function mostrar_datos_modal_editar(id_plan) {
      body_modal_editar = document.getElementById('body_modal_editar')
      fetch('<?=$_dominio?>admin/app/ajax/ajax.plan.editar.php?codigo_plan=' + id_plan)
        .then(response => response.text())
        .then(data => {
          body_modal_editar.innerHTML = data
        })
    }

    function mostrar_datos_modal_eliminar(id_plan) {
      body_modal_eliminar = document.getElementById('body_modal_eliminar')
      fetch('<?=$_dominio?>admin/app/ajax/ajax.plan.eliminar.php?codigo_plan=' + id_plan)
        .then(response => response.text())
        .then(data => {
          body_modal_eliminar.innerHTML = data
        })
    }

    function datos_modal_agregar() {
      body_modal_agregar = document.getElementById('body_modal_agregar')
      fetch('<?=$_dominio?>admin/app/ajax/ajax.plan.agregar.php')
        .then(response => response.text())
        .then(data => {
          body_modal_agregar.innerHTML = data
        })
    }
</script>