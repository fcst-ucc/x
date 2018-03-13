        <!-- Contenido de la pagina -->
        <div class="row">
          <div class="col-10">
            <div class="card mt-3 ml-3">
              <div class="card-header text-center"><b>Registro de nuevo indicador</b></div>
              <div class="card-body">
                <form id="INDForm">
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-5">
                        <label for="exampleInputName">Fase</label>
                        <select class="form-control" id="INDFA" name="INDFA">
                          <option value="" selected disabled hidden>Seleccione</option>
                          <option value="1">Fase 1 (Nivelacion)</option> 
                          <option value="2">Fase 2 </option>
                          <option value="2">Fase X</option>
                        </select>
                      </div>
                      <div class="col-md-5">
                        <label for="exampleInputName">Area</label>
                        <select class="form-control" id="INDAR" name="INDAR">
                          <option value="" selected disabled hidden>Seleccione</option>
                          <option value="1">Juego & Deporte</option> 
                          <option value="2">Tecnologia Social</option>
                          <option value="3">Desarrollo Cognitivo</option> 
                        </select>
                      </div>
                      <div class="col-md-2">
                        <label for="exampleInputName" style="visibility:hidden">Texto del boton</label>
                        <a id="btn" class="btn btn-primary btn-block" href="#">Registrar</a>
                      </div>
                      <div class="col-md-6">
                        <label for="CFID">Descripcion Indicador #1</label>
                        <input class="form-control" id="INDDesc1" name="INDDesc1" type="text">
                      </div>  
                      <div class="col-md-5">
                        <label for="CFID">Porcentaje Indicador #1</label>
                        <div class="input-group">
                          <input class="form-control" id="INDPerc1" name="INDPerc1" type="text">
                          <span class="input-group-addon" id="basic-addon2">%</span>
                        </div>
                      </div>
                      <div class="col-md-1">
                        <label for="exampleInputName" style="visibility:hidden">Buttontext</label>
                        <div class="btn-group" role="group">
                          <a href="#" class="btn btn-success">+</a>
                          <a href="#" class="btn btn-danger">-</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="CFID">Descripcion Indicador #2</label>
                        <input class="form-control" id="INDDesc2" name="INDDesc2" type="text">
                      </div>  
                      <div class="col-md-5">
                        <label for="CFID">Porcentaje Indicador #2</label>
                        <div class="input-group">
                          <input class="form-control" id="INDPerc2" name="INDPerc2" type="text">
                          <span class="input-group-addon" id="basic-addon2">%</span>
                        </div>
                      </div>
                      <div class="col-md-1">
                        <label for="exampleInputName" style="visibility:hidden">Buttontext</label>
                        <div class="btn-group" role="group">
                          <a href="#" class="btn btn-success">+</a>
                          <a href="#" class="btn btn-danger">-</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>