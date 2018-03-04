<!-- Contenido de la pagina -->
<script>

  var abc = Number(localStorage.SEUid);
  var test;
  alert(abc);
  //Con esto se borra el id que viene de la otra pagina
//  localStorage.removeItem("SEUid");
//  alert(localStorage.SEUid);
  var obj = {"id": abc};
  var formData = JSON.stringify(obj);
  alert(formData);
  $.ajax({
    type: "POST",
    data: formData,
    dataType: 'json',
    url: 'content/sedes/SE-UL.php',
    success: function (json) {
      test = json;
      alert("\nNombre: " + test[0].name +
              "\nCiudad: " + test[0].city +
              "\nDir: " + test[0].dir +
              "\nJefe: " + test[0].jefe +
              "\nNum: " + test[0].num);
    }
  });

//  if (test1 == 1) {
//    alert('Test 1')
//  }
//  if (test !== null) {
//    $("#SECity").val(data[0].city);
//    document.getElementById(SEName).value = data[0].name;
//    document.getElementById(SEAddress).value = data[0].dir;
//    document.getElementById(SEBoss).value = data[0].jefe;
//    document.getElementById(SEBossNum).value = data[0].num;
//  }
</script>
<div class="row">
  <div id="anchoForm" class="col-6">
    <div class="card mt-3 ml-3">
      <div class="card-header text-center"><b>Registro de nueva sede</b></div>
      <div class="card-body">
        <form id="SEForm">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Nombre de la sede</label>
                <input class="form-control" id="SEName" name="SEName" type="text" placeholder="E.g. Calambeo">
              </div>
              <div class="col-md-6">
                <label for="exampleInputName">Direccion de la sede</label>
                <input class="form-control" id="SEAddress" name="SEAddress" type="text" placeholder="E.g. Avenida 19 #13-2">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Ciudad de la sede</label>
                <select class="form-control" id="SECity" name="SECity" onchange="toogle('SECity', 'FCSTHidden')">
                  <option value="" selected disabled hidden>Seleccione</option>
                  <?php
                  //PHP Request to get the dropdown options for this list. Hidden content.
                  ?>
                  <!--Para este Select List, voy a hacer dos cosas:
                  1. Voy a hacer que al escoger la opcion "Agregar Nueva Ciudad", 
                  aparezca una ventana modal con un formulario para agregar ciudades
                  2. Voy a intentar poblar la lista con una llamada AJAX y JSON, 
                  para mas seguridad a la hora de recibir los datos de la BD.-->
                  <option value="0">Cosita 1</option>
                  <option value="1">Agregar Nueva Ciudad</option> 
                </select>
              </div>
              <div class="FCSTHidden col-md-6">
                <label for="exampleInputName">Nombre de la ciudad</label>
                <input class="form-control" id="SECityName" name="SECityName" type="text" placeholder="E.g. Bogota">
              </div>
            </div>
          </div>
          <div class="FCSTHidden form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Responsable de la sede</label>
                <input class="form-control" id="SEBoss" name="SEBoss" type="text" placeholder="E.g. Pepito Perez">
              </div>
              <div class="col-md-6">
                <label for="exampleInputName">Numero de contacto</label>
                <input class="form-control" id="SEBossNum" name="SEBossNum" type="text" placeholder="E.g. 3192760584">
              </div>                
            </div>
          </div>
<!--          <input class="btn btn-primary btn-block" type="submit" value="Enviar">-->

          <a class="btn btn-primary btn-block" data-toggle="modal" 
             data-target="#submitModal" href="#">Registrar Sede</a>

          <script type='text/javascript'>
            function Envio(caller) {
              /* stop form from submitting normally */
              event.preventDefault();
              /* get the action attribute from the <form action=""> element */
//              var $form = $(this), url = $form.attr('action');
              var formData = JSON.stringify($("#SEForm").serializeObject());
              alert(formData);
              /* Send the data using post with element id name and name2*/
              var posting =
                      $.ajax({
                        type: "POST",
                        url: "content/sedes/SE-RL.php",
                        data: formData,
                        success: function () {},
                        dataType: "json",
                        contentType: "application/json"
                      });
//                      $.post("SE-Insert.php",
//                              {ciudadList: $('#SECity').val(),
//                                sedeName: $('#SEName').val(), sedeAddress: $('#SEAddress').val(),
//                                sedeBoss: $('#SEBoss').val(), sedeNum: $('#SEBossNum').val()});
              /* Alerts the results */
              posting.done(function (data) {});

              $(caller).modal('hide');
              $("#successModal").modal();
            }
            /* attach a submit handler to the form */
            $("#SEForm").submit(Envio);
          </script>


        </form>
      </div>
    </div>
  </div>
</div>