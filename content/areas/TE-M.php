<?php include ('../modals.php'); ?>

<!-- Modal al enviar los datos -->
<div class="modal fade" id="submitModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enviar datos?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Si esta seguro que todos los 
        datos ingresados son correctos, presione <i>Enviar</i>.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary nav-link text-white" onclick="Envio('#submitModal')">Enviar</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal al enviar los datos -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LOS DATOS FUERON ENVIADOS</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
    </div>
  </div>
</div>