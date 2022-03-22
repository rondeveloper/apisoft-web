<?php
$codigo_cliente = $_GET['codigo_cliente'];
include "../items/DB.php";
$consulta_select_clientes= "SELECT * FROM clientes WHERE `id_clientes`='$codigo_cliente'";
$resultado = mysqli_query($conexion, $consulta_select_clientes);
if (mysqli_num_rows($resultado) == 0) {
  echo 'el cliente no fue encontrado';
} else {
  $datos_cliente = mysqli_fetch_array($resultado);
?>
         <form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Cliente
              </div>
              <div class="card-body text-primary">
                <div class="row">
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Cliente</label>
                    <input placeholder="Cliente" type="text" class="form-control" id="inputPassword4" name="cliente" required value="<?=$datos_cliente['cliente']?>" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Detalle</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Detalle" name="detalle" value="<?=$datos_cliente['detalle']?>" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Contenido de Proyecto</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Contenido de Proyecto" name="contenido-de-proyecto" value="<?=$datos_cliente['contenido_proyecto']?>" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Detalle de Proyecto</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Detalle de Proyecto" name="detalle-de-proyecto" required value="<?=$datos_cliente['detalle_de_proyecto']?>" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Contacto</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Contacto" name="contacto" value="<?=$datos_cliente['contacto']?>" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="inputAddress2" placeholder="Fecha" name="fecha" required value="<?=$datos_cliente['fecha']?>" />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input type="hidden" name="editar-cliente" value="true" />
                  <input type="hidden" name="id-cliente" value="<?=$datos_cliente['id_clientes']?>"/>
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                  Editar Cliente
                  </button>
                </div>
              </div>
            </div>
          </form>
<?php
}
?>