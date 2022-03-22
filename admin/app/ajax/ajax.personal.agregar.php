
<form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Personal
              </div>
              <div class="card-body text-primary">
                <div class="row">
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Personal</label>
                    <input placeholder="Personal" type="text" class="form-control" id="inputPassword4" name="personal" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputAddress" placeholder="Email" name="email" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Telefono</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="telefono" name="telefono"required/>
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Actividad</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Actividad" name="actividad" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="inputAddress2" placeholder="Fecha" name="fecha" required />
                  </div><div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Edad</label>
                    <input type="number" class="form-control" id="inputAddress2" placeholder="Edad" name="edad" required />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input type="hidden" name="agregar-personal" value="true" />
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Agregar Personal
                  </button>
                </div>
              </div>
            </div>
          </form>