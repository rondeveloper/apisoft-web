<?php
$codigo_consulta_servicio = $_GET['codigo_consulta_servicio'];
include "../items/DB.php";
$consulta_select_consulta_servicio = "SELECT * FROM consulta_servicio WHERE `id_consulta_servicio`='$codigo_consulta_servicio'";
$resultado = mysqli_query($conexion, $consulta_select_consulta_servicio);
if (mysqli_num_rows($resultado) == 0) {
  echo 'el cliente no fue encontrado';
} else {
  $datos_consulta_servicio = mysqli_fetch_array($resultado);
?>
  <form class="row g-3" method="post" action="">
    <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
      <div class="card-header bg-transparent border-primary text-primary display-4">
        Consulta Servicio
      </div>
      <div class="card-body text-primary">
        <div class="row">
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Id Servicio</label>
            <input value="<?= $datos_consulta_servicio['id_servicio'] ?>" placeholder="Id Servicio" type="number" class="form-control" id="inputPassword4" name="id-servicio" required />
          </div>
          <div class="col-md-6">
            <label for="inputAddress" class="form-label">Id Cliente</label>
            <input value="<?= $datos_consulta_servicio['id_cliente'] ?>" type="number" class="form-control" id="inputAddress" placeholder="Id Cliente" name="id-cliente" />
          </div>
          <div class="col-md-6">
            <label for="inputAddress" class="form-label">Id Proyecto</label>
            <input value="<?= $datos_consulta_servicio['id_proyecto'] ?>" type="number" class="form-control" id="inputAddress" placeholder="Id Proyecto" name="id-proyecto" />
          </div>
          <div class="col-md-6">
            <label for="inputAddress" class="form-label">Id Programadores</label>
            <input value="<?= $datos_consulta_servicio['id_programadores'] ?>" type="text" class="form-control" id="inputAddress" placeholder="Id Programadores" name="id-programadores" required />
          </div>
          <div class="col-md-6">
            <label for="inputAddress" class="form-label">Id Encargado</label>
            <input value="<?= $datos_consulta_servicio['id_encargado'] ?>" type="number" class="form-control" id="inputAddress" placeholder="Id Encargado" name="id-encargado" />
          </div>
          <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Observacion Costo Servicio</label>
            <input value="<?= $datos_consulta_servicio['observacion_costo_servicio'] ?>" type="text" size="11" class="form-control" id="inputAddress2" placeholder="Observacion Costo Servicio" name="observacion-costo-servicio" required />
          </div>
          <?php
          $estado_uno = "";
          $estado = $datos_consulta_servicio['estado'];
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
          <input type="hidden" name="id-consulta-servicio" value="<?= $datos_consulta_servicio['id_consulta_servicio'] ?>" />
          <input type="hidden" name="editar-consulta_servicio" value="true" />
          <button type="submit" class="btn btn-primary mx-auto d-block">
            Editar Consulta Servicio
          </button>
        </div>
      </div>
    </div>
  </form>
<?php
}
?>