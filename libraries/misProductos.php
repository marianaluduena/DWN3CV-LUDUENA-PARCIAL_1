<?php

/**
 * Función que devuelve el catálogo completo sin importar la categoría
 * @return array es un array que devuelve todos los productos del sitio web
 */

function mostrarCatalogoCompleto(): array
{
    
    // Al estar los productos ya incluidos en el index no es necesario ir un directorio hacia atrás

    $catalogoCompleto = file_get_contents("datos__json/catalogoCompleto.json");

    $catalogoCompletoJson = json_decode($catalogoCompleto, TRUE);

    return $catalogoCompletoJson;
}


/**
 * Función para devolver los productos de una categoría específica
 * @param string $rama será un string que buscará el nombre del producto con esa categoría
 * @return array $producto contendrá todos los productos devueltos con esa categoría
 */

function devolverProductoPorCat(string $rama): array {

    $producto = [];

    $catalogo = mostrarCatalogoCompleto();

    // Cómo pasarlo a operador ternario??

    if ($rama == "todos") {

        return mostrarCatalogoCompleto();
    }

    //$rama == "todos" ? mostrarCatalogoCompleto();

    foreach ($catalogo as $efectoProducto) {

        if ($efectoProducto["rama"] == $rama) {

            $producto[] = $efectoProducto;
        }
    }
    return $producto;
}

/**
 * Función que devuelve 1 producto elegido por el usuario
 * @param int $idProducto es el Id del producto
 * @return mixed devuelve un array con los datos del producto encontrado, caso contrario null
 */

function traerProductoPorId(int $idProducto):mixed {

    // 1ero traer todo el catálogo completo
    $catalogo = mostrarCatalogoCompleto();

    foreach ($catalogo as $efectoProducto) {

        // si el id encontrado se cumple, devuelve
        if ($efectoProducto["id"] == $idProducto){

            return $efectoProducto;
        }
    }
    return null;
}
