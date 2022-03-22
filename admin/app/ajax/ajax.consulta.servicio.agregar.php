<?php
 if(isset($_GET['codigo_cliente'])){
   $id_cliente=$_GET["codigo_cliente"];
   $readonly='readonly';
 }
 ?>
<form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Consulta Servicio
              </div>
              <div class="card-body text-primary">
                <div class="row">
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Id Servicio</label>
                    <input placeholder="Id Servicio" type="number" class="form-control" id="inputPassword4" name="id-servicio" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Cliente</label>
                    <input <?=$readonly?> value="<?=$id_cliente?>" type="number" class="form-control" id="inputAddress" placeholder="Id Cliente" name="id-cliente" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Proyecto</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="Id Proyecto" name="id-proyecto" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Programadores</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Id Programadores" name="id-programadores" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Encargado</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="Id Encargado" name="id-encargado" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Observacion Costo Servicio</label>
                    <input type="text" size="11" class="form-control" id="inputAddress2" placeholder="Observacion Costo Servicio" name="observacion-costo-servicio" required />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input type="hidden" name="agregar-consulta_servicio" value="true" />
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Agregar Consulta Servicio
                  </button>
                </div>
              </div>
            </div>
          </form>