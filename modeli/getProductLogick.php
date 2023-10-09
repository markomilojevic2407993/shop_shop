<?php 



require_once "baza.php";

if(!isset($_GET['ime'])||empty($_GET['ime'])){
    die('Nisu uneti svi parametri');
}
if(!isset($_GET['opis'])||empty($_GET['opis'])){
    die('Nisu uneti svi parametri');
}
if(!isset($_GET['slika'])||empty($_GET['slika'])){
    die('Nisu uneti svi parametri');
}

if(!isset($_GET['cena'])||empty($_GET['cena'])){
    die('Nisu uneti svi parametri');
}
if(!isset($_GET['kolicina'])||empty($_GET['kolicina'])){
    die('Nisu uneti svi parametri');
}



$ime=$_GET['ime'];
$opis=$_GET['opis'];
$slika=$_GET['slika'];
$cena=$_GET['cena'];
$kolicina=$_GET['kolicina'];

$rezultat=$baza->query("INSERT INTO proizvodi(ime, opis, slika, cena, kolicina) VALUES('$ime','$opis','$slika',$cena,$kolicina)");

if($rezultat){
    echo 'New product add';
    header("refresh:2; url=../index.php");
}

?>