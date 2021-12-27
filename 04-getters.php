<?php include 'includes/header.php';

class MenuRestaurant {
    public $nombre = 'Nombre del producto';
    public $precio = 0;
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getPrecio()
    {
        return $this->precio;
    }
}

$bebida=new MenuRestaurant();
$bebida-> nombre="Jugo de naranja ";
$bebida-> precio=100;
echo $bebida->getNombre();
echo $bebida->getPrecio();
echo"<br>";
$postre=new MenuRestaurant();
$postre-> nombre="Pastel ";
$postre-> precio=120;
echo $postre-> getNombre();
echo $postre->getPrecio();