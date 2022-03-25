<?php
include "app/items/DB.php";
if (isset($_POST['agregar-personal'])) {
  $personal = $_POST['personal'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $actividad = $_POST['actividad'];
  $fecha = $_POST['fecha'];
  $edad = $_POST['edad'];
  $consulta_insert_personal = "INSERT INTO personales (`personal`, `email`, `telefono`, `actividad`, `fecha`, `edad`) 
    VALUES 
    ('$personal', '$email', '$telefono', '$actividad', '$fecha', '$edad')";
  $resultado = mysqli_query($conexion, $consulta_insert_personal);
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
      HAY UN ERROR: <?= $consulta_insert_personal . mysqli_error($conexion) ?>.
    </div>
  <?php
  }
}
if (isset($_POST['editar-personal'])) {
  $id_personal = $_POST['id-personal'];
  $personal = $_POST['personal'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $actividad = $_POST['actividad'];
  $fecha = $_POST['fecha'];
  $edad = $_POST['edad'];
  $consulta_update_personal = "UPDATE personales SET  
    `personal`='$personal', `email`='$email',
     `telefono`='$telefono', `actividad`='$actividad', 
     `fecha`='$fecha', `edad`='$edad'
    WHERE `id_personal`='$id_personal' LIMIT 1 ";
  $resultado = mysqli_query($conexion, $consulta_update_personal);
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
      HAY UN ERROR: <?= $consulta_update_personal . mysqli_error($conexion) ?>.
    </div>
  <?php
  }
}
if (isset($_POST['eliminar-personal'])) {
  $id_personal = $_POST['id-personal'];
  $consulta_delete_personal = "DELETE FROM personales WHERE `id_personal`='$id_personal' LIMIT 1 ";
  $resultado = mysqli_query($conexion,  $consulta_delete_personal);
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
      HAY UN ERROR: <?= $consulta_delete_personal . mysqli_error($conexion) ?>.
    </div>
  <?php
  }
}

