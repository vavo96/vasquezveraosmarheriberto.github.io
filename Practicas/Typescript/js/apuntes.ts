let cadena: string = "Osmar";
let numero: number = 12;
let booleana: boolean = true;
let cualquier_valor: any ="hola";//12,true

let array_string: Array<String> =["jojo","jaja"];
let array_objetos: Array<Object> =[12,"hola"];

let array_enteros: number[]=[1,2,3,4];

let entero_o_cadena: string | number=1;//"hola"

// definir tipo de datos customizados

type letrasonumeros = string | number;
let letras_numeros: letrasonumeros = "holas";
/*
let nivel de bloque
var nivel global
*/
// recibe un numero pero devuelve string similar a string numero(java)
function getNumbero(numero: number):string{
    return "numero "+numero;
}