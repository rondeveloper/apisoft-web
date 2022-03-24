<?php
 if(isset($_GET['codigo_personal'])){
   $id_personal=$_GET["codigo_personal"];
 }
 ?>
<form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Seguimiento Personal
              </div>
              <div class="card-body text-primary">
                <div class="row">
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Id Personal</label>
                    <input placeholder="Id Personal" type="number" class="form-control" id="inputPassword4" name="id-personal"value="<?=$id_personal?>" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Proyecto Actual</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="Id Proyecto Actual" name="id-proyecto-actual" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Actividad Actual</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Actividad Actual" name="actividad-actual" />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                <input type="hidden" name="estado" value="no realizado"/>
                  <input type="hidden" name="agregar-seguimiento_personal" value="true" />
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Agregar Seguimiento Personal
                  </button>
                </div>
              </div>
            </div>
          </form>