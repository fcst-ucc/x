        <!-- Contenido de la pagina -->
        <div class="row">
          <div id="SEForm" class="col-10">
            <div class="card mt-3 ml-3">
              <div class="card-header text-center"><b>Registro de nuevo test Pt.1</b></div>
              <div class="card-body">
                <form id="TEForm">
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-4">
                        <label for="exampleInputName">Nombre del test</label>
                        <input class="form-control" id="sedeName" name="sedeName" type="text">
                      </div>
                      <div class="col-md-4">
                        <label for="exampleInputName">Descripcion del test</label>
                        <input class="form-control" id="sedeAddress" name="sedeAddress" type="text">
                      </div>
                      <div class="col-md-4">
                        <label for="exampleInputName">Objetivo del test</label>
                        <input class="form-control" id="sedeAddress" name="sedeAddress" type="text">
                      </div>
                      <div class="col-md-4">
                        <label for="exampleInputName">Grupo Evaluado: Edad</label>
                        <select class="form-control" id="ciudadList" name="ciudadList">
                          <option value="" selected disabled hidden>Seleccione</option>
                          <option value="1">Menores</option> 
                          <option value="2">Mayores</option> 
                        </select>
                      </div>
                      <div class="col-md-4">
                        <label for="exampleInputName">Grupo Evaluado: Asistencia</label>
                        <select class="form-control" id="ciudadList" name="ciudadList">
                          <option value="" selected disabled hidden>Seleccione</option>
                          <option value="1">Lunes & Miercoles</option> 
                          <option value="2">Martes & Jueves</option>
                          <option value="3">Viernes</option> 
                        </select>
                      </div>
                      <div class="col-md-4">
                        <label for="exampleInputName">Intentos maximos</label>
                        <input class="form-control" id="CVACCity" name="CVAdress" type="number" 
                               min="1" max="9" step="1" placeholder="Minimo 1, maximo 9">
                      </div>
                      <div class="col-md-12 mt-3 text-center"><h5>Rubrica</h5></div>
                      <script>


                      </script>
                      <div class="col-md-4">
                        <label for="exampleInputName">Unidades a evaluar</label>
                        <input class="form-control" id="TEUnits" name="sedeName" type="text" onblur="changeUnits('TEU')">
                      </div>
                      <div class="col-md-4">
                        <label for="exampleInputName">Abreviatura de las unidades</label>
                        <input class="form-control" id="sedeAddress" name="sedeAddress" type="text">
                      </div>
                      <div class="col-md-4">
                        <label for="exampleInputName">Comportamiento</label>
                        <select class="form-control" id="TEBehaviour" name="ciudadList">
                          <option value="1" selected>Creciente</option> 
                          <option value="2">Decreciente</option> 
                        </select>
                      </div> 
                      <div class="col-md-3">
                        <label id="TEU1T" for="TEU1">Unidades: Incipiente</label>
                        <input class="form-control" id="TEU1" name="sedeAddress" type="text">
                      </div>
                      <div class="col-md-3">
                        <label id="TEU2T" for="TEU2">Unidades: Bajo</label>
                        <input class="form-control" id="TEU2" name="sedeAddress" type="text">
                      </div>
                      <div class="col-md-3">
                        <label id="TEU3T" for="TEU3">Unidades: Medio</label>
                        <input class="form-control" id="TEU3" name="sedeAddress" type="text">
                      </div>
                      <div class="col-md-3">
                        <label id="TEU4T" for="TEU4">Unidades: Alto</label>
                        <input class="form-control" id="TEU4" name="sedeAddress" type="text">
                      </div>
                    </div>
                  </div>
                  <a class="btn btn-primary btn-block" data-toggle="modal" 
                     data-target="#submitModal" href="#">Registrar Sede</a>
                </form>
              </div>
            </div>
          </div>
        </div>