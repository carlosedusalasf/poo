<?php include 'includes/header.php';

class MenuRestaurant {
    public $nombre='Nombre del producto';
    public $precio=0;

    public function obtenerProductoynombre()
    {
        echo "El producto ".$this->nombre." tiene un precio de ".$this->precio;
    }
}


//Instanciar una clase
$bebida = new MenuRestaurant();
$bebida->nombre="Jugo de naranja";
$bebida->precio=100;
$bebida->obtenerProductoynombre();
echo"<br>";
$postre= new MenuRestaurant();
$postre->nombre="Pastel";
$postre->precio=120;
$postre->obtenerProductoynombre();

echo"<br>";
$corte= new MenuRestaurant();
$corte->nombre="Rib Eye";
$corte->precio=500;
$corte->obtenerProductoynombre();