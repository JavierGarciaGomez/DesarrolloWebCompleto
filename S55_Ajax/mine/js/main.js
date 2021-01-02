// 428

// pasos para la creación de un request

var btnCargar = document.getElementById('cargar');
btnCargar.addEventListener('click', cargarContenido);

// 428
function cargarContenido() {
   // crearlo
   var xhr = new XMLHttpRequest();

   // abrirlo
   xhr.open("GET", "texto_prueba.txt", true);

   // revisar que cambie
   xhr.onreadystatechange = function () {
      console.log(xhr.readyState);
      // readyState=4 fue exitosa y status fue correcto
      if (xhr.readyState == 4 && xhr.status == 200) {
         console.log("Se cargó correctamente");

         var contenido = document.getElementById('contenido');
         contenido.innerHTML = xhr.responseText;
      }
   };

   xhr.send();
}

// 429
btnCargar.addEventListener('click', cargarContenido2);

function cargarContenido2() {
   // crearlo
   var xhr = new XMLHttpRequest();

   // abrirlo
   xhr.open("GET", "servidor.php", true);

   // revisar que cambie
   xhr.onreadystatechange = function () {
      console.log(xhr.readyState);
      if (xhr.readyState == 4 && xhr.status == 200) {
         console.log("Se cargo correctamente");
         var json = JSON.parse(xhr.responseText);
         console.log(json);
         var contenido = document.getElementById('contenido2');
         contenido.innerHTML = json.backend;
      }
   };

   xhr.send();
}