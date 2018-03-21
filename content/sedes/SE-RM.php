<?php include ('../modals.php'); ?>

<!-- Modal al enviar los datos -->
<div class="modal fade" id="submitModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Enviar datos?</h5>
        <button class="close" type="button" data-dismiss="modal">
          <span>×</span>
        </button>
      </div>
      <div class="modal-body">Si esta seguro que todos los 
        datos ingresados son correctos, presione <i>Enviar</i>.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary nav-link text-white" 
           onclick="CFunction(1, '#submitModal')">Enviar</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal al enviar los datos -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center">Los datos fueron enviados satisfactoriamente</h5>
        <button class="close" type="button" data-dismiss="modal">
          <span>×</span>
        </button>
      </div>
    </div>
  </div>
</div>

<!--Modal de la puta lista-->
<div class="modal fade" id="listaModal" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Lista</h5>
        <button class="close" type="button" data-dismiss="modal">
          <span>×</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <!--El contenedor de todas las listas de ubicaciones--> 
            <div class="form-row" id="listas"></div>
          </div>
      </div>
      <div class="modal-footer">
        <!--<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>-->
        <!--<a class="btn btn-primary nav-link text-white" onclick="Envio('#submitModal')">Enviar</a>-->
      </div>
    </div>
  </div>
</div>