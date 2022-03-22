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
  <form class="row g-3" method="post" action="" onsubmit="
  
return confirm('Esta seguro de eliminar el registro?')
">
    <div class="card border-danger mb-3 mx-auto" style="max-width: 1000px">

      <div class="card-body text-danger">
        <div class="row">
        <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Id Consulta Servicio</label>
                    <input value="<?=$datos_consulta_servicio['id_consulta_servicio']?>" placeholder="Id Consulta Servicio" type="number" class="form-control" id="inputPassword4" name="id-consulta-servicio" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Id Servicio</label>
                    <input value="<?=$datos_consulta_servicio['id_servicio']?>" placeholder="Id Servicio" type="number" class="form-control" id="inputPassword4" name="id-servicio" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Cliente</label>
                    <input value="<?=$datos_consulta_servicio['id_cliente']?>" type="number" class="form-control" id="inputAddress" placeholder="Id Cliente" name="id-cliente" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Proyecto</label>
                    <input value="<?=$datos_consulta_servicio['id_proyecto']?>" type="number" class="form-control" id="inputAddress" placeholder="Id Proyecto" name="id-proyecto" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Programadores</label>
                    <input value="<?=$datos_consulta_servicio['id_programadores']?>" type="text" class="form-control" id="inputAddress" placeholder="Id Programadores" name="id-programadores" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Encargado</label>
                    <input value="<?=$datos_consulta_servicio['id_encargado']?>" type="number" class="form-control" id="inputAddress" placeholder="Id Encargado" name="id-encargado" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Observacion Costo Servicio</label>
                    <input value="<?=$datos_consulta_servicio['observacion_costo_servicio']?>" type="text" size="11" class="form-control" id="inputAddress2" placeholder="Observacion Costo Servicio" name="observacion-costo-servicio" required />
                  </div>
        </div>
      </div>
      <div class="card-footer bg-transparent border-danger">
        <div class="col-12">
          <input type="hidden" name="eliminar-consulta_servicio" value="true" />
          <button type="submit" class="btn btn-danger mx-auto d-block">
            Eliminar Consulta Servicio
          </button>
        </div>
      </div>
    </div>
  </form>
<?php
}
?>