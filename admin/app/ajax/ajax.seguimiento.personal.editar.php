<?php
$codigo_seguimiento_personal = $_GET['codigo_seguimiento_personal'];
include "../items/DB.php";
$consulta_select_seguimiento_personal= "SELECT * FROM seguimiento_personal WHERE `id_seguimiento_personal`='$codigo_seguimiento_personal'";
$resultado = mysqli_query($conexion, $consulta_select_seguimiento_personal);
if (mysqli_num_rows($resultado) == 0) {
  echo 'el cliente no fue encontrado';
} else {
  $datos_seguimiento_personal = mysqli_fetch_array($resultado);
?>
          <form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Seguimiento Personal
              </div>
              <div class="card-body text-primary">
                <div class="row">
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Id Personal</label>
                    <input value="<?=$datos_seguimiento_personal['id_personal']?>" placeholder="Id Personal" type="number" class="form-control" id="inputPassword4" name="id-personal" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Proyecto Actual</label>
                    <input value="<?=$datos_seguimiento_personal['id_proyecto_actual']?>" type="number" class="form-control" id="inputAddress" placeholder="Id Proyecto Actual" name="id-proyecto-actual" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Actividad Actual</label>
                    <input value="<?=$datos_seguimiento_personal['actividad_actual']?>" type="text" class="form-control" id="inputAddress" placeholder="Actividad Actual" name="actividad-actual" />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input value="<?=$datos_seguimiento_personal['id_seguimiento_personal']?>" name="id-seguimiento-personal" type="hidden"/>
                  <input  type="hidden" name="editar-seguimiento_personal" value="true" />
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Editar Seguimiento Personal
                  </button>
                </div>
              </div>
            </div>
          </form>
<?php
}
?>