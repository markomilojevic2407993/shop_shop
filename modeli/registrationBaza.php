<?php   

require_once "baza.php";


if(!isset($_POST['email']) || empty($_POST['email'])){
    die('Niste uneli vas email');
}
if(!isset($_POST['pass']) || empty($_POST['pass'])){
    die('Niste uneli vas email');
}

$email=$_POST['email'];
$pass= password_hash($_POST['pass'], PASSWORD_BCRYPT   );





if($baza->query("INSERT INTO korisnici(email, pass) VALUES ('$email', '$pass')")){
    echo "Registracija uspesno izvrsena";
    header("refresh:2;url=../index.php");
    exit();
}else{
    echo'Ovaj mejl je vec u bazi podataka';
}

?>