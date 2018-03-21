<!-- Contenido de la pagina -->

<!-- JavaScript de la pagina -->
<script src="content/sedes/SE-J.js" ></script>
<script>window.onload = UFunction(1);</script>

<div class="row">
  <div id="anchoForm" class="col-10">
    <div class="card mt-3 ml-3">
      <div class="card-header text-center"><b>Registro de nueva sede</b></div>
      <div class="card-body">
        <form id="SEForm">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="SEName">Nombre de la sede</label>
                <input class="form-control" id="SEName" name="SEName" type="text">
              </div>
              <div class="col-md-6">
                <label for="SEAddress">Direccion de la sede</label>
                <input class="form-control" id="SEAddress" name="SEAddress" type="text">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="SEGroup">Localizacion de la sede</label>
                <div class="input-group" id="SEGroup">
                  <input type="text" name="SELocation" class="form-control" 
                         placeholder="Clic para buscar una localizacion" disabled>
                  <div class="input-group-append">
                    <button id="SELocation" class="btn btn-outline-secondary" type="button">
                      <i class="fa fa-fw fa-plus"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="SEBoss">Responsable de la sede</label>
                <input class="form-control" id="SEBoss" name="SEBoss" type="text">
              </div>
              <div class="col-md-6">
                <label for="SEBossNum">Numero de contacto</label>
                <input class="form-control" id="SEBossNum" name="SEBossNum" type="text" >
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