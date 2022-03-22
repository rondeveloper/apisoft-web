<?php
$codigo_seguimiento_personal = $_GET['codigo_seguimiento_personal'];
include "../items/DB.php";
$consulta_select_seguimiento_personal = "SELECT * FROM seguimiento_personal WHERE `id_seguimiento_personal`='$codigo_seguimiento_personal'";
$resultado = mysqli_query($conexion, $consulta_select_seguimiento_personal);
if (mysqli_num_rows($resultado) == 0) {
  echo 'el cliente no fue encontrado';
} else {
  $datos_seguimiento_personal = mysqli_fetch_array($resultado);
?>
  <form class="row g-3" method="post" action="" onsubmit="
  
return confirm('Esta seguro de eliminar el registro?')
">
    <div class="card border-danger mb-3 mx-auto" style="max-width: 1000px">

      <div class="card-body text-danger">
        <div class="row">
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Id Seguimiento Personal</label>
            <input placeholder="Id Seguimiento Personal" type="number" class="form-control" id="inputPassword4" name="id-seguimiento-personal" value="<?= $datos_seguimiento_personal['id_seguimiento_personal'] ?>" required/>
          </div>
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
      <div class="card-footer bg-transparent border-danger">
        <div class="col-12">
          <input type="hidden" name="eliminar-seguimiento_personal" value="true" />
          <button type="submit" class="btn btn-danger mx-auto d-block">
            Eliminar Seguimiento Personal
          </button>
        </div>
      </div>
    </div>
  </form>
<?php
}
?>