<?php
$codigo_plan = $_GET['codigo_plan'];
include "../items/DB.php";
$consulta_select_planes= "SELECT * FROM planes WHERE `id_planes`='$codigo_plan'";
$resultado = mysqli_query($conexion, $consulta_select_planes);
if (mysqli_num_rows($resultado) == 0) {
  echo 'el plan no fue encontrado';
} else {
  $datos_plan = mysqli_fetch_array($resultado);
?>
          <form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Plan
              </div>
              <div class="card-body text-primary">
                <div class="row">
                <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Servicio</label>
                    <input value="<?=$datos_plan['id_servicio']?>" type="number" class="form-control" id="inputAddress" placeholder="Id Servicio" name="id-servicio" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Programadores</label>
                    <input value="<?=$datos_plan['id_programadores']?>" type="text" class="form-control" id="inputAddress" placeholder="Id Programadores" name="id-programadores" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Proyecto</label>
                    <input value="<?=$datos_plan['id_proyectos']?>" type="number" class="form-control" id="inputAddress" placeholder="Id Proyecto" name="id-proyecto" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Plan</label>
                    <input value="<?=$datos_plan['plan']?>" placeholder="Plan" type="text" class="form-control" id="inputPassword4" name="plan" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Actividades</label>
                    <input value="<?=$datos_plan['actividades']?>" type="text" class="form-control" id="inputAddress" placeholder="Actividades" name="actividades" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Tareas</label>
                    <input value="<?=$datos_plan['tareas']?>" type="text" size="11" class="form-control" id="inputAddress2" placeholder="Tareas" name="tareas" required />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input name="id-plan" value="<?=$datos_plan['id_planes']?>" type="hidden"/>
                  <input type="hidden" name="editar-plan" value="true" />
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Editar Plan
                  </button>
                </div>
              </div>
            </div>
          </form>
<?php
}
?>