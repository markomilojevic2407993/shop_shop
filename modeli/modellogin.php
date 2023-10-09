<?php   

require_once "baza.php";
if(!isset($_POST['email'])||empty($_POST['email'])){
    die('niste uneli podatke');
}
if(!isset($_POST['pass'])||empty($_POST['pass'])){
    die('niste uneli podatke');
}
$email=$_POST['email'];
$pass=$_POST['pass'];

$rezultat=$baza->query("SELECT * FROM korisnici WHERE email='$email'");

if ($rezultat->num_rows==1) {
    $korisnik=$rezultat->fetch_assoc() ;
   // var_dump($korisnik); exit();
    $sifra=password_verify($pass, $korisnik['pass']);
    if ($sifra) {
       echo 'Welcome';
    }else {
        echo 'you are not welcome.';
    }
}else{
    echo 'Korisnik ne postoji u bazi' ;
}




?>