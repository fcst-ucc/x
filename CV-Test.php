
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
                  <label>Sexo/Genero (esto es un combobox)</label>
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
                <div class="col-md-6">
                  <label for="CVID">Numero de Identificacion</label>
                  <input class="form-control" id="CVDoc" name="CVDoc" type="text">
                </div>
                <div class="col-md-6">
                  <label>Tipo de Documento (esto es un combobox)</label>
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
                  <label for="CVACCity">Ciudad de residencia (combobox)</label>
                  <input class="form-control" id="CVACCity" name="CVAdress" type="text">  
                </div>
                <div class="col-md-4">
                  <label for="CVCDepartment">Departamento (el mismo combobox anterior)</label>
                  <input class="form-control" id="CVCDepartment" name="CVComuna" type="text">  
                </div> 
                <div class="col-md-4">
                  <label for="CVStratum">Estrato</label>
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
                        <input id="CVEPSoS1" name="CVEPSoS" type="radio" value="1" 
                               onchange="toogle('CVEPSoS1', 'CVHidden H1')">&emsp;Si</label></div>
                    <div class="col-md-4 mt-2"><label for="CVEPSoS2">
                        <input id="CVEPSoS2" name="CVEPSoS" type="radio" value="0"
                               onchange="toogle('CVEPSoS2', 'CVHidden H1')">&emsp;No</label></div>
                  </div>
                </div>
                <div id="CVEPSoSOP" class="CVHidden H1 col-md-8">
                  <label for="CVID">Nombre de la EPS/Sisben</label>
                  <input class="form-control" id="CVEPSoSName" name="CVEPSoSName" type="text">
                </div>

              </div> <!-- Fin del form group -->

              <div class="form-row">
                <div class="col-md-4">
                  <label>Estudia actualmente?</label>
                  <div class="form-row">  
                    <div class="col-md-1 mt-2"></div>
                    <div class="col-md-5 mt-2"><label for="CVS1">
                        <input id="CVS1" name="CVS" type="radio" value="1" 
                               onchange="toogle('CVS1', 'CVHidden H2')">&emsp;Si</label></div>
                    <div class="col-md-4 mt-2"><label for="CVS2">
                        <input id="CVS2" name="CVS" type="radio" value="0"
                               onchange="toogle('CVS2', 'CVHidden H2')">&emsp;No</label></div>
                  </div>
                </div>
                <div  class="CVHidden H2 col-md-8">
                  <label for="CVSName">Nombre del Colegio</label>
                  <input class="form-control" id="CVSName" name="CVSName" type="text">
                </div>
              </div>

              <div class="CVHidden H2 form-group ml-1 mr-1">
                <div class="form-row">
                  <div id="CVSO2" class="col-md-4">
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
                  <div class="CVHidden H2 col-md-8">
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