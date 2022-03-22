
          <form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Cliente
              </div>
              <div class="card-body text-primary">
                <div class="row">
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Cliente</label>
                    <input placeholder="Cliente" type="text" class="form-control" id="inputPassword4" name="cliente" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Detalle</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Detalle" name="detalle" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Contenido de Proyecto</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Contenido de Proyecto" name="contenido-de-proyecto" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Detalle de Proyecto</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Detalle de Proyecto" name="detalle-de-proyecto" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Contacto</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Contacto" name="contacto" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="inputAddress2" placeholder="Fecha" name="fecha" required />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input type="hidden" name="agregar-cliente" value="true" />
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Agregar cliente
                  </button>
                </div>
              </div>
            </div>
          </form>