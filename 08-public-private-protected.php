<?php include 'includes/header.php';
//Public-Se puede acceder en cualquier lugar(objeto,clase)
//protected- se puede accder unicamente en la clase
//Private-No puede ser accedido pr los hijos
class MenuRestaurant {
    private $nombre;  //public-protected-private
    public $precio;
    protected $categoria;

    public function __construct($nombre,$precio)  {
        $this->nombre=$nombre;
        $this->precio=$precio;
    }
    
    private function getNombre() //Public
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
$postre=new Postre("Pastel de crema",100,'150g');
//echo $postre->nombre; //comentarizar/descomentarizar   //Marcara error
//echo $postre->getNombre(); //comentarizar/descomentarizar
var_dump($postre);