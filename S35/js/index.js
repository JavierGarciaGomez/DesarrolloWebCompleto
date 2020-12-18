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
bandaSong = bandaSong.replace('Enter Sandman', 'Nothing Else Matters');
console.log(`Reemplazando el nombre con replace(): ${bandaSong}`)
console.log(`La variable tiene la palabra Else ${bandaSong.includes('Else')}`);
// 163
console.log("--------------163 Numbers----------------");
let numero163 = 30;
let numero163b = 20;
console.log(`La suma de los numeros es: ${numero163+numero163b} , \n
la resta: ${numero163-numero163b}, \n
la mult: ${numero163*numero163b}, \n
la div: ${numero163/numero163b}, \n
el residuo: ${numero163%numero163b}, \n
la potencia: ${Math.pow(numero163, numero163b)}, \n
la raiz cuadrada: ${Math.sqrt(numero163, numero163b)}, \n`)

console.log("--------------164 Convirtiendo String a Número----------------");
let num164a = 2,
    num164b = "2";
console.log(`La suma es: ${num164a+Number(num164b)}`)
console.log(`La suma es: ${num164a+parseInt(num164b)}`)

console.log("--------------165 Convirtiendo Número a String----------------");
let numCuenta = 1234567890123456;
console.log(`El length del número de cuenta sin convertir a String: ${numCuenta.length} y convirtiendo a String: ${String(numCuenta).length}`)

console.log("--------------166 Tipos de datos----------------");
let string = "Juan";
let number = 4;
let boolean = true;
let char = "g";
let nullVar = null;
let empty;
let array = ['HTML', 'CSS', 'PHP'];
let object = {
    nombre: 'Javier',
    ciudad: 'Sevilla'
};
let date = new Date();


console.log(`Tipos de datos: ${typeof string}  ${typeof number}  ${typeof boolean} 
${typeof char} ${typeof nullVar} ${typeof empty} ${typeof array}
${typeof object} ${typeof date}`);

console.log("--------------167 Arrays----------------");
array = ['HTML', 'CSS', 'PHP'];
let array2 = new Array('a', 'b', 'c');
console.log(`mi array: ${array}`)
console.log(array)
console.log(array2)
console.log(array[1])
console.table(array)

let arrayMeses = ['Enero', 'Febrero'];
console.log(arrayMeses);
arrayMeses[2] = "Marzo";
arrayMeses[4] = "Mayo";
console.log(`Después de agregar con índice: ${arrayMeses}`);
arrayMeses.push('Abril')
console.log(`Después de agregar con push: ${arrayMeses}`);
arrayMeses.unshift('Mes cero')
console.log(`Después de agregar con unshift: ${arrayMeses}`);
arrayMeses.pop()
console.log(`Después de pop (eliminar) : ${arrayMeses}`);
arrayMeses.shift();
console.log(`Después de shift (eliminar) : ${arrayMeses}`);
arrayMeses.splice(2, 4);
console.log(`Después de splice : ${arrayMeses}`);
arrayMeses.reverse();
console.log(`Después de reverse : ${arrayMeses}`);
arrayMeses.sort();
console.log(`Después de sort : ${arrayMeses}`);

console.log("--------------168 Objetos----------------");
const persona = {
    nombre: 'Javier',
    apellido: 'García',
    edad: 35,
    trabajo: false
}

console.log(persona);
console.log(persona.nombre);

console.log("--------------169 Templates----------------");
console.log(`${persona.nombre} se apellida ${persona.apellido}`)

const contenedorApp = document.querySelector('#mensaje');
console.log(contenedorApp)

let html = '<ul>' +
    '<li> Nombre: ' + persona.nombre + '</li>' +
    '<li> Apellido: ' + persona.apellido + '</li>' +
    '</ul>'
contenedorApp.innerHTML = html;

// Template string
persona.nombre = 'Javier Humberto';
persona.apellido = 'García Gómez';
html = `<ul>
                <li> Nombre: ${persona.nombre} </li>
                <li> Apellido: ${persona.apellido} </li>
            </ul>`

contenedorApp.innerHTML = html;

console.log("--------------170 Funciones----------------");

function saludar(parameter) {
    console.log(`Hola, ${parameter}`);
}

saludar(persona.nombre);
saludar('Luisito');

// function declaration && function expression
// La función declaration se puede usar aunque se declare después, en tanto que la expression tiene que declararse antes
// declaration
function saludarD(parameter) {
    console.log(`Hola, ${parameter}`);
}
// expression
let saludarE = function (parameter) {
    console.log(`Hola, ${parameter}`);
}

saludarD('Declaration');
saludarE('Expression');

// Functiones IIFE: se invocan a ellas mismas
(function (tecnología) {
    console.log('Aquí estoy aprendiendo ' + tecnología);
})('JavaScript');

console.log("--------------171 Métodos----------------");
const musica = {
    nombre: 'Reproductor musical',
    reproducir: function (cancion) {
        console.log('Reproduciendo la canción: ' + cancion);
    }
}

// Agregando un nuevo método

musica.borrar = function (id) {
    console.log('Borrando la canción con id');
}

musica.reproducir("Beck - Loser");
musica.borrar();

