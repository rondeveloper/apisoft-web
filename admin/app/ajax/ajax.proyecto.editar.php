<?php
$codigo_proyecto = $_GET['codigo_proyecto'];
include "../items/DB.php";
$consulta_select_proyectos= "SELECT * FROM proyectos WHERE `id_proyecto`='$codigo_proyecto'";
$resultado = mysqli_query($conexion, $consulta_select_proyectos);
if (mysqli_num_rows($resultado) == 0) {
  echo 'el cliente no fue encontrado';
} else {
  $datos_proyecto = mysqli_fetch_array($resultado);
?>
          <form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Proyecto
              </div>
              <div class="card-body text-primary">
                <div class="row">
                <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Cliente</label>
                    <input value="<?=$datos_proyecto['id_cliente']?>" type="number" class="form-control" id="inputAddress" placeholder="Id Cliente" name="id-cliente" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Encargado</label>
                    <input value="<?=$datos_proyecto['id_encargado']?>" type="number" class="form-control" id="inputAddress" placeholder="Id Encargado" name="id-encargado" required />
                  </div>

                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Proyecto</label>
                    <input value="<?=$datos_proyecto['proyecto']?>" placeholder="proyecto" type="text" class="form-control" id="inputPassword4" name="proyecto" required />
                  </div>
                  
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Presupuesto</label>
                    <input value="<?=$datos_proyecto['presupuesto']?>" type="text" class="form-control" id="inputAddress" placeholder="Presupuesto" name="presupuesto" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Duracion de Desarrollo Proyecto</label>
                    <input value="<?=$datos_proyecto['duracion_desarrollo_proyecto']?>" type="text" class="form-control" id="inputAddress" placeholder="Duracion de Desarrollo Proyecto" name="duracion-desarrollo-proyecto" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Fecha Inicio</label>
                    <input value="<?=$datos_proyecto['fecha_inicio']?>" type="date" class="form-control" id="inputAddress" placeholder="Fecha Inicio" name="fecha-inicio" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Fecha Presentacion</label>
                    <input value="<?=$datos_proyecto['fecha_presentacion']?>" type="date" class="form-control" id="inputAddress2" placeholder="Fecha Presentacion" name="fecha-presentacion" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Fecha Entrega</label>
                    <input value="<?=$datos_proyecto['fecha_entrega']?>" type="date" class="form-control" id="inputAddress2" placeholder="Fecha Entrega" name="fecha-entrega" required />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input type="hidden" name="editar-proyecto" value="true" />
                  <input type="hidden" name="id-proyecto" value="<?=$datos_proyecto["id_proyecto"]?>"/>
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Editar Proyecto
                  </button>
                </div>
              </div>
            </div>
          </form>
<?php
}
?>