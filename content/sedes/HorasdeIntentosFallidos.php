<?php

//Quiza funcione mas adelante esta mierda pa algo

//<ul class = "nav nav-tabs" role = "tablist">
//<li class = "nav-item dropdown">
//<a class = "nav-link dropdown-toggle" data-toggle = "dropdown" href = "#" role = "button">Dropdown</a>
//<div class = "dropdown-menu">
//<a class = "dropdown-item" href = "#">Action</a>
//<a class = "dropdown-item" href = "#">Another action</a>
//<a class = "dropdown-item" href = "#">Something else here</a>
//<div class = "dropdown-divider"></div>
//<a class = "dropdown-item" href = "#">Separated link</a>
//</div>
//</li>
//<li class = "nav-item"><a class = "nav-link active"
//data-toggle = "tab" href = "#home" role = "tab">Home</a></li>
//<li class = "nav-item"><a class = "nav-link"
//data-toggle = "tab" href = "#profile" role = "tab">Profile</a></li>
//<li class = "nav-item"><a class = "nav-link"
//data-toggle = "tab" href = "#contact" role = "tab">Contact</a></li>
//<li class = "nav-item"><a class = "nav-link"
//data-toggle = "tab" href = "#home2" role = "tab">Home</a></li>
//<li class = "nav-item"><a class = "nav-link"
//data-toggle = "tab" href = "#profile2" role = "tab">Profile</a></li>
//<li class = "nav-item"><a class = "nav-link"
//data-toggle = "tab" href = "#contact2" role = "tab">Contact</a></li>
//</ul>
//<div class = "tab-content">
//<div class = "tab-pane fade show active" id = "home" role = "tabpanel">Home</div>
//<div class = "tab-pane fade" id = "profile" role = "tabpanel">Profile</div>
//<div class = "tab-pane fade" id = "contact" role = "tabpanel">Contact</div>
//<div class = "tab-pane fade" id = "home2" role = "tabpanel">Home2</div>
//<div class = "tab-pane fade" id = "profile2" role = "tabpanel">Profile2</div>
//<div class = "tab-pane fade" id = "contact2" role = "tabpanel">Contact2</div>
//</div>

//    var JSONFunc3;
//    JSONFunc3 = JSON.parse(localStorage.Lugares);
//    var caller = event.target;
//    var list = "";
//    for (i in JSONFunc3) {
//      if (caller.value = JSONFunc3[i].parent) {
//        list += "<option value='" + JSONFunc3[j].id + "'>" + JSONFunc3[j].name + "</option>";
//      }
//
//      $("#" + JSONFunc3[i].tipo + "").html(list);
//      $("#" + JSONFunc3[i].tipo + "").prop('disabled', false);
//    }
//    for (i in JSONFunc2) {
//      for (j in JSONFunc3) {
//
//        if (JSONFunc3[j].parent != null && $("#" + JSONFunc2[i].nombre + "").val() == JSONFunc3[j].parent) {
//          alert(JSONFunc3[j].name + " es parte de " + JSONFunc3[j].parent);
//          break;
//        }
//      }
//    }
//    var caller = event.target;
//    alert(caller.id);
//
//    for (i in JSONFunc2) {
//      for (j in JSONFunc3) {
//        if (caller.id == JSONFunc3[j].parent) {
//        }
//      }
//    }
//    SEFunction(3, caller.value);
//    JSONFunc3 = JSON.parse(localStorage.Lugares);
//    console.log(JSONFunc3);
//    alert("#SE" + JSONFunc3[0].tipo + "'".value);
//    $("#SE" + JSONFunc3[0].tipo + "'").html();
//    JSONDataLugares = JSON.parse(localStorage.Lugares);
//    list += "<option value='' selected disabled hidden>Seleccione</option>";
//
//    for (j in JSONDataLugares) {
//      list += "<option value='" + JSONDataLugares[j].id + "'>" + JSONDataLugares[j].name + "</option>";
//    }
//              TestCiudad();
//              JSONData2 = JSON.parse(localStorage.testLS);
//              localStorage.removeItem("testLS");
//              console.log(JSONData2);
//              list = "";
//              list += "<option value='' selected disabled hidden>Seleccione</option>";
//              for (i in JSONData2) {
//                if (JSONData2[i].parent == null) {
//                  list += "<option value='" + JSONData2[i].id + "'>" + JSONData2[i].name + "</option>";
//                }
//              }
//              list += "</select>";
//              list += "</div>";
//              $("#listaModal .modal-body #SE" + JSONData[i].nombre).html(list);