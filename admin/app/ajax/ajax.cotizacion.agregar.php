
<form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Cotizacion
              </div>
              <div class="card-body text-primary">
                <div class="row">
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Cliente</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="Id Cliente" name="id-cliente" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Cotizacion</label>
                    <input placeholder="Cotizacion" type="text" class="form-control" id="inputPassword4" name="cotizacion" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Nombre de Empresa</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Nombre de Empresa" name="nombre-empresa" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Items</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Items" name="items" required />
                  </div>
                   <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Descripciones	</label>
                    <input type="text" size="11" class="form-control" id="inputAddress2" placeholder="Descripciones	" name="descripciones" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Total Pago</label>
                    <input type="text" size="11" class="form-control" id="inputAddress2" placeholder="Total Pago" name="total-pago" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Propuesta</label>
                    <input type="text" size="11" class="form-control" id="inputAddress2" placeholder="Propuesta" name="propuesta" required />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input type="hidden" name="agregar-cotizacion" value="true" />
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Agregar Cotizacion
                  </button>
                </div>
              </div>
            </div>
          </form>