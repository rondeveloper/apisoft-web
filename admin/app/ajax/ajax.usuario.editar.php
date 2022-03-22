<?php
$codigo_usuario = $_GET['codigo_usuario'];
include "../items/DB.php";
$consulta_select_usuario = "SELECT * FROM usuarios WHERE `id_usuario`='$codigo_usuario'";
$resultado = mysqli_query($conexion, $consulta_select_usuario);
if (mysqli_num_rows($resultado) == 0) {
  echo 'el usuario no fue encontrado';
} else {
  $datos_usuario = mysqli_fetch_array($resultado);
?>
  <form class="row g-3" method="post" action="">
    <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
      <div class="card-header bg-transparent border-primary text-primary display-4">
        Usuario
      </div>
      <div class="card-body text-primary">
        <div class="row">
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Usuario</label>
            <input placeholder="Usuario" type="text" class="form-control" id="inputPassword4" name="usuario" value="<?= $datos_usuario['usuario'] ?>" required />
          </div>
          <div class="col-md-6">
            <label for="inputAddress" class="form-label">Contrase&ntilde;a</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Contrase&ntilde;a" name="contrasena" value="<?= $datos_usuario['password'] ?>" />
          </div>
        </div>
      </div>
      <div class="card-footer bg-transparent border-primary">
        <div class="col-12">
          <input type="hidden"name="id-usuario" value="<?= $datos_usuario['id_usuario'] ?>" required/>
          <input type="hidden" name="editar-usuario" value="true" />
          <button type="submit" class="btn btn-primary mx-auto d-block">
            Editar Usuario
          </button>
        </div>
      </div>
    </div>
  </form>
<?php
}
?>