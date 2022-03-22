
<form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Plan
              </div>
              <div class="card-body text-primary">
                <div class="row">
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Servicio</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="Id Servicio" name="id-servicio" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Programadores</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Id Programadores" name="id-programadores" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Proyecto</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="Id Proyecto" name="id-proyecto" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Plan</label>
                    <input placeholder="Plan" type="text" class="form-control" id="inputPassword4" name="plan" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Actividades</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Actividades" name="actividades" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Tareas</label>
                    <input type="text" size="11" class="form-control" id="inputAddress2" placeholder="Tareas" name="tareas" required />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input type="hidden" name="agregar-plan" value="true" />
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Agregar Plan
                  </button>
                </div>
              </div>
            </div>
          </form>