<?php
  include "app/items/DB.php";
  if (isset($_POST['agregar-cotizacion'])) {
    $id_cliente = $_POST['id-cliente'];
    $cotizacion = $_POST['cotizacion'];
    $nombre_empresa = $_POST['nombre-empresa'];
    $items = $_POST['items'];
    $descripciones = $_POST['descripciones'];
    $total_pago = $_POST['total-pago'];
    $propuesta = $_POST['propuesta'];
    $consulta_insert_cotizacion = "INSERT INTO cotizaciones
    (`id_cliente`, `cotizacion`, `nombre_empresa`, `items`, `descripciones`, `total_pago`, `propuesta`) 
    VALUES 
    ('$id_cliente', '$cotizacion', '$nombre_empresa', '$items', '$descripciones', '$total_pago', '$propuesta')";
     $resultado = mysqli_query($conexion, $consulta_insert_cotizacion);
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
        HAY UN ERROR: <?= $consulta_insert_cotizacion . mysqli_error($conexion) ?>.
      </div>
    <?php
    }
  }
  if (isset($_POST['editar-cotizacion'])) {
    $id_cotizacion = $_POST['id-cotizacion'];
    $id_cliente = $_POST['id-cliente'];
    $cotizacion = $_POST['cotizacion'];
    $nombre_empresa = $_POST['nombre-empresa'];
    $items = $_POST['items'];
    $descripciones = $_POST['descripciones'];
    $total_pago = $_POST['total-pago'];
    $propuesta = $_POST['propuesta'];
    $consulta_update_cotizacion = "UPDATE cotizaciones SET  
    `id_cliente`='$id_cliente', `cotizacion`='$cotizacion',
     `nombre_empresa`='$nombre_empresa', `items`='$items', 
     `descripciones`='$descripciones', `total_pago`='$total_pago', `propuesta`='$propuesta'
    WHERE `id_cotizacion`='$id_cotizacion' LIMIT 1 ";
    $resultado = mysqli_query($conexion,$consulta_update_cotizacion);
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
        HAY UN ERROR: <?= $consulta_update_cotizacion . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  if (isset($_POST['eliminar-cotizacion'])) {
    $id_cotizacion = $_POST['id-cotizacion'];
    $consulta_delete_cotizacion = "DELETE FROM cotizaciones WHERE `id_cotizacion`='$id_cotizacion' LIMIT 1 ";
    $resultado = mysqli_query($conexion,  $consulta_delete_cotizacion );
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
        HAY UN ERROR: <?=$consulta_delete_cotizacion  . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
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
  }?>
<div class="d-flex justify-content-between">
    <h4 class="text-primary fw-bolder fs-2 my-0">Cotizaciones <i class='bx bx-group nav_icon bx-flashing fs-3'></i></h4>
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="datos_modal_agregar()">
      Agregar Cotizacion
    </button>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">APISOFT Cotizacion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="body_modal_agregar">
          
        </div>
      </div>
    </div>
  </div>
  <?php
 $consulta_select_cotizacion= "SELECT * FROM cotizaciones ORDER BY `id_cotizacion` ASC";
$resultado_consulta = mysqli_query($conexion, $consulta_select_cotizacion);
?>
<hr>
<table class="table table-striped table-light table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id Cotizacion</th>
      <th scope="col">Id Cliente</th>
      <th scope="col">Cotizacion</th>
      <th scope="col">Nombre Empresa</th>
      <th scope="col">Items</th>
      <th scope="col">Descripciones</th>
      <th scope="col">Total Pago</th>
      <th>Propuestas</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $contar_cotizacion = 1;
    while ($datos_array = mysqli_fetch_array($resultado_consulta)) {
    ?>
      <tr>
        <th scope="row"><?= $contar_cotizacion ?></th>
        <td class="text-center"><?php echo $datos_array['id_cotizacion']; ?></td>
        <td><?php echo $datos_array['id_cliente']; ?></td>
        <td><?php echo $datos_array['cotizacion']; ?></td>
        <td><?php echo $datos_array['nombre_empresa']; ?></td>
        <td><?php echo $datos_array['items']; ?></td>
        <td><?php echo $datos_array['descripciones']; ?></td>
        <td><?php echo $datos_array['total_pago']; ?></td>
        <td><?php echo $datos_array['propuesta']; ?></td>

        <td class="">
          <div class="d-flex flex-column"><div class="d-flex mb-1">
          <button onclick="mostrar_datos_modal_editar(<?php echo $datos_array['id_cotizacion']; ?>)" class="btn btn-outline-info" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-editar">
            <i class='bx bx-edit nav_icon'>Editar</i>
          </button>
          &nbsp;
          <button onclick="mostrar_datos_modal_eliminar(<?php echo $datos_array['id_cotizacion']; ?>)" class="btn btn-outline-danger" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-eliminar">
            <i class='bx bx-trash nav_icon'>Eliminar</i>
          </button>&nbsp; </div><button type="button" class="btn btn-sm btn-primary " data-bs-toggle="modal" data-bs-target="#consulta_servicio" onclick="datos_modal_agregar_consulta_servicio(<?php echo $datos_array['id_cliente']; ?>)">
      Agregar Consulta Servicio
    </button>
  </div>
  <div class="modal fade" id="consulta_servicio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">APISOFT Consulta Servicio</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="body_modal_agregar_consulta_servicio">
          
        </div>
      </div>
    </div>
  </div>
         </div>
        </td>
      </tr>
    <?php 
    $contar_cotizacion++;
    }
    ?>
  </tbody>
</table>
<div class="modal fade" id="modal-editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Cotizacion</h5>
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
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Cotizacion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_eliminar"></div>
    </div>
  </div>
</div>
<script>
    function mostrar_datos_modal_editar(id_cotizacion) {
      body_modal_editar = document.getElementById('body_modal_editar')
      fetch('<?=$_dominio?>apisoft-web/admin/app/ajax/ajax.cotizacion.editar.php?codigo_cotizacion=' + id_cotizacion)
        .then(response => response.text())
        .then(data => {
          body_modal_editar.innerHTML = data
        })
    }

    function mostrar_datos_modal_eliminar(id_cotizacion) {
      body_modal_eliminar = document.getElementById('body_modal_eliminar')
      fetch('<?=$_dominio?>apisoft-web/admin/app/ajax/ajax.cotizacion.eliminar.php?codigo_cotizacion=' + id_cotizacion)
        .then(response => response.text())
        .then(data => {
          body_modal_eliminar.innerHTML = data
        })
    }

    function datos_modal_agregar() {
      body_modal_agregar = document.getElementById('body_modal_agregar')
      fetch('<?=$_dominio?>apisoft-web/admin/app/ajax/ajax.cotizacion.agregar.php')
        .then(response => response.text())
        .then(data => {
          body_modal_agregar.innerHTML = data
        })
    }
    function datos_modal_agregar_consulta_servicio(id_cliente) {
      body_modal_agregar = document.getElementById('body_modal_agregar_consulta_servicio')
      fetch('<?=$_dominio?>apisoft-web/admin/app/ajax/ajax.consulta.servicio.agregar.php?codigo_cliente='+id_cliente)
        .then(response => response.text())
        .then(data => {
          body_modal_agregar.innerHTML = data
        })
    }
</script>