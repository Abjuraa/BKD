var max = 100;
var min = 1;

//funcion para validar cambio manual en el campo de texto
function myFunction() {
  var x = document.getElementById("cantidad").value;
  if (x > max || x < min) {
    alert('Valor no aceptado');
    $('#cantidad').val(min);
    $('#cantidad').trigger('change');
    return false;
  }
  $('#pbi_reiterado').val();
  $('#pbi_reiterado').trigger('change');
  document.getElementById("demo").innerHTML = "You selected: " + x;
}

//funciones incremento
function aumentar() { // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id aumentar

  var inicio = $("#cantidad").val();
  var incrementado = ++inicio;

  if (incrementado > max) {
    alert('Máximo permitido: ' + max);
    return false;
  }
  var cantidad = document.getElementById('cantidad').value = incrementado; //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
}

//funciones decremento
function disminuir() { // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id disminuir
  var inicio = $("#cantidad").val();

  var decrementado = --inicio;
  if (decrementado < min) {
    alert('Mínimo permitido: ' + min);
    return false;
  }
  var cantidad = document.getElementById('cantidad').value = decrementado; //se obtiene el valor del input, y se decrementa en 1 el valor que tenga.
}