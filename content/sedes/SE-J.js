//Archivo con TODO el JS y jQuery del modulo de sedes.

//Funcion para crear y consultar
function CFunction(funcion, caller) {
  //Si no se recibe ningun argumento opcional, se deja NULL por defecto
  caller = typeof caller !== 'undefined' ? caller : null;
  //Se crea un objeto vacio de JavaScript
  var JSdata = {};
  ////Funcion #1: Crear el registro en la BD
  if (funcion == 1) {
    //Recibe todas las variables del formulario
    var JSdata = $("#SEForm").serializeObject();
    //Se agrega el campo que se necesita para que el PHP funcione apropiadamente
    JSdata.function = funcion;
    //Lo convierte en un formato valido para la intercomunicacion              
    var JSONdata = JSON.stringify(JSdata);
    //Envia la peticion para registrar los datos codificados en JSON
    $.ajax({
      url: "content/sedes/SE-RL.php",
      type: "POST",
      data: JSONdata,
      dataType: "json",
      contentType: "application/json",
      success: function(json) {
        //Cierra el modal que llamo la funcion
        $(caller).modal('hide');
        //Hace legible la respuesta codificada del PHP
        var done = JSON.parse(JSON.stringify(json));
        //Si todo va bien, y el PHP responde como se espera, ocurrira lo siguiente
        if (done.status == 1) {
          $("#successModal").modal();
        }
        //Esto no deberia ocurrir jamas (el front-end se debe encargar de esta excepcion)
        else {
          console.log("Algo salio mal");
        }
      }
    });
  }
  //Funcion #2: Obtener la jerarquia o lista ordenada de los tipos de lugar
  if (funcion == 2) {
    //Se agrega el campo que se necesita para que el PHP funcione apropiadamente
    JSdata.function = funcion;
    //Lo convierte en un formato valido para la intercomunicacion              
    var JSONData = JSON.stringify(JSdata);
    //Envia la peticion para solicitar los datos de la jerarquia
    $.ajax({
      url: 'content/sedes/SE-RL.php',
      type: "POST",
      data: JSONData,
      dataType: 'json',
      contentType: "application/json",
      success: function(json) {
        //localStorage solo guarda texto plano (ni tan siquiera numeros), pero con este "truquito" 
        //guarda la respuesta de JSON (que llega como un objeto JS de AJAX, pera volverse texto) 
        localStorage.Orden = JSON.stringify(json);
      }
    });
  }
  //Funcion #3: Extraer la lista de todos los lugares
  if (funcion == 3) {
    //Se agregan los campos que se necesitan para que el PHP funcione apropiadamente
    JSdata.function = funcion;
    //Lo convierte en un formato valido para la intercomunicacion              
    var JSONdata = JSON.stringify(JSdata);
    //Envia la peticion para solicitar los datos de la lista
    $.ajax({
      url: 'content/sedes/SE-RL.php',
      type: "POST",
      data: JSONdata,
      dataType: 'json',
      contentType: "application/json",
      success: function(json) {
        //Idem
        localStorage.Lugares = JSON.stringify(json);
      }
    });
  }
}
//Funcion para consultar
function RFunction(funcion) {
  //Se crea un objeto vacio de JavaScript
  var JSdata = {};
  //Se agrega el campo que se necesita para que el PHP funcione apropiadamente
  JSdata.function = funcion;
  //Lo convierte en un formato valido para la intercomunicacion              
  var JSONdata = JSON.stringify(JSdata);
  //Envia la peticion para registrar los datos codificados en JSON
  $.ajax({
    url: "content/sedes/SE-LL.php",
    type: "POST",
    data: JSONdata,
    dataType: "json",
    contentType: "application/json",
    success: function(json) {
      //Idem
      localStorage.Lista = JSON.stringify(json);
      crearTable();
    }
  });
}
//Funcion para consultar y actualizar
function UFunction(funcion, caller) {
  //Si no se recibe ningun argumento opcional, se deja NULL por defecto
  caller = typeof caller !== 'undefined' ? caller : null;
  //Se crea un objeto vacio de JavaScript
  var JSdata = {};
  //Funcion #1: Obtiene los datos que existen en la BD y los coloca en su campo correspondiente
  if (funcion == 1) {
    //Si no se recibe ningun argumento opcional, se deja NULL por defecto
    //Se agrega el campo que se necesita para que el PHP funcione apropiadamente
    JSdata.id = localStorage.UID;
    //Se agregan los campos que se necesitan para que el PHP funcione apropiadamente
    JSdata.function = funcion;
    //Lo convierte en un formato valido para la intercomunicacion              
    var JSONData = JSON.stringify(JSdata);
    //Envia la peticion para solicitar los datos de la jerarquia
    $.ajax({
      url: 'content/sedes/SE-UL.php',
      type: "POST",
      data: JSONData,
      dataType: 'json',
      contentType: "application/json",
      success: function(json) {
        document.getElementById("SEName").value = json[0].name;
        document.getElementById("SEAddress").value = json[0].dir;
        document.getElementById("SEBoss").value = json[0].jefe;
        document.getElementById("SEBossNum").value = json[0].num;
      }
    });
  }
  //Funcion #2: Actualiza los datos de la BD con los datos ingresados en el formulario
  if (funcion == 2) {
    //Recibe todas las variables del formulario
    var JSdata = $("#SEForm").serializeObject();
    //Idem
    JSdata.id = localStorage.UID;
    //Idem
    JSdata.function = funcion;
    //Idem
    var JSONdata = JSON.stringify(JSdata);
    //Envia la peticion para registrar los datos codificados en JSON
    $.ajax({
      url: "content/sedes/SE-UL.php",
      type: "POST",
      data: JSONdata,
      dataType: "json",
      contentType: "application/json",
      success: function(json) {
        //Idem
        $(caller).modal('hide');
        //Hace legible la respuesta codificada del PHP
        var done = JSON.parse(JSON.stringify(json));
        //Si todo va bien, y el PHP responde como se espera, ocurrira lo siguiente
        if (done.status == 1) {
          $("#successModal").modal();
        }
      }
    });
  }
}
//Funcion para eliminar
function DFunction(funcion, caller) {
  //Si no se recibe ningun argumento opcional, se deja NULL por defecto
  caller = typeof caller !== 'undefined' ? caller : null;
  //Se crea un objeto vacio de JavaScript
  var JSdata = {};
  //Funcion #1: Eliminar los datos de la base de datos
  if (funcion == 1) {
    //Si no se recibe ningun argumento opcional, se deja NULL por defecto
    //Se agrega el campo que se necesita para que el PHP funcione apropiadamente
    JSdata.id = localStorage.DID;
    //Se agregan los campos que se necesitan para que el PHP funcione apropiadamente
    JSdata.function = funcion;
    //Lo convierte en un formato valido para la intercomunicacion              
    var JSONData = JSON.stringify(JSdata);
    //Envia la peticion para dar de baja los datos
    $.ajax({
      url: 'content/sedes/SE-DL.php',
      type: "POST",
      data: JSONData,
      dataType: 'json',
      contentType: "application/json",
      success: function(json) {
        //Idem
        $(caller).modal('hide');
        //Idem
        var done = JSON.parse(JSON.stringify(json));
        //Idem
        if (done.status == 1) {
          //Idem
          $("#successModal").modal();
          //Esto hace algo cuando el modal sea cerrado
          $('#successModal').on('hide.bs.modal', function(e) {
            //Ese "algo" sera recargar la pagina, para reflejar la borrada, PERO, 
            //esto ocurrira un segundo despues de cerrar el modal (muy rapido?)
            setTimeout(function() {
              location.reload();
            }, 1000);
          })
        }
      }
    });
  }
}

