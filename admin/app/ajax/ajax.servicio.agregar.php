<?php
 if(isset($_GET['id-cliente'])){
   $id_cliente=$_GET["id-cliente"];
 }
 ?>
<form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Servicio
              </div>
              <div class="card-body text-primary">
                <div class="row">
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Programadores</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Id Programadores" name="id-programadores" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Proyecto</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="Id Proyecto" name="id-proyecto" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Cliente</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="Id Cliente" name="id-cliente" value="<?=$id_cliente?>"/>
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Servicio</label>
                    <input type="text" size="11" class="form-control" id="inputAddress2" placeholder="Servicio" name="servicio" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Detalles</label>
                    <input type="text" size="11" class="form-control" id="inputAddress2" placeholder="Detalles" name="detalles" required />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input type="hidden" name="agregar-servicio" value="true" />
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Agregar Servicio
                  </button>
                </div>
              </div>
            </div>
          </form>