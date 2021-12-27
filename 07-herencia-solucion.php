<?php include 'includes/header.php';


class MenuRestaurant {
    public $nombre;
    public $precio;

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
    public function getMedida()
    {
        return $this->medida;
    }
}

class Postre extends MenuRestaurant {

    public $peso;

    public function __construct($nombre,$precio,$peso) {
        parent::__construct($nombre,$precio);
        $this->postre=$peso;
    }
    public function getPeso()
    {
        return $this->peso;
    }
}
$bebida=new Bebidas('Jugo  de naranja ', 30, '150 ml');
var_dump($bebida);
$postre=new Postre('Pastel de chocolate', 60, '150 gr');
var_dump($postre);