//Al iniciar la pagina, abrir los modulos que sean de cada parte
$(document).ready(function() {
  //El espacio en el que va el panel de navegacion
  moduleLoad('frag', 'content/menu.php', '#mainNav');
  //El espacio en el que va el pie de pagina
  moduleLoad('frag', 'content/footer.php', '#footerContainer');
  //El espacio en el que van las ventansa modales
  moduleLoad('frag', 'content/modals.php', '#modalContainer');
  //Al cargar la pagina, cargar el contenido de acuerdo al hash activo
  hashLoad();
});

//En cualquier momento que el hash cambie, llama la funcion que cambia el contenido
window.onhashchange = hashLoad;

//Funcion para hacer mas elegante la adhesion del hash (para el cambio de paginas)
function changeHash(hash) {
  document.location.hash = hash;
}

//Carga el menu desde un archivo externo (esto con el fin de agilizar la edicion del mismo).
function moduleLoad(type, file, arg1, arg2) {
  //Esta tipo es para cargar un fragmento  (e.g. el menu o el pie de pagina).
  if (type == 'frag') {
    $(arg1).load(file);
  }
  //Este tipo es para cargar un modulo de la pagina (e.g. las paginas para registrar y mostrar datos).
  if (type == 'mod') {

    Pace.restart();
    document.title = arg1;
    $('#mainContainer').animateCss('fadeInLeft');
    $('#mainContainer').load(file);
    arg2 = typeof arg2 !== 'undefined' ? $('#modalContainer').load(arg2) : null;
  }
}

//Esta funcion de jQuery permite que los tooltips (mensaje que acompañan cierto elementos 
//al pasar el mouse sobre ellos) puedan ser mostrados.
$(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
});

//Funcion para llamar un modal, que va evolucionando dependiendo de que datos se le coloquen.
function callModal(mod, trigger, list, index) {

  trigger = typeof trigger !== 'undefined' ? trigger : null;
  list = typeof list !== 'undefined' ? list : null;
  index = typeof index !== 'undefined' ? index : null;

  if ((trigger === null) && (list === null) && (index === null)) {
    $(mod).modal();
  } else if ((index === null)) {
    var x = document.getElementById(trigger);
    var y = document.getElementById(list);
    if (x.value === y.value)
    {
      $(mod).modal();
    }
  } else {
    var x = document.getElementsByName(trigger);
    var y = document.getElementsByName(list);
    if (x[index].value === y[index].value)
    {
      $(mod).modal();
    }
  }
}

//Funcion de Animate.css para llamar asincronicamente sus animaciones
$.fn.extend({
  animateCss: function(animationName, callback) {
    var animationEnd = (function(el) {
      var animations = {
        animation: 'animationend',
        OAnimation: 'oAnimationEnd',
        MozAnimation: 'mozAnimationEnd',
        WebkitAnimation: 'webkitAnimationEnd',
      };

      for (var t in animations) {
        if (el.style[t] !== undefined) {
          return animations[t];
        }
      }
    })(document.createElement('div'));

    this.addClass('animated ' + animationName).one(animationEnd, function() {
      $(this).removeClass('animated ' + animationName);

      if (typeof callback === 'function')
        callback();
    });

    return this;
  }
});

//Pace Asincrono
paceOptions = {
  // Disable the 'elements' source
  elements: false,
  // Only show the progress on regular and ajax-y page navigation,
  // not every request
  restartOnRequestAfter: false
};

//Esto calcula la edad, usando el metodo mas aproximado posible:
//el numero de segundos que tiene un año juliano.
function calcularEdad(birth, age) {
  var getBirth = document.getElementById(birth);
  var showAge = document.getElementById(age);
  var Edad = +new Date(getBirth.value);
  showAge.value = Math.floor((Date.now() - Edad) / (1000 * 31557600));
}

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

  // Esto hace que todas las pestañas esten "cerradas" inicialmente, 
  // para la logica del script y del CSS.
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Esto muestra la pestaña a la que se le dio clic, y cambia el CSS de su cabecera.
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

//Por alguna razon del demonio, no funciona tal como el codigo original, asi que me toco
//hacerlo de esta manera: llama la funcion al cargar la pagina...
//window.onload = OpenTabByDefault;
// Abre por defecto alguna de las pestañas
function OpenTabByDefault() {
  document.getElementById("defaultTab").click();
}

//Modulo especifico de la pagina SE-R
//Hace que la funcion cargue nada mas abrir la pagina, para evitar que se de el caso de que la pagina abra
//en la opcion "Otra Ciudad", pero el espacio no sea visible (que me ocurrio varias veces en el testing).
//window.onload = verificarNuevaCiudad;


