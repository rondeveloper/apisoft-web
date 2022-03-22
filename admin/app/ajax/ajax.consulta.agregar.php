<?php
if (isset($_GET['guardar-consulta'])) {
  $btn_consult = "Guardar Consulta";
} else {
  $btn_consult = "Enviar Mensaje";
}
?>
<form class="row g-3" method="post" action="">
  <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
    <div class="card-header bg-transparent border-primary text-primary ">
      Antes de comenzar, nos gustaría comprender mejor sus necesidades.
    </div>
    <div class="card-body text-primary">
      <div class="row">
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Nombre</label>
          <input placeholder="Nombre" type="text" class="form-control" id="inputPassword4" name="nombre" required />
        </div>
        <div class="col-md-6">
          <label for="inputAddress" class="form-label">Apellido</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Apellido" name="apellido" />
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Email</label>
          <input placeholder="Email" type="email" class="form-control" id="inputPassword4" name="email" required />
        </div>
        <div class="col-md-6">
          <label for="inputAddress" class="form-label">Telefono</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Telefono" name="telefono" />
        </div>
        <div class="col-md-12">
          <label for="inputAddress" class="form-label">CUÉNTANOS LO QUE ESTÁ EN TU MENTE</label><textarea id="inputAddress" class="form-control" placeholder="Mensaje" name="mensaje"></textarea>

        </div>
      </div>
    </div>
    <div class="card-footer bg-transparent border-primary">
      <div class="col-12">
        <input type="hidden" name="agregar-consulta" value="true" />
        <button type="submit" class="btn btn-primary mx-auto d-block">
          <?= $btn_consult ?>
        </button>
      </div>
    </div>
  </div>
</form>