// BLOQUE DE CREATE
//Otra manera de llamar la funcion, respetando la filosofia Unobtrusive Javascript.
//Intentare modificar todo el proyecto para seguir esa filosofia (mas seguridad).
if ($('#elementId').length > 0) {
  //Manera sencilla para ejecutar el codigo si y solo si #SELocation existe
  $(document).on("click", "#SELocation", function() {
    //Trae el modal para seleccionar los lugares
    callModal('#listaModal');
    //Los siguientes pasos le permiten al sistema crear una lista desplegable para TODOS los tipos
    //de ubicacion geografica que pueden existir en cualquier momento, sin restriccion.
    CFunction(2);
    //Crea la variable que va a guardar la respuesta JSON, y le asigna dicho valor
    var JSONFunc2;
    JSONFunc2 = JSON.parse(localStorage.Orden);
    //Para no dejar los datos porahi volando, toca eliminar el contenido de esa variable "publica"
    localStorage.removeItem("Orden");
    //Debido a que cada tipo de ubicacion tiene ubicaciones dentro, esta funcion pobla todas las listas
    //El problema es que esta maricada, asi como la deje, inserta todas las ubicaciones del tipo dado
    //Pero, para que ese visaje quede bien hecho, eso deberia estar:
    //1. Todas las listas a excepcion de la primera deberian estar desactivadas.
    //2. Al escoger la primera, deberia llamar solo las ubicaciones que sean hijas de la seleccionada.
    //Debido a que se me llenaron las pelotas, corregir estos problemas quedara para un futuro cercano.
    CFunction(3);
    //Idem
    var JSONFunc3;
    JSONFunc3 = JSON.parse(localStorage.Lugares);
    //Idem
    localStorage.removeItem("Lugares");
    //Crea el contenedor que va a guardar todo el HTML generado
    var list = "";
    //Ciclo for-each para recorrer el objeto que trae la jerarquia de los tipos de ubicacion
    for (i in JSONFunc2) {
      //Si no tiene padre, debe ser el primero en la lista
      if (JSONFunc2[i].padre == null) {
        //Estructura basica del formulario, toma 6 de los 12 espacios del grid de Bootstrap,
        //y toma 2 espacios como margen superior, para que no quede todo remontado.
        list += "<div class='col-md-6 mt-2'>";
        //Estructura basica. El label referencia al ID del objeto que representa, y pos el texto.
        list += "<label for='" + JSONFunc2[i].nombre + "'> " + JSONFunc2[i].nombre + " </label>";
        //En uno de mis muchos intentos por resolver la lista, le coloque el ID del mismo nombre
        //que el tipo que iba a mostrar...
        list += "<select class='form-control' id='" + JSONFunc2[i].nombre + "' onchange=''>";
        //La opcion por defecto de la lista
        list += "<option value='' selected disabled hidden>Seleccione</option>";
        //Ahora ocurre otro ciclo for-each para definir el contenido de esta primera lista
        for (j in JSONFunc3) {
          //Evalua todos los datos que no tenga padre, y los coloca en esta primera lista
          //Esto se puede hacer con una consulta, colocando WHERE alias.ubicgeo_padre IS NULL
          if (JSONFunc3[j].parent == null)
            list += "<option value='" + JSONFunc3[j].id + "'>" + JSONFunc3[j].name + "</option>";
        }
        //Estructura basica, de nuevo
        list += "</select>";
        list += "</div>";
      }
      //Para todos los elementos que siguen, hasta el final de la jerarquia, hace esto que viene
      else {
        //Idem
        list += "<div class='col-md-6 mt-2'>";
        //Idem
        list += "<label for='" + JSONFunc2[i].nombre + "'> " + JSONFunc2[i].nombre + " </label>";
        //Idem
        list += "<select class='form-control' id='" + JSONFunc2[i].nombre + "' >";
        //Idem
        list += "<option value='' selected disabled hidden>Seleccione</option>";
        //Ahora a poblar el resto de listas, aqui empieza el dolor de cabeza.
        for (j in JSONFunc3) {
          //Mientras se encuentre dentro de un puesto en la jerarquia, llama todas las ubicaciones
          //que sean de ese tipo. Un machetazo, pero es funcional de momento.
          if (JSONFunc2[i].nombre == JSONFunc3[j].tipo)
            list += "<option value='" + JSONFunc3[j].id + "'>" + JSONFunc3[j].name + "</option>";
        }
        //Idem
        list += "</select>";
        list += "</div>";
      }
    }
    //Debido a que se termino la ejecucion de todos los ciclos, es hora de meter todo este contenido
    //en su respectivo contenedor, el cual se especifica (con lujo de detalles) con ese CSS Selector.
    $("#listaModal .modal-body #listas").html(list);
  });
}

