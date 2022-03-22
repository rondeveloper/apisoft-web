<?php
$codigo_consulta = $_GET['codigo_consulta'];
include "../items/DB.php";
$consulta_select= "SELECT * FROM consultas WHERE `id_consulta`='$codigo_consulta'";
$resultado = mysqli_query($conexion, $consulta_select);
if (mysqli_num_rows($resultado) == 0) {
  echo 'la consulta no fue encontrado';
} else {
  $datos_consulta = mysqli_fetch_array($resultado);
?>
          <form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Consulta
              </div>
              <div class="card-body text-primary">
                <div class="row">
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Nombre</label>
                    <input value="<?=$datos_consulta['nombre']?>" placeholder="Nombre" type="text" class="form-control" id="inputPassword4" name="nombre" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Apellido</label>
                    <input value="<?=$datos_consulta['apellido']?>" type="text" class="form-control" id="inputAddress" placeholder="Apellido" name="apellido" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Email</label>
                    <input value="<?=$datos_consulta['email']?>" placeholder="Email" type="email" class="form-control" id="inputPassword4" name="email" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Telefono</label>
                    <input value="<?=$datos_consulta['telefono']?>" type="text" class="form-control" id="inputAddress" placeholder="Telefono" name="telefono" />
                  </div>
                  <div class="col-md-12">
                    <label for="inputAddress" class="form-label">Mensaje</label><input value="<?=$datos_consulta['mensaje']?>" type="text" id="inputAddress" class="form-control" placeholder="Mensaje" name="mensaje"/>
                   
                  </div>

                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input type="hidden" name="editar-consulta" value="true" />
                  <input type="hidden" name="id-consulta" value="<?=$datos_consulta['id_consulta']?>"/>
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Editar Consulta
                  </button>
                </div>
              </div>
            </div>
          </form>
<?php
}
?>