<?php

/**
 *  Función que resume la descripción de los productos y que queden todos a la misma altura
 * @param string $descripProd es el texto a resumir
 * @param int $cantPalabras es la cant deseada de palabras a extraer
 * @return string es la cant máxima de palabras que se mostrará con un elipsis (...) 
 */ 

 function resumirDescProd(string $descripProd, int $cantPalabras = 30) : string
 {
 
     // explode toma una pieza de texto y la divide cuando encuentra un elemento
     // se le va a pasar el espacio (" ") y el valor será la descripción del prod
     $arrayResumen = explode(" ", $descripProd);
 
     if (count($arrayResumen) <= $cantPalabras) {
         $resultado = $cantPalabras;
     } else {
         array_splice($arrayResumen, $cantPalabras);
         $resultado = implode(" ", $arrayResumen) . " ...";
     }
     return $resultado;
 }