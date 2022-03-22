<?php
$codigo_cotizacion = $_GET['codigo_cotizacion'];
include "../items/DB.php";
$consulta_select_cotizacion = "SELECT * FROM cotizaciones WHERE `ID_cotizacion`='$codigo_cotizacion'";
$resultado = mysqli_query($conexion, $consulta_select_cotizacion);
if (mysqli_num_rows($resultado) == 0) {
  echo 'el cliente no fue encontrado';
} else {
  $datos_cotizacion = mysqli_fetch_array($resultado);
?>
  <form class="row g-3" method="post" action="" onsubmit="
  
return confirm('Esta seguro de eliminar el registro?')
">
    <div class="card border-danger mb-3 mx-auto" style="max-width: 1000px">

      <div class="card-body text-danger">
        <div class="row">
        <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Cotizacion</label>
                    <input value="<?=$datos_cotizacion['id_cotizacion']?>" type="number" class="form-control" id="inputAddress" placeholder="Id Cotizacion"  />
                  </div>
        <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Cliente</label>
                    <input value="<?=$datos_cotizacion['id_cliente']?>" type="number" class="form-control" id="inputAddress" placeholder="Id Cliente" name="id-cliente" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Cotizacion</label>
                    <input value="<?=$datos_cotizacion['cotizacion']?>" placeholder="Cotizacion" type="text" class="form-control" id="inputPassword4" name="cotizacion" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Nombre de Empresa</label>
                    <input value="<?=$datos_cotizacion['nombre_empresa']?>" type="text" class="form-control" id="inputAddress" placeholder="Nombre de Empresa" name="nombre-empresa" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Items</label>
                    <input value="<?=$datos_cotizacion['items']?>" type="text" class="form-control" id="inputAddress" placeholder="Items" name="items" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Descripciones	</label>
                    <input value="<?=$datos_cotizacion['descripciones']?>" type="text" size="11" class="form-control" id="inputAddress2" placeholder="Descripciones	" name="descripciones"  />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Total Pago</label>
                    <input value="<?=$datos_cotizacion['total_pago']?>" type="text" size="11" class="form-control" id="inputAddress2" placeholder="Total Pago" name="total-pago" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Propuesta</label>
                    <input value="<?=$datos_cotizacion['propuesta']?>" type="text" size="11" class="form-control" id="inputAddress2" placeholder="Propuesta" name="propuesta" required />
                  </div>
        </div>
      </div>
      <div class="card-footer bg-transparent border-danger">
        <div class="col-12">
          <input type="hidden" name="eliminar-cotizacion" value="true" />
          <input value="<?=$datos_cotizacion['id_cotizacion']?>" type="hidden"name="id-cotizacion" />
          <button type="submit" class="btn btn-danger mx-auto d-block">
            Eliminar Cotizacion
          </button>
        </div>
      </div>
    </div>
  </form>
<?php
}
?>