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
  <form class="row g-3" method="post" action="">
    <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
      <div class="card-header bg-transparent border-primary text-primary display-4">
        Seguimiento Proyecto
      </div>
      <div class="card-body text-primary">
        <div class="row">
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Id Proyecto</label>
            <input value="<?= $datos_seguimiento_proyecto['id_proyecto'] ?>" placeholder="Id Proyecto" type="number" class="form-control" id="inputPassword4" name="id-proyecto" required />
          </div>
          <div class="col-md-6">
            <label for="inputAddress" class="form-label">Id Encargado</label>
            <input value="<?= $datos_seguimiento_proyecto['id_encargado'] ?>" type="number" class="form-control" id="inputAddress" placeholder="Id Encargado" name="id-encargado" />
          </div>
          <div class="col-md-6">
            <label for="inputAddress" class="form-label">Id Programadores</label>
            <input value="<?= $datos_seguimiento_proyecto['id_programadores'] ?>" type="text" class="form-control" id="inputAddress" placeholder="Id Programadores" name="id-programadores" />
          </div>
          <div class="col-md-6">
            <label for="inputAddress" class="form-label">Tareas Inicio</label>
            <input value="<?= $datos_seguimiento_proyecto['tareas_inicio'] ?>" type="text" class="form-control" id="inputAddress" placeholder="Tareas Inicio" name="tareas-inicio" required />
          </div>
          <div class="col-md-6">
            <label for="inputAddress" class="form-label">Tareas Final</label>
            <input value="<?= $datos_seguimiento_proyecto['tareas_final'] ?>" type="text" class="form-control" id="inputAddress" placeholder="Tareas Final" name="tareas-final" />
          </div>
          <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Detalle Proyecto</label>
            <input value="<?= $datos_seguimiento_proyecto['detalle_proyecto'] ?>" type="text" size="11" class="form-control" id="inputAddress2" placeholder="Detalle Proyecto" name="detalle-proyecto" required />
          </div>
          <?php
           $estado_uno = "";
          $estado = $datos_seguimiento_proyecto['estado'];
          if ($estado == "realizado") {
            $estado_uno = "selected";
          }
          ?>
          <div class="col-md-6">
            <label for="select" class="form-label">Estado</label>
            <select class="form-select" id="select" name="estado" aria-label="Default select example">
              <option value="no realizado">no realizado</option>
              <option <?= $estado_uno ?> value="realizado">realizado</option>
            </select>
          </div>
        </div>
      </div>
      <div class="card-footer bg-transparent border-primary">
        <div class="col-12">
          <input value="<?= $datos_seguimiento_proyecto['id_seguimiento_proyecto'] ?>" name="id-seguimiento-proyecto" type="hidden" />
          <input type="hidden" name="editar-seguimiento_proyecto" value="true" />
          <button type="submit" class="btn btn-primary mx-auto d-block">
            Editar Seguimiento Proyecto
          </button>
        </div>
      </div>
    </div>
  </form>
<?php
}
?>