<?php
// Funciones de salida en PHP
// Las funciones de salida son aquellas que permiten mostrar al usuario cuando se finaliza la ejecucion de un proceso determinado, algunas de estas funciones son:


// -echo(): Esta es la función más común para imprimir en PHP. Se utiliza para mostrar una o
// varias cadenas de texto en la salida del servidor web. La sintaxis básica es la siguiente:

echo "Kiubo mano como me le va?";

// -print(): Esta función es similar a echo(), pero solo puede imprimir una cadena de texto a la vez.
// La sintaxis básica es la siguiente:

$texto = "Chavales";
printf("Hola%s",$texto); //el marcador %s, indica que se trata de una cadena de texto

// -sprintf(): Esta función es similar a printf(), pero en lugar de imprimir la cadena formateada en
// la salida estándar, devuelve la cadena formateada como resultado. La sintaxis básica es la
// siguiente:

$texto = "Chavales";
$mensaje = sprintf("Hola%s",$texto);
echo $mensaje;

?>
