// 208
(function () {
  'use strict';

  // 210
  var regalo = document.getElementById('regalo');
  //   208
  document.addEventListener('DOMContentLoaded', function () {
    console.log('Dom cargado')

    // 218
    var map = L.map('mapa').setView([21.019557, -89.595265], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([21.019557, -89.595265]).addTo(map)
      .bindPopup('Sucursal Urban')
      .openPopup();

    L.marker([21.002827, -89.614862]).addTo(map)
      .bindPopup('Sucursal Montejo.')
      .openPopup();

    //209
    // campos datos usuario
    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var email = document.getElementById('email');

    console.log(nombre, apellido, email)
    // campos pases
    var pase_dia = document.getElementById('pase_dia');
    var pase_completo = document.getElementById('pase_completo');
    var pase_dosdias = document.getElementById('pase_dosdias');
    // botones y divs
    var calcular = document.getElementById('calcular');
    var errorDiv = document.getElementById('error');
    var btnRegistro = document.getElementById('btnRegistro');
    var lista_productos = document.getElementById('lista_productos');
    var suma_total = document.getElementById('suma_total');

    // Extras
    var camisas = document.getElementById('camisa_evento');
    var etiquetas = document.getElementById('etiquetas');
    // 210

    // 209
    calcular.addEventListener('click', calcularMontos);

    // 214
    pase_dia.addEventListener('blur', mostrarDias);
    pase_completo.addEventListener('blur', mostrarDias);
    pase_dosdias.addEventListener('blur', mostrarDias);

    // 215, 216
    nombre.addEventListener('blur', validarCampos);
    apellido.addEventListener('blur', validarCampos);
    email.addEventListener('blur', validarCampos);
    email.addEventListener('blur', validarArroba);

    // 209
    function calcularMontos(event) {
      event.preventDefault();
      console.log(regalo.value);
      if (regalo.value === '') {
        alert('Elige un regalo');
        regalo.focus();
      } else {
        //209, 210
        var boletosDia = parseInt(pase_dia.value, 10) || 0,
          boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
          boletosCompleto = parseInt(pase_completo.value, 10) || 0,
          cantCamisas = parseInt(camisas.value, 10) || 0,
          cantEtiquetas = parseInt(etiquetas.value, 10) || 0;
        // 210


        let totalAPagar = boletosDia * 30 + boletos2Dias * 45 +
          boletosCompleto * 50 + cantCamisas * +cantCamisas * 10 * 0.93 +
          cantEtiquetas * 2;
        console.log(`La suma es ${totalAPagar}`);

        // 212
        var listadoProductos = [];

        if (boletosDia >= 1) {
          listadoProductos.push(`pases por día: ${boletosDia}`);
        }

        if (boletos2Dias >= 1) {
          listadoProductos.push(`pases por dos días: ${boletos2Dias}`);
        }

        if (boletosCompleto >= 1) {
          listadoProductos.push(`pases completos: ${boletosCompleto}`);
        }

        if (cantCamisas >= 1) {
          listadoProductos.push(`camisetas: ${cantCamisas}`);
        }

        if (cantEtiquetas >= 1) {
          listadoProductos.push(`etiquetas: ${cantEtiquetas}`);
        }

        console.log(listadoProductos);

        lista_productos.innerHTML = '';
        lista_productos.style.display = 'block';

        for (var i = 0; i < listadoProductos.length; i++) {
          lista_productos.innerHTML += listadoProductos[i] + '<br/>'
        }

        // 213
        suma_total.innerHTML = "$ " + totalAPagar.toFixed(2);
      }
    }



    // 214
    function mostrarDias() {
      var boletosDia = parseInt(pase_dia.value, 10) || 0,
        boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
        boletosCompleto = parseInt(pase_completo.value, 10) || 0;

      var diasElegidos = [];

      if (boletosDia > 0) {
        diasElegidos.push('viernes');
      }
      if (boletos2Dias > 0) {
        diasElegidos.push('viernes', 'sabado');
      }
      if (boletosCompleto > 0) {
        diasElegidos.push('viernes', 'sabado', 'domingo');
      }
      for (var i = 0; diasElegidos.length; i++) {
        document.getElementById(diasElegidos[i]).style.display = 'block';
      }


      console.log('has hecho click')
    }

    //   216
    function validarCampos() {
      if (this.value == '') {
        errorDiv.style.display = 'block';
        errorDiv.innerHTML = 'Este campo es obligatorio';
        this.style.border = '1px solid red';
      } else {
        errorDiv.style.display = 'none';
        this.style.border = 'none';
      }
    }

    function validarArroba() {
      if (this.value.indexOf('@') < -1) {
        errorDiv.style.display = 'none';
        this.style.border = '1px solid #cccccc';
      } else {
        errorDiv.style.display = 'block';
        errorDiv.innerHTML = "Debe tener una arroba"
        this.style.border = '1px solid red';
      }
    }



  }); // DOMContentLoaded
})();