if (isset($_POST['agregar-seguimiento_personal'])) {
  $estado=$_POST['estado'];
  $id_personal = $_POST['id-personal'];
  $id_proyecto_actual = $_POST['id-proyecto-actual'];
  $actividad_actual = $_POST['actividad-actual'];
  $consulta_insert_seguimiento_personal = "INSERT INTO seguimiento_personal
    (`id_personal`, `id_proyecto_actual`, `actividad_actual`,`estado`) 
    VALUES 
    ('$id_personal', '$id_proyecto_actual', '$actividad_actual','$estado')";
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
if (isset($_POST['agregar-seguimiento_proyecto'])) {
  $estado=$_POST['estado'];
  $id_proyecto = $_POST['id-proyecto'];
  $id_encargado = $_POST['id-encargado'];
  $id_programadores = $_POST['id-programadores'];
  $tareas_inicio = $_POST['tareas-inicio'];
  $tareas_final = $_POST['tareas-final'];
  $detalle_proyecto = $_POST['detalle-proyecto'];
  $consulta_insert_seguimiento_proyecto = "INSERT INTO seguimiento_proyectos
    (`id_proyecto`, `id_encargado`, `id_programadores`, `tareas_inicio`, `tareas_final`, `detalle_proyecto`,`estado`) 
    VALUES 
    ('$id_proyecto', '$id_encargado', '$id_programadores', '$tareas_inicio', '$tareas_final', '$detalle_proyecto','$estado')";
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
} ?>
<div class="d-flex justify-content-between">
  <h4 class="text-primary fw-bolder fs-2 my-0">Personales <i class='bx bx-group nav_icon bx-flashing fs-3'></i></h4>
  <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="datos_modal_agregar()">
    Agregar Personal
  </button>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">APISOFT Personal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="body_modal_agregar">
      </div>
    </div>
  </div>
</div>
<?php
$consulta_select_personales = "SELECT * FROM personales ORDER BY `id_personal` ASC";
$resultado_consulta = mysqli_query($conexion, $consulta_select_personales);
?>
<hr>
<table id="mytable" class="table table-striped table-light table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id Personal</th>
      <th scope="col">Personal</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Actividad</th>
      <th scope="col">Fecha</th>
      <th scope="col">Edad</th>
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
        <td class="text-center"><?php echo $datos_array['id_personal']; ?></td>
        <td><?php echo $datos_array['personal']; ?></td>
        <td><?php echo $datos_array['email']; ?></td>
        <td><?php echo $datos_array['telefono']; ?></td>
        <td><?php echo $datos_array['actividad']; ?></td>
        <td><?php echo $datos_array['fecha']; ?></td>
        <td><?php echo $datos_array['edad']; ?></td>
        <td class="">
          <div class="d-flex ">
            <div>
              <button onclick="mostrar_datos_modal_editar(<?php echo $datos_array['id_personal']; ?>)" class="btn btn-outline-info" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-editar">
                <i class='bx bx-edit nav_icon'>Editar</i>
              </button>
              &nbsp;
              <button onclick="mostrar_datos_modal_eliminar(<?php echo $datos_array['id_personal']; ?>)" class="btn btn-outline-danger" id="btn_eliminar" type="button" data-bs-toggle="modal" data-bs-target="#modal-eliminar">
                <i class='bx bx-trash nav_icon'>Eliminar</i>
              </button>
              &nbsp;
            </div>
            <div>
              <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#seguimiento_personal" onclick="datos_modal_agregar_seguimiento_personal(<?php echo $datos_array['id_personal']; ?>)">
                Agregar Seguimiento Personal
              </button>
              <div class="modal fade" id="seguimiento_personal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">APISOFT Seguimiento Personal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="body_modal_agregar_seguimiento_personal">

                    </div>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-sm btn-primary " data-bs-toggle="modal" data-bs-target="#seguimiento_proyecto" onclick="datos_modal_agregar_seguimiento_proyecto(<?php echo $datos_array['id_personal']; ?>)">
                Agregar Seguimiento Proyecto
              </button>
              <div class="modal fade" id="seguimiento_proyecto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">APISOFT Seguimiento Proyecto</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="body_modal_agregar_seguimiento_proyecto">

                    </div>
                  </div>
                </div>
              </div>
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
        <h5 class="modal-title" id="exampleModalLabel">Editar Personal</h5>
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
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Personal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_eliminar"></div>
    </div>
  </div>
</div>
<script>
  function mostrar_datos_modal_editar(id_personal) {
    body_modal_editar = document.getElementById('body_modal_editar')
    fetch('<?= $_dominio ?>admin/app/ajax/ajax.personal.editar.php?codigo_personal=' + id_personal)
      .then(response => response.text())
      .then(data => {
        body_modal_editar.innerHTML = data
      })
  }

  function mostrar_datos_modal_eliminar(id_personal) {
    body_modal_eliminar = document.getElementById('body_modal_eliminar')
    fetch('<?= $_dominio ?>admin/app/ajax/ajax.personal.eliminar.php?codigo_personal=' + id_personal)
      .then(response => response.text())
      .then(data => {
        body_modal_eliminar.innerHTML = data
      })
  }

  function datos_modal_agregar() {
    body_modal_agregar = document.getElementById('body_modal_agregar')
    fetch('<?= $_dominio ?>admin/app/ajax/ajax.personal.agregar.php')
      .then(response => response.text())
      .then(data => {
        body_modal_agregar.innerHTML = data
      })
  }

  function datos_modal_agregar_seguimiento_personal(id_personal) {
    body_modal_agregar = document.getElementById('body_modal_agregar_seguimiento_personal')
    fetch('<?= $_dominio ?>admin/app/ajax/ajax.seguimiento.personal.agregar.inner.php?codigo_personal=' + id_personal)
      .then(response => response.text())
      .then(data => {
        body_modal_agregar.innerHTML = data
      })
  }

  function datos_modal_agregar_seguimiento_proyecto(id_personal) {
    body_modal_agregar_seguimiento_proyecto = document.getElementById('body_modal_agregar_seguimiento_proyecto')
    fetch('<?= $_dominio ?>admin/app/ajax/ajax.seguimiento.proyecto.agregar.inner.php?codigo_personal=' + id_personal)
      .then(response => response.text())
      .then(data => {
        body_modal_agregar_seguimiento_proyecto.innerHTML = data
      })
  }
</script>
<script>
  $(document).ready(function() {
    $('#mytable').DataTable();
  });
</script>