<?PHP
//clase molde de los productos
class Producto
{

    public $id;
    public $nombre;
    public $descripcion;
    public $imagen;
    public $precio;
    public $valoracion;

    /**
     * Devuelve el catálgo completo en forma de array asociativo con todas las instancias de la clase
     * Decodifica el json para trasladar los datos a la clase
     */
    public function catalogo_completo(): array
    {   
        $catalogo = [];
        
        $catalogoJSON = file_get_contents('json/productos.json');
        $resultado = json_decode($catalogoJSON);

        foreach($resultado AS $value) {
            $brownie = new self();

            $brownie->id = $value->id;
            $brownie->nombre = $value->nombre;
            $brownie->descripcion = $value->descripcion;
            $brownie->imagen = $value->imagen;
            $brownie->precio = $value->precio;
            $brownie->valoracion = $value->valoracion;

            $catalogo[] = $brownie;
        }

        return $catalogo;
    }

    /**
     * Devuelve un brownie segun el id ingresado
     */
    public function brownie_x_id(int $idBrownie): Producto
    {
        $catalogo = $this->catalogo_completo();
        foreach ($catalogo as $p){
            if($p->id == $idBrownie) {
                return $p;
            }
        }

        return $this; //si no encuentra el id devuelve null
    }

    /**
     * Getters para cada campo de la clase Producto
     */ 

     public function getId()
     {
         return $this->id;
     }
     public function getNombre()
     {
         return $this->nombre;
     }
     public function getDescripcion()
     {
         return $this->descripcion;
     }
     public function getImagen()
     {
         return $this->imagen;
     } 
     public function getPrecio()
     {
         return $this->precio;
     }
     public function getValoracion()
     {
         return $this->valoracion;
     }
}
