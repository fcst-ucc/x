<!-- Contenido de la pagina -->
<script>window.load=menusito('#TEAR', '#TEOPP');</script>
<div class="row">
  <div id="SEForm" class="col-10">
    <div class="card mt-3 ml-3">
      <div class="card-header text-center"><b>Registro de nuevo test Pt.2</b></div>
      <div class="card-body">
        <form id="TEForm">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-3">
                <label for="exampleInputName">Area</label>
                <select class="form-control" id="TEAR" name="ciudadList">
                  <option value="" selected disabled hidden>Seleccione</option>
                  <option value="1">Juego & Deporte</option> 
                  <option value="2">Tecnologia Social</option>
                  <option value="3">Desarrollo Cognitivo</option> 
                </select>
              </div>
              <div class="col-md-7">
                <label for="exampleInputName">Test</label>
                <select class="form-control" id="TEOPP" name="ciudadList">
                  <option value="" selected disabled hidden>Seleccione</option>
                  <option value="1">No hay nada</option> 
                </select>
              </div>
              <div class="col-md-2">
                <label for="exampleInputName" style="visibility:hidden">Texto del boton</label>
                <a id="btn" class="btn btn-primary btn-block" href="#">Registrar Sede</a>
              </div>               
            </div>
          </div>

          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i> Tabla de notas</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>