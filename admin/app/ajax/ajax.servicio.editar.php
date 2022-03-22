<?php
$codigo_servicio = $_GET['codigo_servicio'];
include "../items/DB.php";
$consulta_select_servicios= "SELECT * FROM servicios WHERE `id_servicio`='$codigo_servicio'";
$resultado = mysqli_query($conexion, $consulta_select_servicios);
if (mysqli_num_rows($resultado) == 0) {
  echo 'el servicio no fue encontrado';
} else {
  $datos_servicio = mysqli_fetch_array($resultado);
?>
          <form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Servicio
              </div>
              <div class="card-body text-primary">
                <div class="row">
                <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Programadores</label>
                    <input value="<?=$datos_servicio['id_programadores']?>" type="text" class="form-control" id="inputAddress" placeholder="Id Programadores" name="id-programadores" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Proyecto</label>
                    <input value="<?=$datos_servicio['id_proyecto']?>" type="number" class="form-control" id="inputAddress" placeholder="Id Proyecto" name="id-proyecto" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Cliente</label>
                    <input value="<?=$datos_servicio['id_cliente']?>" type="number" class="form-control" id="inputAddress" placeholder="Id Cliente" name="id-cliente" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Servicio</label>
                    <input value="<?=$datos_servicio['servicio']?>" type="text" size="11" class="form-control" id="inputAddress2" placeholder="Servicio" name="servicio" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Detalles</label>
                    <input value="<?=$datos_servicio['detalles']?>" type="text" size="11" class="form-control" id="inputAddress2" placeholder="Detalles" name="detalles" required />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input type="hidden" name="id-servicio"value="<?=$datos_servicio['id_servicio']?>"/>
                  <input  type="hidden" name="editar-servicio" value="true" />
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Editar Servicio
                  </button>
                </div>
              </div>
            </div>
          </form>
<?php
}
?>