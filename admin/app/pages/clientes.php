<?php
if (isset($_POST['agregar-cliente'])) {
  $cliente = $_POST['cliente'];
  $detalle = $_POST['detalle'];
  $contenido_de_proyecto = $_POST['contenido-de-proyecto'];
  $detalle_de_proyecto = $_POST['detalle-de-proyecto'];
  $contacto = $_POST['contacto'];
  $fecha = $_POST['fecha'];
  $consulta_insert_clientes = "INSERT INTO clientes
    (`cliente`, `detalle`, `contenido_proyecto`, `detalle_de_proyecto`, `contacto`, `fecha`) 
    VALUES 
    ('$cliente', '$detalle', '$contenido_de_proyecto', '$detalle_de_proyecto', '$contacto', '$fecha')";
  $resultado = mysqli_query($conexion, $consulta_insert_clientes);
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
      HAY UN ERROR: <?= $consulta_insert_clientes . mysqli_error($conexion) ?>.
    </div>
  <?php
  }
}
if (isset($_POST['editar-cliente'])) {
  $id_cliente = $_POST['id-cliente'];
  $cliente = $_POST['cliente'];
  $detalle = $_POST['detalle'];
  $contenido_de_proyecto = $_POST['contenido-de-proyecto'];
  $detalle_de_proyecto = $_POST['detalle-de-proyecto'];
  $contacto = $_POST['contacto'];
  $fecha = $_POST['fecha'];
  $consulta_update_clientes = "UPDATE clientes SET  
    `cliente`='$cliente', `detalle`='$detalle',
     `contenido_proyecto`='$contenido_de_proyecto', `detalle_de_proyecto`='$detalle_de_proyecto', `contacto`='$contacto', `fecha`='$fecha'
    WHERE `id_clientes`='$id_cliente' LIMIT 1 ";
  $resultado = mysqli_query($conexion, $consulta_update_clientes);
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
      HAY UN ERROR: <?= $consulta_update_clientes . mysqli_error($conexion) ?>.
    </div>
  <?php
  }
}
if (isset($_POST['eliminar-cliente'])) {
  $id_cliente = $_POST['id-cliente'];
  $consulta_delete_clientes = "DELETE FROM clientes WHERE `id_clientes`='$id_cliente' LIMIT 1 ";
  $resultado = mysqli_query($conexion,  $consulta_delete_clientes);
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
      HAY UN ERROR: <?= $consulta_delete_clientes  . mysqli_error($conexion) ?>.
    </div>
  <?php
  }
}
if (isset($_POST['agregar-proyecto'])) {
  $id_cliente = $_POST['id-cliente'];
  $id_encargado = $_POST['id-encargado'];
  $proyecto = $_POST['proyecto'];
  $presupuesto = $_POST['presupuesto'];
  $duracion_desarrollo_proyecto = $_POST['duracion-desarrollo-proyecto'];
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
  <h4 class="text-primary fw-bolder fs-2 my-0">Clientes <i class='bx bx-cut bx-flashing fs-3'></i></h4>
  <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal-6" onclick="cliente_datos_modal_agregar()">
    Agregar Cliente
  </button>
  <div class="modal fade" id="exampleModal-6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">APISOFT Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="body_modal_agregar_cliente">
          
        </div>
      </div>
    </div>
  </div>
  </div>
<?php
$consulta_select_clientes = "SELECT * FROM clientes ORDER BY `id_clientes` ASC";
$resultado_consulta = mysqli_query($conexion, $consulta_select_clientes);
?>
<hr>
<table class="table table-striped table-light table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id Cliente</th>
      <th scope="col">Cliente</th>
      <th scope="col">Detalle</th>
      <th scope="col">Contenido de Proyecto</th>
      <th scope="col">Detalle de Proyecto</th>
      <th scope="col">Contacto</th>
      <th scope="col">Fecha</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $cliente_contar = 1;
    while ($datos_cliente = mysqli_fetch_array($resultado_consulta)) {
    ?>
      <tr>
        <th scope="row"><?= $cliente_contar ?></th>
        <td class="text-center"><?php echo $datos_cliente['id_clientes']; ?></td>
        <td><?php echo $datos_cliente['cliente']; ?></td>
        <td><?php echo $datos_cliente['detalle']; ?></td>
        <td><?php echo $datos_cliente['contenido_proyecto']; ?></td>
        <td><?php echo $datos_cliente['detalle_de_proyecto']; ?></td>
        <td><?php echo $datos_cliente['contacto']; ?></td>
        <td><?php echo $datos_cliente['fecha']; ?></td>

        <td class="">
          <div class="d-flex flex-column">
            <button onclick="mostrar_datos_cliente_modal_editar(<?php echo $datos_cliente['id_clientes']; ?>)" class="btn btn-outline-info" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-editar-cliente">
              <i class='bx bx-edit nav_icon'>Editar</i>
            </button>
            &nbsp;
            <button onclick="mostrar_datos_cliente_modal_eliminar(<?php echo $datos_cliente['id_clientes']; ?>)" class="btn btn-outline-danger" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-eliminar-cliente">
              <i class='bx bx-trash nav_icon'>Eliminar</i>
            </button>&nbsp;&nbsp;
            <button type="button" class="btn btn-sm btn-primary " data-bs-toggle="modal" data-bs-target="#proyecto" onclick="proyecto_datos_modal_agregar(<?php echo $datos_cliente['id_clientes']; ?>)">
              Agregar Proyecto
            </button>
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
            </div>&nbsp;
            <button type="button" class="btn btn-sm btn-primary " data-bs-toggle="modal" data-bs-target="#servicios" onclick="datos_modal_agregar(<?php echo $datos_cliente['id_clientes']; ?>)">
              Agregar Servicio
            </button>
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
          </div>&nbsp;<button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#exampleModal-plan" onclick="datos_modal_agregar_plan()">
      Agregar Plan
    </button>
  </div>
  <div class="modal fade" id="exampleModal-plan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      $cliente_contar++;
    }
    ?>
  </tbody>
</table>
<div class="modal fade" id="modal-editar-cliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_editar_cliente"></div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-eliminar-cliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_eliminar_cliente"></div>
    </div>
  </div>
</div>
<script>
  function mostrar_datos_cliente_modal_editar(id_cliente) {
    cliente_body_modal_editar = document.getElementById('body_modal_editar_cliente')
    fetch('<?= $_dominio ?>admin/app/ajax/ajax.cliente.editar.php?codigo_cliente=' + id_cliente)
      .then(response => response.text())
      .then(data => {
        cliente_body_modal_editar.innerHTML = data
      })
  }

  function mostrar_datos_cliente_modal_eliminar(id_cliente) {
    cliente_body_modal_eliminar = document.getElementById('body_modal_eliminar_cliente')
    fetch('<?= $_dominio ?>admin/app/ajax/ajax.cliente.eliminar.php?codigo_cliente=' + id_cliente)
      .then(response => response.text())
      .then(data => {
        cliente_body_modal_eliminar.innerHTML = data
      })
  }

  function cliente_datos_modal_agregar() {
    cliente_body_modal_agregar = document.getElementById('body_modal_agregar_cliente')
    fetch('<?= $_dominio ?>admin/app/ajax/ajax.cliente.agregar.php')
      .then(response => response.text())
      .then(data => {
        cliente_body_modal_agregar.innerHTML = data
      })
  }

  function proyecto_datos_modal_agregar(id_cliente) {
    proyecto_body_modal_agregar = document.getElementById('proyecto_datos_modal_agregar')
    fetch('<?= $_dominio ?>admin/app/ajax/ajax.proyecto.agregar.php?id-cliente='+id_cliente)
      .then(response => response.text())
      .then(data => {
        proyecto_body_modal_agregar.innerHTML = data
      })
  }
  function datos_modal_agregar(id_cliente) {
      body_modal_agregar = document.getElementById('body_modal_agregar')
      fetch('<?=$_dominio?>admin/app/ajax/ajax.servicio.agregar.php?id-cliente='+id_cliente)
        .then(response => response.text())
        .then(data => {
          body_modal_agregar.innerHTML = data
        })
    }
    function datos_modal_agregar_plan() {
      body_modal_agregar_plan = document.getElementById('body_modal_agregar_plan')
      fetch('<?=$_dominio?>admin/app/ajax/ajax.plan.agregar.php')
        .then(response => response.text())
        .then(data => {
          body_modal_agregar_plan.innerHTML = data
        })
    }
</script>