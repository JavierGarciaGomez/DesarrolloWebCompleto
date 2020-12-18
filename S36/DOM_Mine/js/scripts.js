// 187
console.log('-------------187 agregando comandos------------------');
console.log(document);
let head = document.head;
console.log(typeof head);
console.log(head);
// querySelector
let myHeader = document.querySelector('header');
console.log(myHeader);
let mySidebar = document.querySelector('#sidebar');
console.log(mySidebar);
// getElement
mySidebar = document.getElementById('sidebar');
console.log(mySidebar);

// 188
console.log('-------------188 revisando que el contenido esté listo------------------');
// El dos lo ejecuta solo hasta que termine de cargarse en sitio.

console.log("1");
(function () {
  'use strict';
  document.addEventListener('DOMContentLoaded', function () {
    console.log("2");
  })

})();

console.log("3");

console.log('-------------189 seleccionando contenido con JS getElementByID------------------');

let logo = document.getElementById('logo');
console.log(logo);
console.log(logo.hasAttribute('class'));
let logoAttribute = logo.getAttribute('class');
console.log(logoAttribute);
logo.setAttribute("class", 'loguito');
logoAttribute = logo.getAttribute('class');
console.log('Después de hacer un set, esta es su clase' + logoAttribute);

console.log('-------------190 seleccionando contenido con JS getElementByClassName------------------');
let navegacion = document.getElementsByClassName('navegacion');
console.log(navegacion)

console.log('-------------191 seleccionando contenido con JS getElementByTag------------------');
var enlaces = document.getElementsByTagName('a');
console.log(enlaces);
for (enlace of enlaces) {
  enlace.setAttribute('target', '_blank');
}

var enlacesSidebar = document.getElementById('sidebar').getElementsByTagName('a');
console.log(enlacesSidebar);

console.log('-------------192 seleccionando contenido con JSquery selector------------------');
logo = document.querySelector('#logo');
console.log(logo);
logo = document.querySelector('.loguito');
console.log(logo);
let encabezado = document.querySelector('aside h2');
console.log(encabezado);

// queryselectorAll
let encabezadosH2 = document.querySelectorAll('h2');
console.log(encabezadosH2);
console.log(encabezadosH2[0].innerText)

// mas de un parametro
let variosElementos = document.querySelectorAll('h2', 'footer');
console.log(variosElementos);

console.log('-------------193 seleccionando contenido con JSquery selectorAll------------------');
for (i = 0; i < enlaces.length; i++) {
  console.log(enlaces[i].innerText);
}

console.log('-------------194 Nodos------------------');
let enlace2 = document.querySelectorAll('#menu ul li a')[0];
console.log(enlace2);
console.log(enlace2.nodeType);
console.log(enlace2.nodeName);
console.log(enlace2.attributes);

enlace2.firstChild.nodeValue = 'Home';
console.log(enlace2.firstChild);

console.log('-------------195 Creando elementos------------------');
let aSidebar = document.querySelector('#sidebar');
let newElement = document.createElement('H1');
let newText = document.createTextNode("HOLA MUNDO");

newElement.appendChild(newText);
aSidebar.appendChild(newElement);

let enlaceSidebar = document.querySelectorAll('#sidebar ul');
let newLink = document.createElement('a');
newLink.setAttribute('href', 'http://Google.com');
let linkText = document.createTextNode('Entrada agregada con JS');
newLink.appendChild(linkText);
let newList = document.createElement('li');
newList.appendChild(newLink);
enlaceSidebar[0].appendChild(newList);

console.log('-------------196 Clonar un nodo------------------');
let contenido = document.querySelectorAll('main');
console.log(contenido);
let newContent = contenido[0].cloneNode(true);

let sidebar = document.querySelector('aside');
console.log(sidebar)
sidebar.insertBefore(newContent, sidebar.childNodes[5]);

console.log('-------------197 Controlar inserciones con Insert before------------------');

let masVisitados = document.createElement('H2');
let textoVisitado = document.createTextNode('Post más visitados');
masVisitados.appendChild(textoVisitado);
sidebar.insertBefore(masVisitados, sidebar.childNodes[0]);

let contenido2 = document.querySelectorAll('main h2');
for (i = 0; i < contenido2.length; i++) {
  let newElement = document.createElement('li');
  let newText = document.createTextNode(contenido2[i].firstChild.nodeValue);
  newElement.appendChild(newText);
  sidebar.insertBefore(newElement, sidebar.childNodes[1]);
}

console.log('-------------198 Eliminando nodos------------------');
let firstPost = document.querySelector('main article');
console.log(firstPost);
let parentNode = firstPost.parentNode;
console.log(parentNode)
firstPost.parentNode.removeChild(firstPost);

console.log('-------------199 Reemplazando nodos------------------');
let oldNode = document.querySelector('main h2');
let newNode = document.querySelector('footer h2');
oldNode.parentNode.replaceChild(newNode, oldNode);