<?php
  include "app/items/DB.php";
  if (isset($_POST['agregar-consulta_servicio'])) {
    $id_servicio = $_POST['id-servicio'];
    $id_cliente = $_POST['id-cliente'];
    $id_proyecto = $_POST['id-proyecto'];
    $id_programadores = $_POST['id-programadores'];
    $id_encargado = $_POST['id-encargado'];
    $observacion_costo_servicio = $_POST['observacion-costo-servicio'];
    $consulta_insert_consulta_servicio = "INSERT INTO consulta_servicio
    (`id_servicio`, `id_cliente`, `id_proyecto`, `id_programadores`, `id_encargado`, `observacion_costo_servicio`) 
    VALUES 
    ('$id_servicio', '$id_cliente', '$id_proyecto', '$id_programadores', '$id_encargado', '$observacion_costo_servicio')";
     $resultado = mysqli_query($conexion, $consulta_insert_consulta_servicio);
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
        HAY UN ERROR: <?= $consulta_insert_consulta_servicio . mysqli_error($conexion) ?>.
      </div>
    <?php
    }
  }
  if (isset($_POST['editar-consulta_servicio'])) {
    $id_consulta_servicio = $_POST['id-consulta-servicio'];
    $id_servicio = $_POST['id-servicio'];
    $id_cliente = $_POST['id-cliente'];
    $id_proyecto = $_POST['id-proyecto'];
    $id_programadores = $_POST['id-programadores'];
    $id_encargado = $_POST['id-encargado'];
    $observacion_costo_servicio = $_POST['observacion-costo-servicio'];
    $consulta_update_consulta_servicio = "UPDATE consulta_servicio SET  
    `id_servicio`='$id_servicio', `id_cliente`='$id_cliente',
     `id_proyecto`='$id_proyecto', `id_programadores`='$id_programadores', 
     `id_encargado`='$id_encargado', `observacion_costo_servicio`='$observacion_costo_servicio'
    WHERE `id_consulta_servicio`='$id_consulta_servicio' LIMIT 1 ";
    $resultado = mysqli_query($conexion,$consulta_update_consulta_servicio);
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
        HAY UN ERROR: <?= $consulta_update_consulta_servicio . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  if (isset($_POST['eliminar-consulta_servicio'])) {
    $id_consulta_servicio = $_POST['id-consulta-servicio'];
    $consulta_delete_consulta_servicio = "DELETE FROM consulta_servicio WHERE `id_consulta_servicio`='$id_consulta_servicio' LIMIT 1 ";
    $resultado = mysqli_query($conexion,  $consulta_delete_consulta_servicio );
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
        HAY UN ERROR: <?=$consulta_delete_consulta_servicio  . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }?>
<div class="d-flex justify-content-between">
    <h4 class="text-primary fw-bolder fs-2 my-0">Consulta Servicio<i class='bx bx-group nav_icon bx-flashing fs-3'></i></h4>
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="datos_modal_agregar()">
      Agregar Consulta Servicio
    </button>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">APISOFT Consulta Servicio</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="body_modal_agregar">
          
        </div>
      </div>
    </div>
  </div>
  <?php
 $consulta_select_consulta_servicio= "SELECT * FROM consulta_servicio ORDER BY `id_consulta_servicio` ASC";
$resultado_consulta = mysqli_query($conexion, $consulta_select_consulta_servicio);
?>
<hr>
<table class="table table-striped table-light table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id Consulta Servicio</th>
      <th scope="col">Id Servicio</th>
      <th scope="col">Id Cliente</th>
      <th scope="col">Id Proyecto</th>
      <th scope="col">Id Programadores</th>
      <th scope="col">Id Encargado</th>
      <th scope="col">Observacion Costo Servicio</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $contar_consulta_servicio = 1;
    while ($datos_array = mysqli_fetch_array($resultado_consulta)) {
    ?>
      <tr>
        <th scope="row"><?= $contar_consulta_servicio ?></th>
        <td class="text-center"><?php echo $datos_array['id_consulta_servicio']; ?></td>
        <td><?php echo $datos_array['id_servicio']; ?></td>
        <td><?php echo $datos_array['id_cliente']; ?></td>
        <td><?php echo $datos_array['id_proyecto']; ?></td>
        <td><?php echo $datos_array['id_programadores']; ?></td>
        <td><?php echo $datos_array['id_encargado']; ?></td>
        <td><?php echo $datos_array['observacion_costo_servicio']; ?></td>

        <td class="">
          <div class="d-flex ">
          <button onclick="mostrar_datos_modal_editar(<?php echo $datos_array['id_consulta_servicio']; ?>)" class="btn btn-outline-info" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-editar">
            <i class='bx bx-edit nav_icon'>Editar</i>
          </button>
          &nbsp;
          <button onclick="mostrar_datos_modal_eliminar(<?php echo $datos_array['id_consulta_servicio']; ?>)" class="btn btn-outline-danger" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-eliminar">
            <i class='bx bx-trash nav_icon'>Eliminar</i>
          </button>
         </div>
        </td>
      </tr>
    <?php 
    $contar_consulta_servicio++;
    }
    ?>
  </tbody>
</table>
<div class="modal fade" id="modal-editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Consulta Servicio</h5>
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
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Consulta Servicio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_eliminar"></div>
    </div>
  </div>
</div>
<script>
    function mostrar_datos_modal_editar(id_consulta_servicio) {
      body_modal_editar = document.getElementById('body_modal_editar')
      fetch('<?=$_dominio?>admin/app/ajax/ajax.consulta.servicio.editar.php?codigo_consulta_servicio=' + id_consulta_servicio)
        .then(response => response.text())
        .then(data => {
          body_modal_editar.innerHTML = data
        })
    }

    function mostrar_datos_modal_eliminar(id_consulta_servicio) {
      body_modal_eliminar = document.getElementById('body_modal_eliminar')
      fetch('<?=$_dominio?>admin/app/ajax/ajax.consulta.servicio.eliminar.php?codigo_consulta_servicio=' + id_consulta_servicio)
        .then(response => response.text())
        .then(data => {
          body_modal_eliminar.innerHTML = data
        })
    }

    function datos_modal_agregar() {
      body_modal_agregar = document.getElementById('body_modal_agregar')
      fetch('<?=$_dominio?>admin/app/ajax/ajax.consulta.servicio.agregar.php')
        .then(response => response.text())
        .then(data => {
          body_modal_agregar.innerHTML = data
        })
    }
</script>