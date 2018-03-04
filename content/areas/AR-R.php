        <div class="row">
          <div class="col-10">
            <div class="card mt-3 ml-3">
              <div class="card-header text-center"><b>Nueva area</b></div>
              <div class="card-body">
                <form id="ARForm">
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-4 mt-1">
                        <label for="exampleInputName">Nombre del area</label>
                        <input class="form-control" id="ARName" name="ARName" type="text">
                      </div>
                      <div class="col-md-4 mt-1">
                        <label for="CVStratum">En que sedes existe?</label>
                        <div class="form-row"> 
                          <div class="col-md-4 mt-1"><label for="CVDocRC">
                              <input id="ARSE1" name="ARSE1" type="checkbox" 
                                     value="F">&ensp;Sede 1&emsp;</label></div>
                          <div class="col-md-4 mt-1"><label for="CVDocTI">
                              <input id="ARSE2" name="ARSE2" type="checkbox" 
                                     value="M">&ensp;Sede 2&emsp;</label></div>
                          <div class="col-md-4 mt-1"><label for="CVDocTI">
                              <input id="ARSE3" name="ARSE3" type="checkbox" 
                                     value="M">&ensp;Sede 3&emsp;</label></div>
                        </div>
                      </div>
                      <div class="col-md-4 mt-1">
                        <label for="CVStratum">En que fases existe?</label>
                        <div class="form-row"> 
                          <div class="col-md-4 mt-1"><label for="CVDocRC">
                              <input id="ARFA1" name="ARFA1" type="checkbox" 
                                     value="F">&ensp;Fase 1&emsp;</label></div>
                          <div class="col-md-4 mt-1"><label for="CVDocTI">
                              <input id="ARFA2" name="ARFA2" type="checkbox" 
                                     value="M">&ensp;Fase 2&emsp;</label></div>
                          <div class="col-md-4 mt-1"><label for="CVDocTI">
                              <input id="ARFA3" name="ARFA3" type="checkbox" 
                                     value="M">&ensp;Fase 3&emsp;</label></div>
                        </div>
                      </div>
                      <div class="col-md-4 mt-3">
                        <a style="align-self: center" class="btn btn-primary btn-block" href="#" onclick="callModalA('#testModal')">Test</a>  
                      </div>
                    </div>                    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>