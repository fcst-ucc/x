<a class="navbar-brand" href="index.php">Colombia Somos Todos</a>
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
  <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="US">
      <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseUS" data-parent="#exampleAccordion">
        <i class="fa fa-fw fa-user"></i>
        <span class="nav-link-text">Usuarios</span>
      </a>
      <ul class="sidenav-second-level collapse" id="collapseUS">
        <li>
          <a href="#">
            <i class="fa fa-fw fa-list-alt"></i>
            <span class="nav-link-text">Lista de usuarios</span></a>
        </li>          
        <li>
          <a onclick="contentLoad('Registro de nuevo usuario', 'US-R.php', 'USR');" 
             id="USR" class="nav-link" >
            <i class="fa fa-fw fa-plus-circle"></i>
            <span class="nav-link-text">Registro de usuarios</span>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="CV">
      <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCV" data-parent="#exampleAccordion">
        <i class="fa fa-fw fa-star"></i>
        <span class="nav-link-text">Capital Vital</span>
      </a>
      <ul class="sidenav-second-level collapse" id="collapseCV">
        <li>
          <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCVL">
            <i class="fa fa-fw fa-list-alt"></i>
            <span class="nav-link-text">Listados</span>
          </a>
          <ul class="sidenav-third-level collapse" id="collapseCVL">
            <li>
              <a onclick="contentLoad('Ejemplo de Tabla 1', 'LIST1.php', 'List1');"
                 id="List1" class="nav-link">Listado de capital vital</a>
            </li>
            <li>
              <a onclick="contentLoad('Ejemplo de Tabla 2', 'LIST2-1.php', 'List21');"
                 id="List21" class="nav-link">Listado de caracterizacion familiar</a>
            </li>
          </ul>
        </li>          
        <li>
          <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCVR">
            <i class="fa fa-fw fa-plus-circle"></i>
            <span class="nav-link-text">Registros</span>
          </a>
          <ul class="sidenav-third-level collapse" id="collapseCVR">
            <li>
              <a onclick="contentLoad('Registro de nuevo capital vital', 'CV-Test.php', 'CVR');"
                 id="CVR" class="nav-link">Registro de capital vital</a>
            </li>
            <li>
              <a onclick="contentLoad('Registro de nueva caracterizacion familiar', 'CF-R.php', 'CFR', 'CF-M.php');"
                 id="CFR" class="nav-link">Registro de caracterizacion familiar</a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="SE">
      <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSE" data-parent="#exampleAccordion">
        <i class="fa fa-fw fa-globe"></i>
        <span class="nav-link-text">Sedes</span>
      </a>
      <ul class="sidenav-second-level collapse" id="collapseSE">
        <li>
          <a onclick="changeHash('SEL')"
             id="SEL" class="nav-link">
            <i class="fa fa-fw fa-list-alt"></i>
            Listado de sedes</a>
        </li>          
        <li>
          <a onclick="changeHash('SER')"
             id="SER" class="nav-link">
            <i class="fa fa-fw fa-plus-circle"></i>
            Registro de sedes</a>
        </li>
      </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="FA">
      <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseFA" data-parent="#exampleAccordion">
        <i class="fa fa-fw fa-chain"></i>
        <span class="nav-link-text">Fases</span></a>
      <ul class="sidenav-second-level collapse" id="collapseFA">
        <li>
          <a href="#">
            <i class="fa fa-fw fa-list-alt"></i>
            Listado de fases</a>
        </li>          
        <li>
          <a onclick="contentLoad('Registro de nueva fase', 'FA-R.php', 'FAR');"
             id="FAR" class="nav-link">
            <i class="fa fa-fw fa-plus-circle"></i>
            Registro de fases</a>
        </li>
      </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="AR">
      <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAR" data-parent="#exampleAccordion">
        <i class="fa fa-fw fa-paper-plane"></i>
        <span class="nav-link-text">Areas</span></a>
      <ul class="sidenav-second-level collapse" id="collapseAR">
        <li>
          <a href="#">
            <i class="fa fa-fw fa-list-alt"></i>
            Listado de areas</a>
        </li>          
        <li>
          <a onclick="contentLoad('Registro de nueva area', 'AR-R.php', 'ARR');"
             id="ARR" class="nav-link">
            <i class="fa fa-fw fa-plus-circle"></i>
            Registro de areas</a>
        </li>
      </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="IND">
      <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseIND" data-parent="#exampleAccordion">
        <i class="fa fa-fw fa-bar-chart"></i>
        <span class="nav-link-text">Indicadores</span></a>
      <ul class="sidenav-second-level collapse" id="collapseIND">
        <li>
          <a href="#">
            <i class="fa fa-fw fa-list-alt"></i>
            Listado de indicadores</a>
        </li>          
        <li>
          <a onclick="contentLoad('Registro de nuevo indicador', 'IND-R.php', 'INDR');"
             id="INDR"  class="nav-link">
            <i class="fa fa-fw fa-plus-circle"></i>
            Registro de indicadores</a>
        </li>
      </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="NO">
      <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseNO" data-parent="#exampleAccordion">
        <i class="fa fa-fw fa-book"></i>
        <span class="nav-link-text">Notas</span>
      </a>
      <ul class="sidenav-second-level collapse" id="collapseNO">
        <li>
          <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseNOL">
            <i class="fa fa-fw fa-list-alt"></i>
            <span class="nav-link-text">Listados</span></a>
          <ul class="sidenav-third-level collapse" id="collapseNOL">
            <li>
              <a href="#">Listado de notas</a>
            </li>
            <li>
              <a href="#">Listado de pruebas</a>
            </li>
          </ul>
        </li>          
        <li>
          <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseNOR">
            <i class="fa fa-fw fa-plus-circle"></i>
            <span class="nav-link-text">Registros</span></a>
          <ul class="sidenav-third-level collapse" id="collapseNOR">
            <li>
              <a onclick="contentLoad('Registro de nueva nota', 'NO-R.php', 'NOR');"
                 id="NOR" class="nav-link">Registro de notas</a>
            </li>
            <li>
              <a onclick="contentLoad('Registro de nuevo test (1)', 'TE-R1.php','TER1');"
                 id="TER1" class="nav-link">Registro de pruebas (#1)</a>
            </li>
            <li>
              <a onclick="contentLoad('Registro de nuevo test (2)', 'TE-R2.php','TER2');"
                 id="TER2" class="nav-link">Registro de pruebas (#2)</a>
            </li>
          </ul>
        </li>
      </ul>
    </li>                      
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
      <a class="nav-link" href="PC.php">
        <i class="fa fa-fw fa-lock"></i>
        <span class="nav-link-text">Cambiar Contraseña</span>
      </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
      <a class="nav-link" href="#">
        <i class="fa fa-fw fa-download"></i>
        <span class="nav-link-text">Generar Informe</span>
      </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
      <a class="nav-link" href="#">
        <i class="fa fa-fw fa-database"></i>
        <span class="nav-link-text">Historico</span>
      </a>
    </li>
  </ul>
  <ul class="navbar-nav sidenav-toggler">
    <li class="nav-item">
      <a class="nav-link text-center" id="sidenavToggler">
        <i class="fa fa-fw fa-angle-left"></i>
      </a>
    </li>
  </ul>

  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" onclick="callModal('#logoutModal')">
        <i class="fa fa-fw fa-sign-out"></i> Salir del sistema</a>
    </li>
  </ul>
</div>