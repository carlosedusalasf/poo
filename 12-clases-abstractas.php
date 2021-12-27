<?php include 'includes/header.php';

abstract class MenuRestaurant {
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

    public function getPrecio()
    {
        return $this->precio;
    }
}

class Bebidas extends MenuRestaurant {
    public $medida;
    
    public function __construct($nombre,$precio,$medida) {
        parent::__construct($nombre,$precio);
        $this->medida=$medida;
    }
    public function getPrecio()
    {
        return "El precio es: " . $this->precio;
    }
    public function getMedida()
    {
        return $this->medida;
    }
}

class Postre extends MenuRestaurant {
    public $peso;

    public function __construct($nombre,$precio,$peso) {
        parent::__construct($nombre,$precio);
        $this->peso = $peso;
    }
    public function getPeso()
    {
        return $this->peso;
    }
}
//$menu=new MenyRestaurant('Nuevo elemento en el menú',100); //Comentzarizar y descomentarizar
//var_dump($menu); //Comentzarizar y descomentarizar
$postre=new Postre("Pastel de zarzamora",100,'300gr');
var_dump($postre); 