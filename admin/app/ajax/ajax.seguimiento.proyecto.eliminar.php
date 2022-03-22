<?php
$codigo_seguimiento_proyecto = $_GET['codigo_seguimiento_proyecto'];
include "../items/DB.php";
$consulta_select_seguimiento_proyecto = "SELECT * FROM seguimiento_proyectos WHERE `id_seguimiento_proyecto`='$codigo_seguimiento_proyecto'";
$resultado = mysqli_query($conexion, $consulta_select_seguimiento_proyecto);
if (mysqli_num_rows($resultado) == 0) {
  echo 'el cliente no fue encontrado';
} else {
  $datos_seguimiento_proyecto = mysqli_fetch_array($resultado);
?>
  <form class="row g-3" method="post" action="" onsubmit="
  
return confirm('Esta seguro de eliminar el registro?')
">
    <div class="card border-danger mb-3 mx-auto" style="max-width: 1000px">

      <div class="card-body text-danger">
        <div class="row">
        <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Id Seguimiento Proyecto</label>
                    <input value="<?=$datos_seguimiento_proyecto['id_seguimiento_proyecto']?>" placeholder="Id Seguimiento Proyecto" type="number" class="form-control" id="inputPassword4" name="id-seguimiento-proyecto" required />
                  </div>
        <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Id Proyecto</label>
                    <input value="<?=$datos_seguimiento_proyecto['id_proyecto']?>" placeholder="Id Proyecto" type="number" class="form-control" id="inputPassword4" name="id-proyecto" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Encargado</label>
                    <input value="<?=$datos_seguimiento_proyecto['id_encargado']?>" type="number" class="form-control" id="inputAddress" placeholder="Id Encargado" name="id-encargado" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Programadores</label>
                    <input value="<?=$datos_seguimiento_proyecto['id_programadores']?>" type="text" class="form-control" id="inputAddress" placeholder="Id Programadores" name="id-programadores" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Tareas Inicio</label>
                    <input value="<?=$datos_seguimiento_proyecto['tareas_inicio']?>" type="text" class="form-control" id="inputAddress" placeholder="Tareas Inicio" name="tareas-inicio" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Tareas Final</label>
                    <input value="<?=$datos_seguimiento_proyecto['tareas_final']?>" type="text" class="form-control" id="inputAddress" placeholder="Tareas Final" name="tareas-final" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Detalle Proyecto</label>
                    <input value="<?=$datos_seguimiento_proyecto['detalle_proyecto']?>" type="text" size="11" class="form-control" id="inputAddress2" placeholder="Detalle Proyecto" name="detalle-proyecto" required />
                  </div>
        </div>
      </div>
      <div class="card-footer bg-transparent border-danger">
        <div class="col-12">
          <input type="hidden" name="eliminar-seguimiento_proyecto" value="true" />
          <button type="submit" class="btn btn-danger mx-auto d-block">
            Eliminar Seguimiento Proyecto
          </button>
        </div>
      </div>
    </div>
  </form>
<?php
}
?>