// BLOQUE DE READ
//Una manera ligeramente mas organizada de crear las cajitas de funciones de la primera columna.
//Todas utilizan una margen ligera tanto a la izquierda como abajo de ellas; ademas, utilizan
//caracteres de Font-Awesome y uno de los multiples colores predeterminados de Bootstrap
var content = "";
content += "<a class='btn detail btn-secondary text-white mb-1 mr-1'>";
content += "<span class='fa fa-w fa-list-ul'></span></a>";
content += "<a class='btn update btn-warning text-white mb-1 mr-1'>";
content += "<span class='fa fa-w fa-edit'></span></a>";
content += "<a class='btn delete btn-danger text-white mb-1 mr-1'>";
content += "<span class='fa fa-w fa-times'></span></a>";

//Este es el constructor del plugin DataTable
var table;
function crearTable() {
  //Aqui recibe el resultado de la consulta para desplegar la lista
  var JSONLista = JSON.parse(localStorage.Lista);
  table = $('#dataTable').DataTable({
    //1ra Opcion: de donde vienen los datos?
    data: JSONLista,
    //2da Opcion: de que manera desea manipular las columnas
    "columnDefs": [{
        //Agarra la primera columna de la tabla (osea, dejara de mostrar ID, pues asi
        //quedo organizado al momento de generar el JSON con la consulta de la lista)
        "targets": 0,
        //Esto toca dejarlo en null, para poder modificar el contenido con defaultContent
        "data": null,
        //El contenido que queremos agregar arbitrariamente a esta columna.
        "defaultContent": content
      }]
  });
  //Funcion #2: Editar uno de los registros de la tabla. Se utiliza un CSS Selector especial
  $('#dataTable tbody').on('click', '.update', function() {
    //Agarra todos los datos del elemento DOM al que pertenece lo que se clico (la fila/registro)
    var rowData = table.row($(this).parents('tr')).data();
    //Guarda esto en localStorage para su uso externo
    localStorage.UID = rowData[0];
    //Cambia la pagina al formulario de edicion
    changeHash('SEU');
  });
//Funcion #3: Eliminar uno de los registros de la tabla. Se utiliza un CSS Selector especial
  $('#dataTable tbody').on('click', '.delete', function() {
    //Idem
    var rowData = table.row($(this).parents('tr')).data();
    //Idem
    localStorage.DID = rowData[0];
    //Llama el modal de eliminacion
    callModal('#submitModal');
  });
}
