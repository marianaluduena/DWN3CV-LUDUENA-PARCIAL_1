<?php

/**
 * Función que devuelve el catálogo completo sin importar la categoría
 * @return array es un array que devuelve todo el catálogo de mi sitio web
 */

function mostrarCatalogoCompleto(): array
{

    $catalogoCompleto = [
        [
            "id" => 1,
            "nombre" => "Cartas",
            "rama" => "cartomagia",
            "nivel" => "Fácil",
            "descripcion" => "Las cartas Bicycle estándar son un clásico en el mundo de la magia y no pueden faltarte en su kit de mago. Su plastificado de alta calidad las hacen resistentes, duraderas y fáciles de manipular. ¡Son ideales incluso para cardistry",
            "creador" => "varios",
            "marca" => "Bicycle",
            "formato" => "Físico",
            "img" => "cartas.png",
            "precio" => 950
        ],

        [
            "id" => 2,
            "nombre" => "Encuentra a la dama",
            "rama" => "cartomagia",
            "nivel" => "Difícil",
            "descripcion" => "",
            "creador" => "Jack Wilder",
            "marca" => "Theory11",
            "formato" => "Físico",
            "img" => "encuentra__a__la__dama.jpg",
            "precio" => 5.599
        ],

        [
            "id" => 3,
            "nombre" => "Aros",
            "rama" => "manipulacion",
            "nivel" => "Media",
            "descripcion" => " Ya sea en su forma más pequeña de 10 cm, mediana de 20 cm o en su máximo tamaño de 30 cm, los aros chinos nunca fallan en crear un efecto impactante en tu público. Son de acero inoxidable, ligeros y vienen en packs de 3, 4 o 6 aros según el tamaño que tengan. ¡Entrelazá los aros chinos entre sí y soltalos de una forma impactante!",
            "creador" => "Ching Ling Foo",
            "marca" => "Theori11",
            "formato" => "Físico",
            "img" => "aros__chinos.png",
            "precio" => 3.500
        ],

        [
            "id" => 4,
            "nombre" => "Esponjas",
            "rama" => "manipulacion",
            "nivel" => "Media",
            "creador" => "varios",
            "descripcion" => " Su textura suave, flexible y tamaño pequeño hacen de las esponjas un elemento perfecto para toda clase de magos: profesionales o aficionados. Vienen en packs de 5 esponjas. ¿Preferís formas más interesantes? ¡Estás en el lugar indicado! Tenemos muchas formas más: cubos, conejitos, lunas y estrellas son algunas de ellas.",
            "marca" => "Magia y Cardistry",
            "formato" => "Físico",
            "img" => "esponjas.jpg",
            "precio" => 850
        ],

        [
            "id" => 5,
            "nombre" => "Pañuelo mágico",
            "rama" => "manipulacion",
            "nivel" => "Fácil",
            "descripcion" => "Uno de los efectos más visuales que tenemos es pasar, literalmente, un pañuelo de seda a través de cualquier smartphone propio o, todavía mejor, de algún voluntario. Muy visual, muy fácil de hacer, es apto para principiantes y el asombro está garantizado. La magia y la tecnología se mezclan todo el tiempo, y ésto es prueba de ello.",
            "creador" => "Penn & Teller",
            "marca" => "Magia y Cardistry",
            "formato" => "Físico",
            "img" => "panuelo__magico.jpg",
            "precio" => 2.050
        ],

        [
            "id" => 6,
            "nombre" => "Esposas",
            "rama" => "escapismo",
            "nivel" => "Difícil",
            "descripcion" => "Su acero inoxidable, las cadenas, los candados y las llaves que atrapan tus manos son suficiente para convencer a tu público de que son esposas 100% reales, sin una sola parte de plástico. ¡Esto hará todavía más increíble tu escapismo cuando en tres segundos liberes tus manos de ellas de una manera imposible! Las esposas incluyen dos candados y llave",
            "creador" => "Harry Houdini",
            "marca" => "Theory11",
            "formato" => "Físico",
            "img" => "esposas.png",
            "precio" => 2.000
        ],

        [
            "id" => 7,
            "nombre" => "Billete de fuego",
            "rama" => "magia__de__escenario",
            "nivel" => "Difícil",
            "descripcion" => " El papel de chispa o papel flash es el mejor aliado para manipular el fuego. Vienen en packs de 10 unidades.  Están diseñados para prenderse y apagarse rápidamente, sin dejar cenizas ni humo. Esto hará que tus manos queden completamente impecables después del efecto.",
            "creador" => "varios",
            "marca" => "Theory11",
            "formato" => "Físico",
            "img" => "billete__fuego.webp",
            "precio" => 1.250
        ]

    ];

    return $catalogoCompleto;
}


/**
 * Función para devolver los datos de un producto específico
 * @param string $producto contendrá el nombre del producto
 * @param array 
 */

 function devolverDatosProducto(string $rama):array{

$producto = [];

$catalogo = mostrarCatalogoCompleto();

foreach($catalogo as $efectoProducto){

    if($efectoProducto["rama"] == $rama){

        $producto[] = $efectoProducto;
    }
}
return $producto;

 }