console.log("--------------172 Funciones que retornan valor----------------");
const suma = function (a, b) {
    return a + b;
}
console.log('La suma es: ' + suma(4, 3));

// arrow functions
const sumaArrow = (a, b) => a + b;
console.log('La suma arrow es: ' + sumaArrow(4, 3));

console.log("--------------173 Object constructor y this----------------");
console.log('Hay muchas formas de crear objetos: object literay y object constructor son los más importantes')

// literal
const persona173 = {
    nombre: 'Juan'
}
// Object constructor
function Tarea(nombre, urgencia) {
    this.nombre = nombre;
    this.urgencia = urgencia;
}

let tarea1 = new Tarea("Comprar", "alta");
let tarea2 = new Tarea("Vender", "baja");
console.log(tarea1);
console.log(tarea2);

// Clases
class TareaC {
    constructor(nombre, urgencia) {
        this.nombre = nombre;
        this.urgencia = urgencia;
    }
}

let tarea3 = new TareaC("Comprar", "alta");
console.log(tarea3)

console.log("--------------174 Fechas----------------");
const hoy = new Date();
let valor = hoy.getMonth;
hoy.setFullYear(195, 6, 23);
console.log(hoy);

console.log("--------------175, 176 if----------------");
let num = 6;
if (num > 6) {
    console.log('Es mayor a 6');
} else if (num === 6) {
    console.log('Es 6');
} else {
    console.log('Es menor a 6');
}

// ternario

let logueado = true;

console.log(logueado ? 'SÍ' : 'NO');

console.log("--------------177 Switch----------------");
let metodoPago = 'cheque';
switch (metodoPago) {
    case 'efectivo':
        console.log("efectivo");
        break;
    case 'tarjeta':
        console.log('tarjeta')
        break;
    default:
        console.log('NO ENTIENDO');
        break;
}

console.log("--------------178 Loops----------------");
// FOR
for (let i = 0; i < 10; i += 2) {
    if (i === 4) {
        continue;
    }
    console.log("Iteración: " + i);
}

// WHILE
number = 1;
while (number < 4) {
    console.log('Todavía ' + number);
    number++;
}

do {
    console.log('Todavía ' + number);
    number--;
} while (number > 0)

console.log("--------------179 Other loops----------------");
const pendientes = ['Tarea', 'Comer', 'Proyecto'];
const carrito = [{
        id: 1,
        producto: 'Libro'
    },
    {
        id: 2,
        producto: 'Libreta'
    },
    {
        id: 3,
        producto: 'Libraco'
    }
]

const automovil = {
    nombre: 'camaro',
    modelo: 2020
}

console.log(carrito);
for (prod of carrito) {
    console.log(prod.producto);
}

for (pendiente of pendientes) {
    console.log(pendiente);
}

for (info of Object.values(automovil)) {
    console.log(info);
}

pendientes.forEach(function (pendiente) {
    console.log(pendiente);
})

pendientes.forEach(pendiente => {
    console.log(pendiente);
})

pendientes.map(tarea => {
    console.log(tarea);
})

console.log("--------------180 Scope----------------");
var musicaVar = 'rock';

if (musicaVar) {
    var musicaVar = 'Grunge';
    console.log('Dentro del if ' + musicaVar);
}
console.log('Fuera del if' + musicaVar);

let musicaLet = 'rock';

if (musicaLet) {
    let musicaLet = 'Grunge';
    console.log('Dentro del if ' + musicaLet);
}
console.log('Fuera del if' + musicaLet);

console.log("--------------181 Object destructuring ----------------");

const cliente = {
    clientName: 'Alejandro',
    tipo: 'Premium',
    datos: {
        ubicacion: {
            ciudad: 'cdMX',
            país: 'México'
        }
    }
}

// antes
let nombreCliente = cliente.clientName;
// nueva forma
let {
    clientName,
    tipo
} = cliente;

console.log(clientName + tipo);
let {
    datos: {
        ubicacion: {
            ciudad
        }
    }
} = cliente;
console.log(clientName, ciudad);

console.log("--------------182 Object enhancement ----------------");
let band = 'Metallica',
    gender = 'Heavy Metal',
    songs = ['Master of Puppets', 'Seek and Destroy'];

let Metallica = {
    band,
    gender,
    songs
};

console.log(Metallica);

console.log("--------------183 Filter .find .reduce ----------------");
const personas = [{
        nombre: 'Juan',
        edad: 20
    },
    {
        nombre: 'Pablo',
        edad: 50
    },
    {
        nombre: 'Alejandra',
        edad: 23
    },
    {
        nombre: 'Karen',
        edad: 28
    },
    {
        nombre: 'Miguel',
        edad: 33
    },
]

// FILTER
let mayores25 = personas.filter(persona => persona.edad > 25);
console.log(mayores25);
// FIND
const alejandra = personas.find(persona => persona.nombre === 'Alejandra');
console.log(alejandra + "Su edad, la repito " + alejandra.edad)

let {
    edad
} = alejandra;
console.log('la edad ' + edad);

// REDUCE
let total = personas.reduce((edadTotal, persona) => edadTotal + persona.edad, 0)

console.log(total);

console.log("--------------184 fetch API ----------------");