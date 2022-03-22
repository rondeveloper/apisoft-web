 <?php
 if(isset($_GET['id-cliente'])){
   $id_cliente=$_GET["id-cliente"];
 }
 ?>
<form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Proyecto
              </div>
              <div class="card-body text-primary">
                <div class="row">
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Cliente</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="Id Cliente" name="id-cliente" value="<?=$id_cliente?>" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Encargado</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="Id Encargado" name="id-encargado" required />
                  </div>

                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Proyecto</label>
                    <input placeholder="proyecto" type="text" class="form-control" id="inputPassword4" name="proyecto" required />
                  </div>
                  
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Presupuesto</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Presupuesto" name="presupuesto" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Duracion de Desarrollo Proyecto</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Duracion de Desarrollo Proyecto" name="duracion-desarrollo-proyecto" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Fecha Inicio</label>
                    <input type="date" class="form-control" id="inputAddress" placeholder="Fecha Inicio" name="fecha-inicio" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Fecha Presentacion</label>
                    <input type="date" class="form-control" id="inputAddress2" placeholder="Fecha Presentacion" name="fecha-presentacion" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Fecha Entrega</label>
                    <input type="date" class="form-control" id="inputAddress2" placeholder="Fecha Entrega" name="fecha-entrega" required />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input type="hidden" name="agregar-proyecto" value="true" />
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Agregar proyecto
                  </button>
                </div>
              </div>
            </div>
          </form>