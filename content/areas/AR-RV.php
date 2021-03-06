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
              <div class="col-md-6">
                <label for="exampleInputName">Sede</label>
                <select class="form-control" id="ARSede" name="ARSede">
                  <option value="" selected disabled hidden>Seleccione</option>
                  <?php
                  //PHP Request to get the dropdown options for this list. Hidden content.
                  ?>
                  <!--Para este Select List, voy a hacer dos cosas:
                  1. Voy a hacer que al escoger la opcion "Agregar Nueva Ciudad", 
                  aparezca una ventana modal con un formulario para agregar ciudades
                  2. Voy a intentar poblar la lista con una llamada AJAX y JSON, 
                  para mas seguridad a la hora de recibir los datos de la BD.-->
                  <option value="28">Ibague Sede Boqueron</option>
                  <option value="32">Ibague Sede Salado</option> 
                </select>
              </div>
              <div class="col-md-4 mt-3">
                <!-- <a style="align-self: center" class="btn btn-primary btn-block" href="#" 
                      onclick="callModalA('#testModal')">AGREGAR</a>  -->
                <!--  <input class="btn btn-primary btn-block" type="submit" value="Enviar">-->
                <a class="btn btn-primary btn-block" data-toggle="modal" 
             data-target="#submitModal" href="#">Registrar Area</a>

                <script type='text/javascript'>
            function Envio(caller) {
                //Recibe todas las variables del formulario
                var formData = JSON.stringify($("#ARForm").serializeObject());
                console.log(formData);
//              alert(formData);
                //Envia los datos por POST, con Ajax y JSON
              $.ajax({
                type: "POST",
                url: "content/areas/AR-RL.php",
                data: formData,
                dataType: "json",
                contentType: "application/json",
                success: function() {
                },
              });

              $(caller).modal('hide');
              $("#successModal").modal();
            }
          </script>

              </div>
            </div>                    
          </div>
        </form>
      </div>
    </div>
  </div>
</div>