<?php include 'includes/header.php';

class MenuRestaurant {
    public $nombre;
    public $precio;
    public $categoria;

    public function __construct($nombre,$precio,$categoria)
    {
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->categoria=$categoria;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function getPrecio()
    {
        return $this->precio;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
}
$bebida=new MenuRestaurant("Jugo de Naranja ",100," Bebidas");
echo $bebida->getNombre();
echo $bebida->getPrecio();
echo $bebida->getCategoria();