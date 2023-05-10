<?php

// La clase debe llamarse igual al título del archivo.php que la contiene

class Efecto
{
    private $id;
    private $nombre;
    private $rama;
    private $nivel;
    private $descripcion;
    private $creador;
    private $marca;
    private $formato;
    private $img;
    private $precio;

    /** Devuelve todo el catálogo (generando copias de sí mismo de todos sus productos)
     * @return array devuelve un array de objetos Efecto
     */

    public function mostrarCatalogoCompleto(): array
    {

        $catalogo = [];

        $datosJson = file_get_contents("datos__json/catalogoCompleto.json");
        $datosJsonDecode = json_decode($datosJson);


        foreach ($datosJsonDecode as $valor) {

            // new self generará una nueva instancia (una copia vacía de sí mismo) del objeto efecto

            $efecto = new self();

            $efecto->id = $valor->id;
            $efecto->nombre = $valor->nombre;
            $efecto->rama = $valor->rama;
            $efecto->nivel = $valor->nivel;
            $efecto->descripcion = $valor->descripcion;
            $efecto->creador = $valor->creador;
            $efecto->marca = $valor->marca;
            $efecto->formato = $valor->formato;
            $efecto->img = $valor->img;
            $efecto->precio = $valor->precio;

            $catalogo[] = $efecto;
        }

        return $catalogo;
    }

    /** Devuelve el catálogo de los productos más vendidos
     * @return array devuelve un array de objetos Efecto
     */

    public function mostrarLosMasVendidos(): array
    {
        $catalogoMasVendidos = [];
        $datosJsonMasVendidos = file_get_contents("datos__json/masVendidos.json");
        $datosJsonMasVendidosDecode = json_decode($datosJsonMasVendidos);

        foreach ($datosJsonMasVendidosDecode as $value) {

            $efecto = new self();

            $efecto->id = $value->id;
            $efecto->nombre = $value->nombre;
            $efecto->rama = $value->rama;
            $efecto->nivel = $value->nivel;
            $efecto->descripcion = $value->descripcion;
            $efecto->creador = $value->creador;
            $efecto->marca = $value->marca;
            $efecto->formato = $value->formato;
            $efecto->img = $value->img;
            $efecto->precio = $value->precio;

            $catalogoMasVendidos[] = $efecto;
        }
        return $catalogoMasVendidos;
    }

    /** Devuelve el catálogo completo de productos que pertenecen a una determinada rama
     * @param string $rama será un string con el nombre de la rama a buscar 
     * @return Efecto[] será un array que contiene las instancias del objeto Efecto
     */

    public function devolverProductoPorRama(string $rama): array
    {

        // Traigo los objetos Efecto del catálogo de Json

        $catalogo = $this->mostrarCatalogoCompleto();

        // Si el usuario eligió la rama "todos", devolver todos

        if ($rama == "todos") return $catalogo;

        // Si el usuario eligió una rama específica, devolver los productos de esa rama

        $productos = [];

        foreach ($catalogo as $efectoProducto) {

            if (($efectoProducto->rama == $rama)) {

                $productos[] = $efectoProducto;
            }
        }
        return $productos;
    }

    // En caso de que el usuario haya elegido traer los productos por nivel de dificultad...

    public function devolverProductosPorNivel(string $nivel): array
    {

        // Traigo los objetos del catálogo de Json

        $catalogo = $this->mostrarCatalogoCompleto();

        // Si el usuario eligió un nivel específico, devolver todos los productos de ese nivel

        $productos = [];

        foreach ($catalogo as $efectoProducto) {

            if (($efectoProducto->nivel == $nivel)) {

                $productos[] = $efectoProducto;
            }
        }
        return $productos;
    }

    // Buscar / devolver un producto por ID

    /** Función que devuelve todos los datos de un producto específico
     * @param int $idProducto es el Id del producto requerido
     * @return ?Efecto devuelve el objeto Efecto o devuelve null si no encuentra el ID
     */

    public function traerProductoPorId(int $idProducto): ?Efecto
    {

        // 1ero traer todo el catálogo completo
        $catalogo = $this->mostrarCatalogoCompleto();

        foreach ($catalogo as $efectoProducto) {

            // si el id encontrado se cumple, devuelve
            if ($efectoProducto->id == $idProducto){

                return $efectoProducto;
            }
        }
        return null;
    }

    // Devolver / traer el precio formateado del producto

    /** 
     * Función que devuelve un string con el precio formateado con . y , correspondientes
     */

    public function traerPrecioYFormatear(): string
    {

        return number_format($this->precio, 2, ",", ".");
    }

    // Devolver / traer la descripción del producto resumida

    /**
     *  Función que resume la descripción de los productos y que queden todos a la misma altura
     * @param int $cantPalabras es la cant deseada de palabras a extraer (es opcional)
     * @return string es la cant máxima de palabras que se mostrará con un elipsis (...) 
     */

    public function resumirDescProd(int $cantPalabras = 15): string
    {
        $descripProd = $this->descripcion;

        // explode toma una pieza de texto y la divide cuando encuentra un elemento
        // se le va a pasar el espacio (" ") y el valor será la descripción del prod

        $arrayResumen = explode(" ", $descripProd);

        if (count($arrayResumen) <= $cantPalabras) {
            $descripResumida = $cantPalabras;
        } else {
            array_splice($arrayResumen, $cantPalabras);
            $descripResumida = implode(" ", $arrayResumen) . " ...";
        }
        return $descripResumida;
    }

    // Tomar y devolver los datos únicos de cada producto

    /**
     * Función que devuelve el valor único del id del producto
     */

    public function traerId()
    {
        return $this->id;
    }

    /**
     * Función que devuelve el valor único del nombre del producto
     */

    public function traerNombre()
    {

        return $this->nombre;
    }

    /**
     * Función que devuelve el valor único de la rama del producto
     */

    public function traerRama()
    {
        return $this->rama;
    }

    /**
     * Función que devuelve el valor único del nivel del producto
     * @ucwords ($this->nivel) convertirá a mayúsculas la 1er letra del string
     */

    public function traerNivelYFormatear()
    {
        return ucwords($this->nivel);
    }

    /**
     * Función que devuelve el valor único de la descripcion del producto
     */

    public function traerDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Función que devuelve el valor único del creador del producto
     */

    public function traerNombreCreador()
    {
        return $this->creador;
    }

    /**
     * Función que devuelve el valor único de la marca del producto
     * @ucwords($this->marca)convertirá a mayúsculas la 1er letra del string
     */

    public function traerMarcaYFormatear()
    {
        return ucwords(str_replace("_", " ",$this->marca));
    }

    /**
     * Función que devuelve el valor único del formato del producto
     * @ucwords($this->formato)convertirá a mayúsculas la 1er letra del string
     */

    public function traerFormatoYFormatear()
    {
        return ucwords($this->formato);
    }

    /**
     * Función que devuelve el valor único de la img del producto
     */

    public function traerImg()
    {
        return $this->img;
    }

    /**
     * Función que devuelve el valor único del precio del producto
     */

    public function traerPrecio()
    {
        return $this->precio;
    }
};
