<?php
$codigo_personal = $_GET['codigo_personal'];
include "../items/DB.php";
$consulta_select_personales= "SELECT * FROM personales WHERE `id_personal`='$codigo_personal'";
$resultado = mysqli_query($conexion, $consulta_select_personales);
if (mysqli_num_rows($resultado) == 0) {
  echo 'el personal no fue encontrado';
} else {
  $datos_personal = mysqli_fetch_array($resultado);
?>
          <form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Personal
              </div>
              <div class="card-body text-primary">
                <div class="row">
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Personal</label>
                    <input placeholder="Personal" type="text" class="form-control" id="inputPassword4" name="personal" value="<?=$datos_personal['personal']?>" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputAddress" placeholder="Email" name="email" value="<?=$datos_personal['email']?>"/>
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Telefono</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="Telefono" name="telefono" required value="<?=$datos_personal['telefono']?>"/>
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Actividad</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Actividad" name="actividad"value="<?=$datos_personal['actividad']?>" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="inputAddress2" placeholder="Fecha" name="fecha" required value="<?=$datos_personal['fecha']?>"/>
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Edad</label>
                    <input type="number" class="form-control" id="inputAddress2" placeholder="Edad" name="edad" value="<?=$datos_personal['edad']?>" required />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input type="hidden" name="editar-personal" value="true" />
                  <input type="hidden" name="id-personal" value="<?=$datos_personal['id_personal']?>"/>
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Editar Personal
                  </button>
                </div>
              </div>
            </div>
          </form>
<?php
}
?>