//La funcion que hace visible o invisible el campo para agregar otra ciudad. Vital para 
//evitar que las proporciones de la pagina se pierdan al agregar el campo.
function toogle(a, b) {
  var x = document.getElementById(a);
  var y = document.getElementsByClassName(b);
  for (var i = 0; i < y.length; i++) {
    if (x.value == 1) {
      y[i].style.display = "block";
    } else {
      y[i].style.display = "none";
    }
  }
}

//Esta funcion hace que el formulario se acomode correctamente al verse en celulares.
//Se hizo en jQuery para comprobar si este funcionaba o no. (jQuery no me sirvio para 
//manipular los campos de la funcion anterior, pero en este caso si funciono...)
//window.onload = cambiarAncho;
function cambiarAncho() {
  if (window.innerWidth > 991) {
    document.getElementById("anchoForm").className = "col-6";
  } else {
    document.getElementById("anchoForm").className = "col-10";
  }
}

//Modulo especifico para la pagina TE-R1
//Cambia las unidades en caso de que ya se haya escrito un valor.
//window.onload = changeUnits;
//Funcion para mejorar la accesibilidad: cambia el nombre de los grupos
//de la rubrica dependiendo de si ya se escribio una unidad o no.
function changeUnits(abc) {
  var units = document.getElementById(abc + 'nits').value;
  if (!!units) {
    document.getElementById(abc + '1T').innerHTML = units + ': Incipiente';
    document.getElementById(abc + '2T').innerHTML = units + ': Bajo';
    document.getElementById(abc + '3T').innerHTML = units + ': Medio';
    document.getElementById(abc + '4T').innerHTML = units + ': Alto';
  } else {
    document.getElementById(abc + '1T').innerHTML = 'Unidades: Incipiente';
    document.getElementById(abc + '2T').innerHTML = 'Unidades: Bajo';
    document.getElementById(abc + '3T').innerHTML = 'Unidades: Medio';
    document.getElementById(abc + '4T').innerHTML = 'Unidades: Alto';
  }
}

//Modulo especifico de la pagina TE-R2

//Funcion No. 1: Cuando se cambia la opcion del primer select, elimina
//o agrega opciones, dependiendo de lo que necesite.
function menusito(area, opcion) {
  $(area).change(function() {
    var x = $(this).val();
    if (x == 2 || x == 3)
    {
      $('#dataTable div').remove();
      $('#dataTable thead').remove();
      $('#dataTable tbody').remove();
      $(opcion + " option[value='1']").remove();
      $(opcion + " option[value='2']").remove();
      $(opcion).append('<option value="" selected disabled hidden>Seleccione</option>');
      $(opcion).append('<option value="1">No hay pruebas activas</option>');
    } else if (x == 1) {

      $('#dataTable div').remove();
      $('#dataTable thead').remove();
      $('#dataTable tbody').remove();
      $(opcion + " option[value='1']").remove();
      $(opcion + " option[value='2']").remove();
      $(opcion).append('<option value="" selected disabled hidden>Seleccione</option>');
      $(opcion).append('<option value="1">Planchas (1 Intento) (Mayores) (Lunes-Miercoles)</option>');
      $(opcion).append('<option value="2">Velocidad X metros (2 Intentos) (Menores) (Viernes)</option>');
    }
  }
  );

//Funcion No. 2: Cuando se seleccione una u otra prueba, debe mostrar un
//layout diferente. 
  $(opcion).change(function() {
    var x = $(this).val();
    if (x == 2)
    {
      $('#dataTable div').remove();
      $("#dataTable").append("\n\
                  <thead><tr><th>Name</th></tr></thead>\n\
                  <tbody><tr><td>Test 1</td></tr>\n\
                    <tr><td>Test 2</td></tr>\n\
                    <tr><td>Test 3</td></tr>\n\
                    <tr><td>Test 4</td></tr>\n\
                    <tr><td>Test 5</td></tr></tbody>");
      for (i = 0; i <= 2; i++) {
        $("#dataTable thead tr").append($("<th>Intento #" + i + "</th>"));
        $("#dataTable tbody tr").append($("<td>\n\
              <div class='input-group'>\n\
              <input class='form-control' type='text' name='TETest" + (i + 1) + "[]'> \n\
              <span class='input-group-addon' name='TETest" + (i + 1) + "[]'>@</span>\n\
              </div></td>"));
      }
    } else if (x == 1) {
      $('#dataTable thead').remove();
      $('#dataTable tbody').remove();
      $("#dataTable").append("\n\
                    <div class='col-md-12 text-center text-danger'> \n\
                    No existen estudiantes activos en este grupo...</div>");
    }
  });
}