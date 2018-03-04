<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Title</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <script>
      //Carga el menu desde un archivo externo (esto con el fin de agilizar la edicion del mismo.
      //hace falta revisar que tan eficiente es, en terminos de rendimiento, y si tiene algun
      //tipo de fallo o problema derivado.
      $(document).ready(function () {
        $("#mainNav").load("menu.php");
      });
    </script>

    <!-- CSS de las pestañas y las barras personalizadas -->
    <link href="css/fcst-tabs.css" rel="stylesheet">
    <!-- Javascript de todo... -->
    <script>
      //La funcion para crear las pestañas, minimamente editada de su fuente original.
      function openTab(evt, tabName) {
        // Declara todas las variables necesarias.
        var i, tabcontent, tablinks;
        // Esconde todo el contenido de las pestañas (ya esta escondido en el CSS, 
        // pero es un paso necesario para la logica del script).
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }

        // Esto hace que todas las pestañas esten "cerradas" inicialmente, para la logica del script y del CSS.
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Esto muestra la pestaña a la que se le dio clic, y cambia el CSS de su cabecera.
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
      }

      // Abre por defecto alguna de las pestañas
      function OpenTabByDefault() {
        document.getElementById("defaultTab").click();
      }

      //Por alguna razon del demonio, no funciona tal como el codigo original, asi que me toco
      //hacerlo de esta manera: llama la funcion al cargar la pagina...
      window.onload = OpenTabByDefault;

      //Igual que en la pagina Sede, verifica apenas cargar la pagina.
      window.onload = verificarEstudia;
      window.onload = verificarEPSoS;

      //Funcion para mostrar u ocultar los campos opcionales que dependen
      //de si el niño esta o no en el colegio
      function verificarEstudia()
      {
        var School1 = document.getElementById("CVSO1");
        var School2 = document.getElementById("CVSO2");
        var SchoolYes = (document.getElementById("CVS1"));
        if (SchoolYes.checked) {
          School1.style.display = "block";
          School2.style.display = "block";
        } else {
          School1.style.display = "none";
          School2.style.display = "none";
        }
      }
      //Funcion para mostrar u ocultar el campo opcional de la EPS/Sisben
      function verificarEPSoS()
      {
        var EPSoS = document.getElementById("CVEPSoSOP");
        var EPSoSYes = (document.getElementById("CVEPSoS1"));
        if (EPSoSYes.checked) {
          EPSoS.style.visibility = "visible";
        } else {
          EPSoS.style.visibility = "hidden";
        }
      }
      //Esto calcula la edad, usando el metodo mas aproximado posible:
      //el numero de segundos que tiene un año juliano.
      function calcularEdad(birth, age) {
        var getBirth = document.getElementById(birth);
        var showAge = document.getElementById(age);
        var Edad = +new Date(getBirth.value);
        showAge.value = Math.floor((Date.now() - Edad) / (1000 * 31557600));
      }
    </script>
  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    </nav>

    <div class="content-wrapper">
      <div class="container-fluid">
        <!-- Contenido de la pagina -->
        <div class="row">
          <div class="col-10">
            <div class="card mt-3 mb-3 ml-3">
              <div class="card-header text-center"><b>Registro de nuevo capital vital</b></div>
              <div class="card-body">
                <form id="CVForm">
                  <!-- Tabs -->
                  <div class="tab"><b>
                      <a class="tablinks" onclick="openTab(event, 'Tab1')" id="defaultTab">Datos Basicos</a>
                      <a class="tablinks" onclick="openTab(event, 'Tab2')">Datos Madre</a>
                      <a class="tablinks" onclick="openTab(event, 'Tab3')">Datos Padre</a>
                      <a class="tablinks" onclick="openTab(event, 'Tab4')">Datos Acompañante</a>
                    </b></div>

                  <!-- Tab 1 content -->
                  <div id="Tab1" class="tabcontent">
                    <div class="form-group mt-3 ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-6 mt-1">
                          <label for="CVName">Nombre completo del niño/niña</label>
                          <input class="form-control" id="CVName" name="CVName" type="text">
                        </div>
                        <div class="col-md-6 mt-1">
                          <label>Sexo/Genero</label>
                          <div class="form-row">  
                            <div class="col-md-1 mt-1"></div>
                            <div class="col-md-5 mt-1"><label for="CVSexF">
                                <input id="CVSexF" name="CVSex" type="radio" 
                                       value="F">&emsp;Femenino</label></div>
                            <div class="col-md-5 mt-1"><label for="CVSexM">
                                <input id="CVSexM" name="CVSex" type="radio" 
                                       value="M">&emsp;Masculino</label></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="CVID">Numero de Identificacion</label>
                        <input class="form-control" id="CVDoc" name="CVDoc" type="text">
                      </div>
                      <div class="col-md-6">
                        <label>Tipo de Documento</label>
                        <div class="form-row"> 
                          <div class="col-md-1 mt-2"></div>
                          <div class="col-md-5 mt-2"><label for="CVDocRC">
                              <input id="CVDocRC" name="CVDoc" type="radio" 
                                     value="F">&emsp;Registro Civil</label></div>
                          <div class="col-md-6 mt-2"><label for="CVDocTI">
                              <input id="CVDocTI" name="CVDoc" type="radio" 
                                     value="M">&emsp;Tarjeta de identidad</label></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="CVID">Numero de Identificacion</label>
                        <input class="form-control" id="CVDoc" name="CVDoc" type="text">
                      </div>
                      <div class="col-md-6">
                        <label>Tipo de Documento</label>
                        <div class="form-row"> 
                          <div class="col-md-1 mt-2"></div>
                          <div class="col-md-5 mt-2"><label for="CVDocRC">
                              <input id="CVDocRC" name="CVDoc" type="radio" 
                                     value="F">&emsp;Registro Civil</label></div>
                          <div class="col-md-6 mt-2"><label for="CVDocTI">
                              <input id="CVDocTI" name="CVDoc" type="radio" 
                                     value="M">&emsp;Tarjeta de identidad</label></div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for="CVBirthCity">Ciudad de Nacimiento</label>
                        <input class="form-control" id="CVBirthCity" name="CVBirthCity" type="text">
                      </div>
                      <div class="col-md-4">
                        <label for="CVBirth">Fecha de Nacimiento</label>
                        <input class="form-control" id="CVBirth" name="CVBirth" type="date" 
                               onchange="calcularEdad('CVBirth', 'CVAge')">
                      </div>
                      <div class="col-md-4">
                        <label for="CVAge">Edad</label>
                        <input class="form-control" id="CVAge" name="CVAge" type="text" disabled>
                      </div>
                      <div class="col-md-8">
                        <label for="CVAdress">Direccion de residencia</label>
                        <input class="form-control" id="CVACdress" name="CVAdress" type="text">  
                      </div>
                      <div class="col-md-4">
                        <label for="CVComuna">Comuna de la residencia</label>
                        <input class="form-control" id="CVCComuna" name="CVComuna" type="text">  
                      </div> 
                      <div class="col-md-4">
                        <label for="CVACCity">Ciudad de residencia</label>
                        <input class="form-control" id="CVACCity" name="CVAdress" type="text">  
                      </div>
                      <div class="col-md-4">
                        <label for="CVCDepartment">Departamento de residencia</label>
                        <input class="form-control" id="CVCDepartment" name="CVComuna" type="text">  
                      </div> 
                      <div class="col-md-4">
                        <label for="CVStratum">Departamento de residencia</label>
                        <select class="form-control" id="CVStratum" name="CVStratum">  
                          <option value="" selected disabled hidden>Seleccione</option>
                          <option value="1">(1) Uno</option>
                          <option value="2">(2) Dos</option>
                          <option value="3">(3) Tres</option>
                          <option value="4">(4) Cuatro</option>
                          <option value="5">(5) Cinco</option>
                          <option value="6">(6) Seis</option>
                        </select>
                      </div> 
                      <div class="col-md-4">
                        <label>Esta afiliado a EPS/Sisben?</label>
                        <div class="form-row">  
                          <div class="col-md-1 mt-2"></div>
                          <div class="col-md-5 mt-2"><label for="CVEPSoS1">
                              <input id="CVEPSoS1" name="CVEPSoS" type="radio" value="T" 
                                     onchange="verificarEPSoS()">&emsp;Si</label></div>
                          <div class="col-md-4 mt-2"><label for="CVEPSoS2">
                              <input id="CVEPSoS2" name="CVEPSoS" type="radio" value="F"
                                     onchange="verificarEPSoS()">&emsp;No</label></div>
                        </div>
                      </div>
                      <div style="visibility:hidden" id="CVEPSoSOP" class="col-md-8">
                        <label for="CVID">Nombre de la EPS/Sisben</label>
                        <input class="form-control" id="CVEPSoSName" name="CVEPSoSName" type="text">
                      </div>
                      <div class="col-md-4">
                        <label>Estudia actualmente?</label>
                        <div class="form-row">  
                          <div class="col-md-1 mt-2"></div>
                          <div class="col-md-5 mt-2"><label for="CVS1">
                              <input id="CVS1" name="CVS" type="radio" value="T" 
                                     onchange="verificarEstudia()">&emsp;Si</label></div>
                          <div class="col-md-4 mt-2"><label for="CVS2">
                              <input id="CVS2" name="CVS" type="radio" value="F"
                                     onchange="verificarEstudia()">&emsp;No</label></div>
                        </div>
                      </div>
                      <div  name="CVHidden" class="col-md-8">
                        <label for="CVSName">Nombre del Colegio</label>
                        <input class="form-control" id="CVSName" name="CVSName" type="text">
                      </div>

                    </div> <!-- Fin del form group -->

                    <div name="CVHidden2" class="form-group ml-1 mr-1">
                      <div class="form-row">
                        <div id="CVSO2" style="display:none" class="col-md-4">
                          <label>Jornada</label>
                          <div class="form-row">
                            <div class="col-md-1 mt-2"></div>
                            <div class="col-md-5 mt-2"><label for="CVSJ1">
                                <input id="CVSJ1" name="CVSJ" type="radio" 
                                       value="T">&emsp;Mañana</label></div>
                            <div class="col-md-4 mt-2"><label for="CVSJ2">
                                <input id="CVSJ2" name="CVSJ" type="radio" 
                                       value="F">&emsp;Tarde</label></div>
                          </div>
                        </div>
                        <div name="CVHidden2" class="col-md-8">
                          <label for="CVSName">Grado que cursa actualmente?</label>
                          <input class="form-control" id="CVSG" name="CVSName" type="text">
                        </div>
                      </div>
                    </div>

                  </div> <!-- End of Tab 1 content --> 

                  <!-- Tab 2 content -->
                  <div id="Tab2" class="tabcontent">
                    <div class="form-group mt-3 ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-8">
                          <label for="CVMName">Nombre completo de la madre</label>
                          <input class="form-control" id="CVMName" name="CVMName" type="text">
                        </div>
                        <div class="col-md-4">
                          <label>Vive actualmente con el niño?</label>
                          <div class="form-row">  
                            <div class="col-md-1 mt-2"></div>
                            <div class="col-md-2 mt-2"><label for="CVSexF">
                                <input id="CVMCT" name="CVMC" type="radio" 
                                       value="T">&emsp;Si</label></div>
                            <div class="col-md-2 mt-2"><label for="CVSexM">
                                <input id="CVMCF" name="CVMC" type="radio" 
                                       value="F">&emsp;No</label></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-4">
                          <label for="CVMBirthCity">Ciudad de Nacimiento</label>
                          <input class="form-control" id="CVMBirthCity" name="CVMBirthCity" type="text">
                        </div>
                        <div class="col-md-4">
                          <label for="CVMBirth">Fecha de Nacimiento</label>
                          <input class="form-control" id="CVMBirth" name="CVMBirth" type="date" 
                                 onchange="calcularEdad('CVMBirth', 'CVMAge')">
                        </div>
                        <div class="col-md-4">
                          <label for="CVMAge">Edad</label>
                          <input class="form-control" id="CVMAge" name="CVMAge" type="text" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="form-group mt-3 ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-4">
                          <label>Trabaja actualmente?</label>
                          <div class="form-row">  
                            <div class="col-md-1 mt-2"></div>
                            <div class="col-md-3 mt-2"><label for="CVMJobT">
                                <input id="CVMJobT" name="CVMJob" type="radio" 
                                       value="F">&emsp;Si</label></div>
                            <div class="col-md-3 mt-2"><label for="CVMJobF">
                                <input id="CVMJobF" name="CVMJob" type="radio" 
                                       value="M">&emsp;No</label></div>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <label for="CVMJob">Ocupacion o cargo actual</label>
                          <input class="form-control" id="CVMJob" name="CVMJob" type="text">
                        </div>
                      </div>
                    </div>
                  </div> <!-- End of Tab 2 content --> 

                  <!-- Tab 3 content -->
                  <div id="Tab3" class="tabcontent">
                    <div class="form-group mt-3 ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-8">
                          <label for="CVFName">Nombre completo del padre</label>
                          <input class="form-control" id="CVFName" name="CVFName" type="text">
                        </div>
                        <div class="col-md-4">
                          <label>Vive actualmente con el niño?</label>
                          <div class="form-row">  
                            <div class="col-md-1 mt-2"></div>
                            <div class="col-md-2 mt-2"><label for="CVSexF">
                                <input id="CVFCT" name="CVFC" type="radio" 
                                       value="T">&emsp;Si</label></div>
                            <div class="col-md-2 mt-2"><label for="CVSexM">
                                <input id="CVFCF" name="CVFC" type="radio" 
                                       value="F">&emsp;No</label></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-4">
                          <label for="CVFBirthCity">Ciudad de Nacimiento</label>
                          <input class="form-control" id="CVFBirthCity" name="CVFBirthCity" type="text">
                        </div>
                        <div class="col-md-4">
                          <label for="CVFBirth">Fecha de Nacimiento</label>
                          <input class="form-control" id="CVFBirth" name="CVFBirth" type="date" 
                                 onchange="calcularEdad('CVFBirth', 'CVFAge')">
                        </div>
                        <div class="col-md-4">
                          <label for="CVFAge">Edad</label>
                          <input class="form-control" id="CVFAge" name="CVFAge" type="text" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="form-group mt-3 ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-4">
                          <label>Trabaja actualmente?</label>
                          <div class="form-row">  
                            <div class="col-md-1 mt-2"></div>
                            <div class="col-md-3 mt-2"><label for="CVFJobT">
                                <input id="CVFJobT" name="CVFJob" type="radio" 
                                       value="F">&emsp;Si</label></div>
                            <div class="col-md-3 mt-2"><label for="CVFJobF">
                                <input id="CVFJobF" name="CVFJob" type="radio" 
                                       value="M">&emsp;No</label></div>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <label for="CVFJob">Ocupacion o cargo actual</label>
                          <input class="form-control" id="CVFJob" name="CVFJob" type="text">
                        </div>
                      </div>
                    </div>
                  </div> <!-- End of Tab 3 content --> 

                  <!-- Tab 4 content -->                          
                  <div id="Tab4" class="tabcontent">
                    <div class="form-group mt-3 ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-8">
                          <label for="CVFName">Nombre completo del acompañante</label>
                          <input class="form-control" id="CVFName" name="CVFName" type="text">
                        </div>
                        <div class="col-md-4">
                          <label>Vive actualmente con el niño?</label>
                          <div class="form-row">  
                            <div class="col-md-1 mt-2"></div>
                            <div class="col-md-2 mt-2"><label for="CVSexF">
                                <input id="CVFCT" name="CVFC" type="radio" 
                                       value="T">&emsp;Si</label></div>
                            <div class="col-md-2 mt-2"><label for="CVSexM">
                                <input id="CVFCF" name="CVFC" type="radio" 
                                       value="F">&emsp;No</label></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-6">
                          <label for="CVID">Numero de Identificacion</label>
                          <input class="form-control" id="CVID" name="CVID" type="text">
                        </div>
                        <div class="col-md-6">
                          <label>Tipo de Documento</label>
                          <div class="form-row"> 
                            <div class="col-md-1 mt-2"></div>
                            <div class="col-md-5 mt-2"><label for="CVDocRC">
                                <input id="CVDocRC" name="CVDoc" type="radio" 
                                       value="F">&emsp;Registro Civil</label></div>
                            <div class="col-md-6 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="radio" 
                                       value="M">&emsp;Tarjeta de identidad</label></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-4">
                          <label for="CVID">Telefono 1</label>
                          <input class="form-control" id="CVID" name="CVID" type="text">
                        </div>
                        <div class="col-md-4">
                          <label for="CVID">Telefono 2</label>
                          <input class="form-control" id="CVID" name="CVID" type="text">
                        </div>                                    
                        <div class="col-md-4">
                          <label for="CVID">Telefono 3</label>
                          <input class="form-control" id="CVID" name="CVID" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="form-group ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-12">
                          <label for="CVID">¿Por qué quiere postular a la niña o niño al proceso de selección?</label>
                          <textarea class="form-control" id="CVID" name="CVID"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-9">
                          <label for="CVStratum">Quién estaría a cargo de acompañar al niño en caso de ser aceptado?</label>
                          <div class="form-row"> 
                            <div class="col-md-auto mt-2">&emsp;<label for="CVDocRC">
                                <input id="CVDocRC" name="CVDoc" type="checkbox" 
                                       value="F">&ensp;Madre&emsp;</label></div>
                            <div class="col-md-auto mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Padre&emsp;</label></div>
                            <div class="col-md-auto mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Hermano&emsp;</label></div>
                            <div class="col-md-auto mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Abuela&emsp;</label></div>
                            <div class="col-md-auto mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Tia&emsp;</label></div>
                            <div class="col-md-auto mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Otro&emsp;</label></div>
                          </div>
                        </div> 
                        <div class="col-md-3">
                          <label for="CVACCity">Que otro?</label>
                          <input class="form-control" id="CVACCity" name="CVAdress" type="text">  
                        </div> 
                      </div>
                    </div>
                  </div> <!-- End of Tab 4 content --> 

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid-->
      <!-- /.content-wrapper-->
      <footer class="sticky-footer">
        <div class="container">
          <div class="text-center">
            <small>Copyright © Your Website 2017</small>
          </div>
        </div>
      </footer>
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>
