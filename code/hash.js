//Toda la logica de la redireccion y la carga de contenido se maneja aqui
function hashLoad() {

  switch (window.location.hash.substr(1)) {
    case "USL":
      moduleLoad('mod', 'content/usuarios/US-LV.php', 'Lista de usuarios');
      break;
    case "USR":
      moduleLoad('mod', 'content/usuarios/US-RV.php', 'Registro de usuario');
      break;
    case "CVL":
      moduleLoad('mod', 'content/ninos/CV-LV.php', 'Lista de niños');
      break;
    case "CVR":
      moduleLoad('mod', 'content/ninos/CV-RV.php', 'Registro de niño');
      break;
    case "CFL":
      moduleLoad('mod', 'content/carfam/CF-LV.php', 'Lista de caracterizaciones familiares');
      break;
    case "CFR":
      moduleLoad('mod', 'content/carfam/CF-RV.php', 'Registro de caracterizacion familiar');
      break;
    case "SEL":
      moduleLoad('mod', 'content/sedes/SE-LV.php', 'Lista de sedes', 'content/sedes/SE-LM.php');
      break;
    case "SER":
      moduleLoad('mod', 'content/sedes/SE-RV.php', 'Registro de sede', 'content/sedes/SE-RM.php');
      break;
    case "SEU":
      moduleLoad('mod', 'content/sedes/SE-UV.php', 'Edicion de sede', 'content/sedes/SE-UM.php');
      break;
    case "FAL":
      moduleLoad('mod', 'content/fases/FA-LV.php', 'Lista de fases');
      break;
    case "FAR":
      moduleLoad('mod', 'content/fases/FA-RV.php', 'Registro de fases');
      break;
    case "ARL":
      moduleLoad('mod', 'content/areas/AR-LV.php', 'Lista de areas');
      break;
    case "ARR":
      moduleLoad('mod', 'content/areas/AR-RV.php', 'Registro de areas', 'content/areas/TE-M.php');
      break;
    case "INL":
      moduleLoad('mod', 'content/ind/IN-LV.php', 'Lista de indicadores');
      break;
    case "INR":
      moduleLoad('mod', 'content/ind/IN-RV.php', 'Registro de indicadores');
      break;
    case "NOL":
      moduleLoad('mod', 'content/notas/NO-LV.php', 'Lista de notas');
      break;
    case "NOR":
      moduleLoad('mod', 'content/notas/NO-RV.php', 'Registro de notas');
      break;
    case "PRL":
      moduleLoad('mod', 'content/pruebas/TE-LV.php', 'Lista de pruebas');
      break;
    case "PRR1":
      moduleLoad('mod', 'content/pruebas/TE-R1.php', 'Registro de pruebas 1');
      break;
    case "PRR2":
      moduleLoad('mod', 'content/pruebas/TE-R2.php', 'Registro de pruebas 2');
      break;
  }
}