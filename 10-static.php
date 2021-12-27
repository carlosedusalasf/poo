<?php include 'includes/header.php';



class DB
{
    public static function conectarDB()
    {
        echo "Conectando a la base de datos";
    }
}
//$db = new DB();
//$db->conectarDB();
class Email{
    public static function EnviarEmail(){
        echo "Enviando correo...";
    }
}
DB::conectarDB();
echo "<br>";
Email::enviarEmail();