        <div class="row">
          <div class="col-10">
            <div class="card mt-3 ml-3">
              <div class="card-header text-center"><b>Registro de nueva fase</b></div>
              <div class="card-body">
                <form id="FAForm">
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-4">
                        <label for="exampleInputName">Nombre de la fase</label>
                        <input class="form-control" id="FAName" name="FAName" type="text">
                      </div>
                      <div class="col-md-4">
                        <label for="exampleInputName">Sigla de la fase</label>
                        <input class="form-control" id="FAAcron" name="FAAcron" type="text">
                      </div>
                      <div class="col-md-4">
                        <label for="exampleInputName">Porcentaje del progreso de la fase</label>
                        <div class="input-group">
                          <input class="form-control" id="FAPerc" name="FAPerc" type="text">
                          <span class="input-group-addon" id="basic-addon2">%</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <input class="btn btn-primary btn-block" type="submit" value="Enviar">
                </form>
              </div>
            </div>
          </div>
        </div>