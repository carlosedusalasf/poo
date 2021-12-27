<?php include 'includes/header.php';

class MenuRestaurant
{
    public $nombre='Nombre del producto';
    public $precio=0;

}
//Creación de una instanciia (objeto)
$bebida=new MenuRestaurant();
//Modificación de los valores de los atributos
$bebida->nombre="Jugo de naranja";
$bebida->precio=30;
//Imprimir objeto en pantalla
var_dump($bebida);

$postre=new MenuRestaurant();
$postre->nombre="Carlota";
$postre->precio=50;

var_dump($postre);