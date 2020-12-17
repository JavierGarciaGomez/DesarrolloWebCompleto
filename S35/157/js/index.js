// 157
var nombre = 'Javier';
document.getElementById('mensaje').innerHTML = `Hola, ${nombre}`;
// 158
console.log("--------------158----------------");
console.time('hola');
console.log("Hola, " + nombre);
console.error("Hubo un error");
console.warn("cuidado");
console.timeEnd("hola");
// 159
console.log("--------------159, 160 Variables ----------------");
// tres formas de usar variables: var, let y const
var nombreVar = "Pedro";
let nombreLet = "nombreLet";
const nombreConst = "nombreConst";

console.log('En var las variables pueden volver a ser declaradas, en let no pueden volver a ser declaradas, ' +
    'pero sí volver a almacenarlas. En const no se puede ni volver a declarar ni volver a almacenarlas')
console.log('Las variables almacenadas son: ' + nombreVar + ' ' + nombreLet + ' ' + nombreConst);
// 161
console.log("--------------161 Strings----------------");
console.log('Dos formas de concater variables: ');
console.log('Concatenación de dos variables, forma a: ' + nombreLet + ' ' + nombreConst);
console.log(`Concatenación de dos variables, forma b: ${nombreConst} y ${nombreLet}`);
// 162
console.log("--------------162 Strings methods----------------");
let banda = 'Metallica';
let song = 'Enter Sandman';

let bandaSong;

bandaSong = banda + ": " + song;

console.log(`${bandaSong} tiene ${bandaSong.length} caracteres`);
console.log(`En mayúsculas: ${bandaSong.toUpperCase()}, en minúsculas ${bandaSong.toLowerCase()}`);
console.log(`El caracter 2 es: ${bandaSong.charCodeAt('2')}`);
let arr162 = bandaSong.split(' ');
console.log(`la variable con split() es: ${arr162}`);