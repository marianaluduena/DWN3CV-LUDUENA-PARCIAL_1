<?php

/**
 * Función que devuelve el catálogo completo sin importar la categoría
 * @return array es un array que devuelve todos los productos del sitio web
 */

function mostrarCatalogoCompleto(): array
{

    $catalogoCompleto = [
        [
            "id" => 1,
            "nombre" => "Cartas",
            "rama" => "cartomagia",
            "nivel" => "Todos",
            "descripcion" => "Las cartas Bicycle estándar son un clásico en el mundo de la magia y no pueden faltarte en su kit de mago. Su plastificado de alta calidad las hacen resistentes, duraderas y fáciles de manipular. ¡Son ideales incluso para cardistry!",
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
            "descripcion" => "Un clásico en la magia callejera: intentá encontrar a la dama... si podés. Replicá éste asombroso efecto pero con un detalle extra: ¡usando cartas grandes! Éstas cartas extra grandes son e 30 X 30 cm, plastificadas, ligeras y de excelente calidad. Si ya éste efecto engañoso es asombroso con cartas normales, llevado a gran escala lo es aún más.",
            "creador" => "Jack Wilder",
            "marca" => "Theory11",
            "formato" => "Físico",
            "img" => "encuentra__a__la__dama.png",
            "precio" => 5599
        ],

        [
            "id" => 3,
            "nombre" => "Aros chinos",
            "rama" => "manipulacion",
            "nivel" => "Media",
            "descripcion" => " Ya sea en su forma más pequeña de 10 cm, mediana de 20 cm o en su máximo tamaño de 30 cm, los aros chinos nunca fallan en crear un efecto impactante en tu público. Son de acero inoxidable, ligeros y vienen en packs de 3, 4 o 6 aros según el tamaño que tengan. ¡Entrelazá los aros chinos entre sí y soltalos de una forma impactante!",
            "creador" => "Ching Ling Foo",
            "marca" => "Theori11",
            "formato" => "Físico",
            "img" => "aros__chinos.png",
            "precio" => 3500
        ],

        [
            "id" => 4,
            "nombre" => "Esponjas",
            "rama" => "manipulacion",
            "nivel" => "Medio",
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
            "precio" => 2050
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
            "precio" => 2000
        ],

        [
            "id" => 7,
            "nombre" => "Billete de fuego",
            "rama" => "magia__de__escenario",
            "nivel" => "Difícil",
            "descripcion" => "El papel de chispa o papel flash es el mejor aliado para manipular el fuego. Vienen en packs de 10 unidades.  Están diseñados para prenderse y apagarse rápidamente, sin dejar cenizas ni humo. Esto hará que tus manos queden completamente impecables después del efecto.",
            "creador" => "varios",
            "marca" => "Theory11",
            "formato" => "Físico",
            "img" => "billete__fuego.webp",
            "precio" => 1250
        ],

        [

            "id" => 8,
            "nombre" => "Cartas Avengers",
            "rama" => "cartomagia",
            "nivel" => "Todos",
            "descripcion" => "Para todos los fans de los superhéroes (y villanos) de Marvel Comics presentamos éste original mazo temático para darle un toque más personal y divertido a tu magia. Iron Man, Black Widow, Thor, Hack eye y Spiderman entre otros estarán presentes en cada uno de tus efectos. Creá momentos únicos e inolvidables con tu mazo personalizado de Avengers.",
            "creador" => "Theory11",
            "marca" => "Theory11",
            "formato" => "Físico",
            "img" => "avengers__cartas.png",
            "precio" => 5050
        ],

        [

            "id" => 9,
            "nombre" => "Cartas Harry Potter",
            "rama" => "cartomagia",
            "nivel" => "Todos",
            "descripcion" => "Pasá de ser un muggle a un verdadero mago y creá un ambiente mágico y único con las cartas originales del mago más famoso de todos: Harry Potter. Si hay alguien entre tu público que no disfruta de la magia, probá cambiar su opinión usando éste mazo tan pedido por los fans de la saga de JK Rowling, y transformá su experiencia en una única que nunca olvidará.",
            "creador" => "Theory11",
            "marca" => "Theory11",
            "formato" => "Físico",
            "img" => "hp__cartas.png",
            "precio" => 5090
        ],

        [

            "id" => 10,
            "nombre" => "Tres migas",
            "rama" => "magia__de__escenario",
            "nivel" => "Intermedio",
            "descripcion" => "'Sólo tres migas y un pocillo' decía el gran mago argentino René Lavand, y sólo con éso era capaz de crear un veradero milagro ante los ojos de su audiencia. Eso es todo lo que necesitás para llenar el pocillo con 2 migas y 1 siempre al bolsillo. No importa la cantidad de veces que lo repitas ni si rápido o lento, siempre aparecerán 3 migas cuando vuelques el contenido ante tu público.",
            "creador" => "René Lavand",
            "marca" => "Magia y Cardistry",
            "formato" => "Físico",
            "img" => "tres__migas.jpg",
            "precio" => 3150
        ],

        [

            "id" => 11,
            "nombre" => "Cartas El Señor de los Anillos",
            "rama" => "cartomagia",
            "nivel" => "Todos",
            "descripcion" => "Uno de los mazos de cartas más pedidos de nuestra tienda. La Tierra Media es el lugar perfecto para ambientar con algún relato fantástico, ya sea de la saga o inventado por vos, todos los efectos de magia que se te ocurrran. ¡El límite es tu imaginación!",
            "creador" => "Theory11",
            "marca" => "Theory11",
            "formato" => "Físico",
            "img" => "lotr__cartas.jpg",
            "precio" => 5050
        ],

        [

            "id" => 12,
            "nombre" => "Carta esposas",
            "rama" => "escapismo",
            "nivel" => "Fácil",
            "descripcion" => "Realizá un escape original y muy visual usando sólo una carta y tus pulgares. El truco consiste en una carta con dos agujeros, y el resto corre por tu cuenta para la presentación y finalmente soltarte de una simple carta.",
            "creador" => "Julio Ribera",
            "marca" => "Magia y Cardistry",
            "formato" => "Físico",
            "img" => "carta__esposas.jpg",
            "precio" => 2050
        ],

        [

            "id" => 13,
            "nombre" => "Cartas Star Wars",
            "rama" => "cartomagia",
            "nivel" => "Todos",
            "descripcion" => "Llevá tu magia a una galaxia muy, muy, lejana con las cartas temáticas de Star Wars y ambientá tus historias con los Jedi, los Sith y el Imperio. ¡Vas a ver que todos van a sentirse dentro de una película de Star Wars y van a interesarse más! No te dejes arrastrar al Lado Oscuro de la Magia, y que la Magia te acompañe",
            "creador" => "Theory11",
            "marca" => "Theory11",
            "formato" => "Físico",
            "img" => "cartas__star__wars.webp",
            "precio" => 5050
        ],

    ];

    return $catalogoCompleto;
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
