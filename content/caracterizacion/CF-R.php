        <div class="row">
          <div class="col-10">
            <div class="card mt-3 mb-3 ml-3">
              <div class="card-header text-center"><b>Nueva caracterizacion familiar</b></div>
              <div class="card-body">
                <form id="CFForm">
                  <!-- Tabs -->
                  <div class="tab scrollbar">
                    <a class="tablinks" onclick="openTab(event, 'Tab1')">Perfil Socio-Familiar</a>
                    <a class="tablinks" onclick="openTab(event, 'Tab2')" id="defaultTab">Institucion</a>
                    <a class="tablinks" onclick="openTab(event, 'Tab3')">Datos de los padres</a>
                    <a class="tablinks" onclick="openTab(event, 'Tab4')">Motivacion</a>
                    <a class="tablinks" onclick="openTab(event, 'Tab5')">Etapa del ciclo vital de la familia</a>
                    <a class="tablinks" onclick="openTab(event, 'Tab6')">Subsistemas que conviven</a>
                    <a class="tablinks" onclick="openTab(event, 'Tab7')">Roles</a>                                 
                    <a class="tablinks" onclick="openTab(event, 'Tab8')">Eventos vividos recientemente</a>
                    <a class="tablinks" onclick="openTab(event, 'Tab9')">Ingreso mensual aproximado</a>
                    <a class="tablinks" onclick="openTab(event, 'Tab10')">Condiciones de la vivienda</a>
                    <a class="tablinks" onclick="openTab(event, 'Tab11')">Dinamica relacional familiar</a>
                    <a class="tablinks" onclick="openTab(event, 'Tab12')">Estructura Familiar</a>
                  </div>

                  <!-- Tab 1 content -->
                  <div id="Tab1" class="tabcontent">

                    <div class="form-group mt-2 ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-3 mt-2">
                          <label for="CFID">Historia #</label>
                          <input class="form-control" id="CFID" name="CFHist" type="text">
                        </div>
                        <div class="col-md-3 mt-2">
                          <label for="CFDate">Fecha de Apertura</label>
                          <input class="form-control" id="CFDate" name="CFDate" type="date">
                        </div>
                        <div class="col-md-3 mt-2">
                          <label for="CFName">Nombre(s)</label>
                          <input class="form-control" id="CFName" name="CFName" type="text">
                        </div>  
                        <div class="col-md-3 mt-2">
                          <label for="CFSurname">Apellido(s)</label>
                          <input class="form-control" id="CFSurname" name="CFSurname" type="text">
                        </div>
                        <div class="col-md-3 mt-2">
                          <label for="CVBirth">Fecha de Nacimiento</label>
                          <input class="form-control" id="CFBirth" name="CFBirth" type="date" 
                                 onchange="calcularEdad()">
                        </div>
                        <div class="col-md-3 mt-2">
                          <label for="CVAge">Edad</label>
                          <input class="form-control" id="CFAge" name="CFAge" type="text" disabled>
                        </div>
                        <div class="col-md-3 mt-2">
                          <label for="CVStratum">Tipo de identificacion</label>
                          <select class="form-control" id="CFDocType" name="CFDocType"
                                  onchange="callModal('#ModalDocType', 'CFDocType', 'CFDocTypeTrigger')">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Tarjeta de Identidad</option>
                            <option value="2">Cedula de Ciudadania</option>
                            <option id="CFDocTypeTrigger" value="0">Agregar Nuevo</option>
                          </select>
                        </div>
                        <div class="col-md-3 mt-2">
                          <label for="CVID">Numero de identificacion</label>
                          <input class="form-control" id="CFDoc" name="CFDoc" type="text">
                        </div>
                        <div class="col-md-4 mt-2">
                          <label for="CFID">Genero</label>
                          <select class="form-control" id="CFGender" name="CFGender"
                                  onchange="callModal('#ModalGender', 'CFGender', 'CFGenderTrigger')"> 
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                            <option id="CFGenderTrigger" value="0">Agregar Nuevo</option>
                          </select>
                        </div>
                        <div class="col-md-4 mt-2">
                          <label for="CFDate">Grado Escolar</label>
                          <select class="form-control" id="CFSchoolYear" name="CFSchoolYear"
                                  onchange="callModal('#ModalSchoolYear', 'CFSchoolYear', 'CFSchoolYearTrigger')">   
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">1</option>
                            <option value="2">...</option>
                            <option value="3">11</option>
                            <option id="CFSchoolYearTrigger" value="0">Agregar Nuevo</option>
                          </select>
                        </div>
                        <div class="col-md-4 mt-2">
                          <label for="CFName">Grupo Poblacional</label>
                          <select class="form-control" id="CFEthnicity" name="CFEthnicity"
                                  onchange="callModal('#ModalEthnicity', 'CFEthnicity', 'CFEthnicityTrigger')">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">No aplica</option>
                            <option value="2">Afrocolombiano</option>
                            <option value="3">Indigena</option>
                            <option value="4">Rrom/Gitano</option>
                            <option id="CFEthnicityTrigger" value="0">Agregar Nuevo</option>                                          
                          </select>
                        </div>
                      </div>
                    </div>

                  </div> <!-- End of Tab 1 content --> 

                  <!-- Tab 2 content -->
                  <div id="Tab2" class="tabcontent">

                    <div class="form-group mt-3 ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-12 mt-2 text-center text-danger">
                          Nota: Averiguar con certeza cual es la funcion de esta primera linea de campos</div>
                        <div class="col-md-3 mt-2 ">
                          <label for="CFID">Regional</label>
                          <input class="form-control" id="CFRegional" name="CFRegional" type="text">
                        </div>
                        <div class="col-md-3 mt-2">
                          <label for="CFDate">C. Zonal</label>
                          <input class="form-control" id="CFZonal" name="CFZonal" type="text">
                        </div>
                        <div class="col-md-3 mt-2">
                          <label for="CFName">C. Local</label>
                          <input class="form-control" id="CFLocal" name="CFLocal" type="text">
                        </div>  
                        <div class="col-md-3 mt-2">
                          <label for="CFSurname">Unidad</label>
                          <input class="form-control" id="CFUnidad" name="CFUnidad" type="text">
                        </div>
                        <div class="col-md-12  mt-2 text-center text-danger">
                          WIP: Se esta buscando el codigo para agregar dinamicamente campos, 
                          por si hubo mas de un entrevistador.</div>
                        <div class="col-md-3 mt-2">
                          <label for="CFID">Entrevistador #1</label>
                          <input class="form-control" name="CFInterviewer" type="text">
                        </div>  
                        <div class="col-md-3 mt-2">
                          <label for="CFID">Entrevistador #2</label>
                          <input class="form-control" name="CFInterviewer" type="text">
                        </div>  
                        <div class="col-md-3 mt-2">
                          <label for="CFID">Entrevistador #3</label>
                          <input class="form-control" name="CFInterviewer" type="text">
                        </div>  
                        <div class="col-md-3 mt-2">
                          <label for="CFID">Entrevistador #4</label>
                          <input class="form-control" name="CFInterviewer" type="text">
                        </div>
                        <div class="col-md-12 mt-2 text-center text-danger">
                          WIP: Se esta buscando el codigo para agregar dinamicamente campos, por si se 
                          entrevisto mas de un familiar.</div>
                        <div class="col-md-4 mt-2">
                          <label for="CFID">Entrevistado #1</label>
                          <input class="form-control" id="CFID" name="CF" type="text">
                        </div>
                        <div class="col-md-2 mt-2">
                          <label for="CFID">Parentezco</label>
                          <select class="form-control" name="CFKinship"
                                  onchange="callModal('#ModalKinship', 'CFKinship', 'CFKinshipTrigger', 0)">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                            <option name="CFKinshipTrigger" value="0">Agregar Nuevo</option>
                          </select>
                        </div>
                        <div class="col-md-4 mt-2">
                          <label for="CFDate">Entrevistado #2</label>
                          <input class="form-control" id="CFDate" name="CFDate" type="text">
                        </div>
                        <div class="col-md-2 mt-2">
                          <label for="CFID">Parentezco</label>
                          <select class="form-control" name="CFKinship"
                                  onchange="callModal('#ModalKinship', 'CFKinship', 'CFKinshipTrigger', 1)">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                            <option name="CFKinshipTrigger" value="0">Agregar Nuevo</option>
                          </select>
                        </div>
                        <div class="col-md-4 mt-2">
                          <label for="CFID">Entrevistado #3</label>
                          <input class="form-control" id="CFID" name="CFID" type="text">
                        </div>
                        <div class="col-md-2 mt-2">
                          <label for="CFID">Parentezco</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                            <option value="3">Otro</option>
                          </select>
                        </div>
                        <div class="col-md-4 mt-2">
                          <label for="CFDate">Entrevistado #4</label>
                          <input class="form-control" id="CFDate" name="CFDate" type="text">
                        </div>
                        <div class="col-md-2 mt-2">
                          <label for="CFID">Parentezco</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                            <option value="3">Otro</option>
                          </select>
                        </div>
                      </div>
                    </div>

                  </div> <!-- End of Tab 2 content --> 

                  <!-- Tab 3 content -->
                  <div id="Tab3" class="tabcontent">

                    <div class="form-group mt-3 ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-12 text-center text-danger">
                          WIP: Se esta buscando el codigo para agregar 
                          dos o mas familiares dinamicamente (al menos dos)</div>
                        <div class="col-md-4">
                          <label for="CFName">Nombre(s)</label>
                          <input class="form-control" id="CFName" name="CFName" type="text">
                        </div>  
                        <div class="col-md-4">
                          <label for="CFSurname">Apellido(s)</label>
                          <input class="form-control" id="CFSurname" name="CFSurname" type="text">
                        </div> 
                        <div class="col-md-4">
                          <label for="CFID">Genero</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                            <option value="3">Otro</option>
                          </select>
                        </div>  
                      </div>
                      <div class="form-row mt-3">
                        <div class="col-md-4">
                          <label for="CFName">Grupo Poblacional</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">No aplica</option>
                            <option value="2">Afrocolombiano</option>
                            <option value="3">Indigena</option>
                            <option value="4">Rrom/Gitano</option>
                            <option value="5">Otro</option>                                          
                          </select>
                        </div>
                        <div class="col-md-4">
                          <label for="CVStratum">Tipo de identificacion</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Tarjeta de Identidad</option>
                            <option value="2">Cedula de Ciudadania</option>
                            <option value="3">Otro</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                          <label for="CVID">Numero de identificacion</label>
                          <input class="form-control" id="CVID" name="CVID" type="text">
                        </div>
                      </div> 
                      <div class="form-row mt-3">
                        <div class="col-md-3">
                          <label for="CVBirthCity">Lugar de Nacimiento</label>
                          <input class="form-control" id="CVBirthCity" name="CVBirthCity" type="text">
                        </div>
                        <div class="col-md-3">
                          <label for="CVBirth">Fecha de Nacimiento</label>
                          <input class="form-control" id="CVBirth" name="CVBirth" type="date">
                        </div>
                        <div class="col-md-3">
                          <label for="CFName">Afiliacion Salud</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Subsidiado</option>
                            <option value="2">Beneficiario</option>
                            <option value="3">Contributivo</option>
                            <option value="4">Prepagada</option>
                            <option value="5">Regimen Especial</option>                                          
                            <option value="6">Ninguna</option>
                            <option value="7">Otra</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <label for="CFName">Estado Civil</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Soltero</option>
                            <option value="2">Casado</option>
                            <option value="3">Union Libre</option>
                            <option value="4">Separado</option>
                            <option value="5">Viudo</option>                                          
                            <option value="6">Divorciado</option>
                            <option value="7">Otra</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-row mt-3">
                        <div class="col-md-3">
                          <label for="CVBirthCity">Lugar de residencia actual</label>
                          <input class="form-control" id="CVBirthCity" name="CVBirthCity" type="text">
                        </div>
                        <div class="col-md-3">
                          <label for="CVBirthCity">Direccion de residencia</label>
                          <input class="form-control" id="CVBirthCity" name="CVBirthCity" type="text">
                        </div>
                        <div class="col-md-3">
                          <label for="CFName">Zona de Residencia</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Rural</option>
                            <option value="2">Urbano</option>
                            <option value="2">Otro</option>
                          </select>
                        </div>
                        <div class="col-md-3">
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
                      </div>
                      <div class="form-row mt-3">
                        <div class="col-md-3">
                          <label for="CVBirth">Barrio</label>
                          <input class="form-control" id="CVBirth" name="CVBirth" type="text">
                        </div>
                        <div class="col-md-3">
                          <label for="CVBirth">Comuna</label>
                          <input class="form-control" id="CVBirth" name="CVBirth" type="text">
                        </div>
                        <div class="col-md-3">
                          <label for="CVBirth">Telefono</label>
                          <input class="form-control" id="CVBirth" name="CVBirth" type="text">
                        </div>
                        <div class="col-md-3">
                          <label for="CVBirth">Vive con el niño?</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Si</option>
                            <option value="2">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-row mt-3">
                        <div class="col-md-4">
                          <label for="CVBirth">Nivel de estudios (terminado)</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Ninguno</option>
                            <option value="2">Primaria Incompleta</option>
                            <option value="3">Primaria Completa</option>
                            <option value="4">Bachiller Incompleto</option>
                            <option value="5">Bachiller Completo</option>
                            <option value="6">Tecnico</option>
                            <option value="7">Tecnologo</option>
                            <option value="8">Profesional</option>
                            <option value="9">Postgrado o superior</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                          <label for="CVBirth">Actividad economica del hogar</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Estudiante</option>
                            <option value="2">Desempleado</option>
                            <option value="3">Rentista/Pensionado</option>
                            <option value="4">Amo de casa</option>
                            <option value="5">Asalariado formal</option>
                            <option value="6">Independiente</option>
                            <option value="7">Informal</option>
                            <option value="8">No activo</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                          <label for="CVBirth">Tiempo de trabajo</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Permanente</option>
                            <option value="2">Temporal</option>
                            <option value="3">Eventual</option>
                          </select>
                        </div>
                      </div>
                    </div>                              

                  </div> <!-- End of Tab 3 content --> 

                  <!-- Tab 4 content -->                          
                  <div id="Tab4" class="tabcontent">

                    <div class="form-group mt-3 ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-5">
                          <label>Han acudido por...</label>
                          <div class="form-row">  
                            <div class="col-md-1 mt-1"></div>
                            <div class="col-md-6 mt-1"><label for="CVSexF">
                                <input id="CVSexF" name="CVSex" type="radio" 
                                       value="F">&emsp;Iniciativa Propia</label></div>
                            <div class="col-md-5 mt-1"><label for="CVSexM">
                                <input id="CVSexM" name="CVSex" type="radio" 
                                       value="M">&emsp;Remitidos</label></div>
                          </div>
                        </div>  
                        <div class="col-md-7">
                          <label for="CFSurname">Remitente</label>
                          <input class="form-control" id="CFSurname" name="CFSurname" type="text">
                        </div>   
                      </div>
                      <div class="form-row">
                        <div class="col-md-12 mt-3">
                          <label for="CVID">¿Por qué quiere postular a la niña o niño al proceso de selección?</label>
                          <textarea class="form-control" id="CVID" name="CVID"></textarea>
                        </div>
                      </div>
                    </div>

                  </div> <!-- End of Tab 4 content --> 

                  <!-- Tab 5 content -->                          
                  <div id="Tab5" class="tabcontent">

                    <div class="form-group mt-3 ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-6">
                          <label for="CVStratum" data-toggle="tooltip" data-placement="top" 
                                 title="Segun la edad del hijo mayor de la union actual de 
                                 la familia entrevistada.">Etapa del ciclo vital de la familia</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Sin Hijos</option>
                            <option value="2">Preescolar (0-6 años)</option>
                            <option value="3">Escolar (7-11 años)</option>
                            <option value="4">Adolescente (12-18 años)</option>
                            <option value="5">Adulto Joven (19 a 24 años)</option>
                            <option value="6">Adulto (mas de 25 años)</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="CVBirth">Tipologia Familiar</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Monoparental Materna</option>
                            <option value="2">Monoparental Paterna</option>
                            <option value="3">Nuclear</option>
                            <option value="4">Extensa</option>
                            <option value="5">Reconstituida</option>
                            <option value="6">Otra?</option>
                          </select>
                        </div>
                      </div>
                    </div>

                  </div> <!-- End of Tab 5 content --> 

                  <!-- Tab 6 content -->                          
                  <div id="Tab6" class="tabcontent">

                    <div class="form-group mt-3 ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-4">
                          <label for="CVStratum">Subsistemas que conviven:</label>
                          <div class="form-row"> 
                            <div class="col-md-auto ml-2 mt-2"><label for="CVDocRC">
                                <input id="CVDocRC" name="CVDoc" type="checkbox" 
                                       value="F">&ensp;Padre&emsp;</label></div>
                            <div class="col-md-auto ml-2 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Madre&emsp;</label></div>
                          </div>
                        </div> 
                        <div class="col-md-4">
                          <label for="CVACCity">Hijos de la union actual?</label>
                          <div class="form-row">
                            <div class="col-md-auto ml-2 mt-2"><label for="CVDocRC">
                                <input id="CVDocRC" name="CVDoc" type="checkbox" 
                                       value="F">&emsp;Si&emsp;</label></div>
                            <div class="col-md-auto ml-2 mr-2">
                              <input class="form-control" id="CVACCity" name="CVAdress" 
                                     type="number" min="1" max="9" step="1" value="1"></div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="CVACCity">Hijos de uniones anteriores?</label>
                          <div class="form-row">
                            <div class="col-md-auto ml-2 mt-2"><label for="CVDocRC">
                                <input id="CVDocRC" name="CVDoc" type="checkbox" 
                                       value="F">&emsp;Si&emsp;</label></div>
                            <div class="col-md-auto ml-2 mr-2">
                              <input class="form-control" id="CVACCity" name="CVAdress" 
                                     type="number" min="1" max="9" step="1" value="1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="form-row">                                   
                        <div class="col-md-12 mt-3 text-center text-danger"><h5>Familia Extensa y Otros</h5>
                          WIP: Se esta buscando el codigo para agregar dinamicamente campos, 
                          para mejorar la presentacion de esta pagina.</div>
                        <div class="col-md-3">
                          <label for="CFID">Familiar #1</label>
                          <input class="form-control" id="CFID" name="CFID" type="text" placeholder="Que es esto?">
                        </div>  
                        <div class="col-md-3">
                          <label for="CFID">Familiar #2</label>
                          <input class="form-control" id="CFID" name="CFID" type="text" placeholder="Que es esto?">
                        </div>  
                        <div class="col-md-3">
                          <label for="CFID">Familiar #3</label>
                          <input class="form-control" id="CFID" name="CFID" type="text" placeholder="Que es esto?">
                        </div>  
                        <div class="col-md-3">
                          <label for="CFID">Familiar #4</label>
                          <input class="form-control" id="CFID" name="CFID" type="text" placeholder="Que es esto?">
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-md-6 mt-3">
                        <label for="CVACCity">La union actual de la conyuge es la (#)</label>
                        <div class="col-md-3 ml-1 mr-2">
                          <input class="form-control" id="CVACCity" name="CVAdress" 
                                 type="number" min="1" max="9" step="1" value="1">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="CVACCity">La union actual del conyuge es la (#)</label>
                        <div class="col-md-3 ml-1 mr-2">
                          <input class="form-control" id="CVACCity" name="CVAdress" 
                                 type="number" min="1" max="9" step="1" value="1">
                        </div>
                      </div> 
                    </div>

                  </div> <!-- End of Tab 6 content --> 

                  <!-- Tab 7 content -->                          
                  <div id="Tab7" class="tabcontent">

                    <div class="form-group mt-3 ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-12 mt-3 text-center text-danger">
                          Nota: No entiendo el proposito de este fragmento de la Caracterizacion
                          Familiar. Aclarar su proposito y su contenido (ya que parecen que hay campos
                          que hacen falta en el archivo que poseemos)</div>
                      </div>
                    </div>

                  </div> <!-- End of Tab 7 content --> 

                  <!-- Tab 8 content -->                          
                  <div id="Tab8" class="tabcontent">

                    <div class="form-group mt-3 ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-5"><label for="CFC1">Conflictos graves entre padres/hijos
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Conflictos graves entre conyuges
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Ruptura de la relacion conyugal
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">El padre abandono la familia
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">La madre abandono la familia
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Embarazo de menores de 18 años
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Menores de 18 años sin estudio
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Menores de 18 años maltratados
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Menores de 12 años que trabajan
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Fuga del hogar de menores de 18
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Menores de edad abandonados
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Menores de edad institucionalizados
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Discapacidad fisica
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Enfermedades o accidentes graves
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Transtornos psicologicos
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Transtornos psiquiatricos
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Abuso de alcohol o de drogas
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Problemas con la ley, personas en la carcel
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Problemas o perdidas economicas graves
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Adultos desempleados
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Hechos de inseguridad o de violencia social
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Desplazamiento forzoso/amenazas
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Muertes cercanas
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                        <div class="col-md-5"><label for="CFC1">Abuso sexual
                          </label></div>
                        <div class="col-md-1"><input id="CFC1" name="CFC1" type="checkbox" 
                                                     value="F"></div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-6 mt-2">
                          <label>Actualmente esta incurso en otros procesos</label>
                          <div class="form-row"> 
                            <div class="col-md-1 mt-2"></div>
                            <div class="col-md-5 mt-2"><label for="CVDocRC">
                                <input id="CVDocRC" name="CVDoc" type="radio" 
                                       value="F">&emsp;No</label></div>
                            <div class="col-md-6 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="radio" 
                                       value="M">&emsp;Si</label></div>
                          </div>
                        </div>
                        <div class="col-md-6 mt-2">
                          <label for="CFID">Cuales procesos?</label>
                          <input class="form-control" id="CFID" name="CFID" type="text" placeholder="Que es esto?">
                        </div>
                      </div>
                    </div>

                  </div> <!-- End of Tab 8 content --> 

                  <!-- Tab 9 content -->                          
                  <div id="Tab9" class="tabcontent">


                    <div class="form-group mt-3 ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-6 mt-1">
                          <label for="CFID">Ingresos mensuales del hogar (aprox.)</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Menos de 1 S.M.</option>
                            <option value="2">1 S.M.</option>
                            <option value="3">2 S.M.</option>
                            <option value="4">3-4 S.M.</option>
                            <option value="5">5+ S.M.</option>
                            <option value="6">No sabe, no informa</option>
                          </select>
                        </div>
                        <div class="col-md-6 mt-1">
                          <label for="CFID">Cuantas personas aportan economicamente?</label>
                          <input class="form-control" id="CVACCity" name="CVAdress" 
                                 type="number" min="1" max="9" step="1" value="1"></div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-6">
                          <label>Recibe recursos del estado o de organizaciones sociales?</label>
                          <div class="form-row">  
                            <div class="col-md-3 mt-1"><label for="CVSexF">
                                <input id="CVSexF" name="CVSex" type="radio" 
                                       value="F">&emsp;Si</label></div>
                            <div class="col-md-3 mt-1"><label for="CVSexM">
                                <input id="CVSexM" name="CVSex" type="radio" 
                                       value="M">&emsp;No</label></div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="CFSurname">Cuales subsidios?</label>
                          <div class="form-row">
                            <div class="col-md-4">
                              <input class="form-control" id="CFSurname" name="CFSurname" type="text">
                            </div>
                            <div class="col-md-4">
                              <input class="form-control" id="CFSurname" name="CFSurname" type="text">
                            </div>
                            <div class="col-md-4">
                              <input class="form-control" id="CFSurname" name="CFSurname" type="text">
                            </div>
                          </div>   
                        </div>
                      </div>
                    </div>

                  </div> <!-- End of Tab 9 content --> 

                  <!-- Tab 10 content -->                          
                  <div id="Tab10" class="tabcontent">

                    <div class="form-group mt-3 ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-6">
                          <label for="CVStratum">La vivienda es de tipo</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Casa</option>
                            <option value="2">Apartamento</option>
                            <option value="3">Habitacion</option>
                            <option value="4">Inquilinato</option>
                            <option value="5">Otro tipo</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="CVBirth">La vivienda es</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Arrendada</option>
                            <option value="2">Propia</option>
                            <option value="3">Familiar</option>
                            <option value="5">Otro tipo</option>
                            <option value="4">No sabe, no informa</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="CVStratum">La vivienda es de paredes en</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Ladrillo</option>
                            <option value="2">Bloque</option>
                            <option value="3">Carton</option>
                            <option value="4">Bolsa</option>
                            <option value="5">Otro tipo</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="CVBirth">Los pisos de la vivienda son en</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Cemento</option>
                            <option value="2">Baldosa</option>
                            <option value="3">Otro tipo</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-12">
                          <label for="CVStratum">Servicios publicos con los que cuenta la vivienda?</label>
                          <div class="form-row"> 
                            <div class="col-md-3 mt-2"><label for="CVDocRC">
                                <input id="CVDocRC" name="CVDoc" type="checkbox" 
                                       value="F">&ensp;Energia&emsp;</label></div>
                            <div class="col-md-3 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Agua&emsp;</label></div>
                            <div class="col-md-3 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Gas propano&emsp;</label></div>
                            <div class="col-md-3 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Gas domiciliario&emsp;</label></div>
                            <div class="col-md-3 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Recoleccion de basura&emsp;</label></div>
                            <div class="col-md-3 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Television&emsp;</label></div>
                            <div class="col-md-3 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Internet&emsp;</label></div>
                            <div class="col-md-3 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Otro servicio&emsp;</label></div>
                            <div class="col-md-3 mt-1">
                              <input class="form-control" style="padding:3px 6px;" id="CFID" name="CFID" type="text" placeholder="Cual otro?">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-4">
                          <label for="CVACCity">Cuantas personas viven en la vivienda?</label>
                          <div class="col-md-6 ml-1 mr-2">
                            <input class="form-control" id="CVACCity" name="CVAdress" 
                                   type="number" min="1" max="9" step="1" value="1">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="CVACCity">Cuantas habitaciones tiene la vivienda?</label>
                          <div class="col-md-6 ml-1 mr-2">
                            <input class="form-control" id="CVACCity" name="CVAdress" 
                                   type="number" min="1" max="9" step="1" value="1">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="CVACCity">Numero de espacios sociales</label>
                          <div class="col-md-6 ml-1 mr-2">
                            <input class="form-control" id="CVACCity" name="CVAdress" 
                                   type="number" min="1" max="9" step="1" value="1">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label>La vivienda tiene espacios para cocinar?</label>
                          <div class="form-row">  
                            <div class="col-md-auto mt-1"><label for="CVSexF">
                                <input id="CVSexF" name="CVSex" type="radio" 
                                       value="F">&ensp;Si&emsp;</label></div>
                            <div class="col-md-auto mt-1"><label for="CVSexM">
                                <input id="CVSexM" name="CVSex" type="radio" 
                                       value="M">&ensp;No&emsp;</label></div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="CVACCity">Cuantas baños tiene la vivienda?</label>
                          <input class="form-control" id="CVACCity" name="CVAdress" 
                                 type="number" min="0" max="9" step="1" value="0">
                        </div>
                        <div class="col-md-4">
                          <label for="CVStratum">El baño es de tipo</label>
                          <select class="form-control" id="CVStratum" name="CVStratum">  
                            <option value="" selected disabled hidden>Seleccione</option>
                            <option value="1">Letrina</option>
                            <option value="2">Pozo</option>
                            <option value="3">Otro tipo</option>
                          </select>
                        </div>
                        <div class="col-md-5">
                          <label>Considera que su vivienda es de facil acceso?</label>
                          <div class="form-row">  
                            <div class="col-md-auto mt-1"><label for="CVSexF">
                                <input id="CVSexF" name="CVSex" type="radio" 
                                       value="F">&ensp;Si&emsp;</label></div>
                            <div class="col-md-auto mt-1"><label for="CVSexM">
                                <input id="CVSexM" name="CVSex" type="radio" 
                                       value="M">&ensp;No&emsp;</label></div>
                          </div>
                        </div>
                        <div class="col-md-7">
                          <label>Tiene buen servicio de transporte el sector de su vivienda?</label>
                          <div class="form-row">  
                            <div class="col-md-auto mt-1"><label for="CVSexF">
                                <input id="CVSexF" name="CVSex" type="radio" 
                                       value="F">&ensp;Si&emsp;</label></div>
                            <div class="col-md-auto mt-1"><label for="CVSexM">
                                <input id="CVSexM" name="CVSex" type="radio" 
                                       value="M">&ensp;No&emsp;</label></div>
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-12">
                          <label for="CVStratum">Con cuales de los siguientes electrodomesticos 
                            cuenta su familia</label>
                          <div class="form-row"> 
                            <div class="col-md-3 mt-2"><label for="CVDocRC">
                                <input id="CVDocRC" name="CVDoc" type="checkbox" 
                                       value="F">&ensp;Television&emsp;</label></div>
                            <div class="col-md-3 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Lavadora&emsp;</label></div>
                            <div class="col-md-3 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Equipo de sonido&emsp;</label></div>
                            <div class="col-md-3 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Ventilador&emsp;</label></div>
                            <div class="col-md-3 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Nevera&emsp;</label></div>
                            <div class="col-md-3 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Microondas&emsp;</label></div>
                            <div class="col-md-3 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Grabadora&emsp;</label></div>
                            <div class="col-md-3 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Licuadora&emsp;</label></div>
                            <div class="col-md-3 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Sanduchera&emsp;</label></div>
                            <div class="col-md-3 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Computadora portatil&emsp;</label></div>
                            <div class="col-md-3 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Computador de mesa&emsp;</label></div>
                            <div class="col-md-3 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Otro servicio&emsp;</label></div>
                            <div class="col-md-3 mt-1">
                              <input class="form-control" style="padding:3px 6px;" id="CFID" name="CFID" type="text" placeholder="Cual otro?">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-4">
                          <label for="CVACCity">Cuantos vehiculos poseen?</label>
                          <input class="form-control" id="CVACCity" name="CVAdress" 
                                 type="number" min="0" max="9" step="1" value="0">
                        </div>
                        <div class="col-md-8">
                          <label for="CVStratum">Con que tipo de vehiculo cuenta</label>
                          <div class="form-row"> 
                            <div class="col-md-4 mt-2"><label for="CVDocRC">
                                <input id="CVDocRC" name="CVDoc" type="checkbox" 
                                       value="F">&ensp;Moto&emsp;</label></div>
                            <div class="col-md-4 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Servicio publico&emsp;</label></div>
                            <div class="col-md-4 mt-2"><label for="CVDocTI">
                                <input id="CVDocTI" name="CVDoc" type="checkbox" 
                                       value="M">&ensp;Vehiculo particular&emsp;</label></div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div> <!-- End of Tab 10 content --> 

                  <!-- Tab 11 content -->                          
                  <div id="Tab11" class="tabcontent">

                    <div class="form-group mt-3 ml-1 mr-1">
                      <div class="form-row">
                        <div class="col-md-12 mt-3 text-center text-danger">
                          Nota: Debido a que esta pagina es formidablemente extensa (y parece
                          tener ciertos campos de analisis),  hace falta hablar con la fundacion primero, 
                          para hacer claridad de su contenido y proposito, antes de cometer un paso 
                          en falso que consuma demasiado tiempo.</div>
                      </div>
                    </div>

                  </div> <!-- End of Tab 11 content --> 

                  <!-- Tab 12 content -->                          
                  <div id="Tab12" class="tabcontent">
                    
                    
                    
                  </div> <!-- End of Tab 12 content --> 

                </form>
              </div>
            </div>
          </div>
        </div>