<?php include 'includes/header.php';

interface RestauranteInterface{
    public function getNombre();
    public function getPrecio():int;
    public function setPrecio($precio);
}
 class MenuRestaurant implements RestauranteInterface {
    public $nombre; 
    protected $precio;

    public function __construct($nombre,$precio)  {
        $this->nombre=$nombre;
        $this->precio=$precio;
    }
    public function getNombre() 
    {
        return $this->nombre;
    }
    public function getPrecio():int //Con float marcara error  //Comentar y descomentarizar con /*
    {
        return $this->precio;
    } //Comentarizar y descomentarizar con */
    public function SetPrecio(){
        $this->precio=$precio;
    }

}
$menu=new MenuRestaurant('Platillo',100);  //Acepto primero un 'Hola' en lugar de 100 pero no estana el set
var_dump($menu);
