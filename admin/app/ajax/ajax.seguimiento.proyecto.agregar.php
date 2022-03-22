<?php
include "../items/DB.php";

 if(isset($_GET['codigo_personal'])){
   $id_personal=$_GET["codigo_personal"];
 
 $consulta_select_proyectos= "SELECT `id_proyecto` FROM proyectos WHERE `id_encargado`=$id_personal";
$resultado_consulta = mysqli_query($conexion, $consulta_select_proyectos);
$proyecto=mysqli_fetch_array($resultado_consulta);
$id_proyecto = $proyecto['id_proyecto'];
}
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
                    <input value="<?=$id_proyecto?>" placeholder="Id Proyecto" type="number" class="form-control" id="inputPassword4" name="id-proyecto" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Encargado</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="Id Encargado" name="id-encargado" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Programadores</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Id Programadores" name="id-programadores" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Tareas Inicio</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Tareas Inicio" name="tareas-inicio" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Tareas Final</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Tareas Final" name="tareas-final" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Detalle Proyecto</label>
                    <input type="text" size="11" class="form-control" id="inputAddress2" placeholder="Detalle Proyecto" name="detalle-proyecto" required />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input type="hidden" name="agregar-seguimiento_proyecto" value="true" />
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Agregar Seguimiento Proyecto
                  </button>
                </div>
              </div>
            </div>
          </form>