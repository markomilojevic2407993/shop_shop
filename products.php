<?php 

//var_dump($_GET['id']);



if(!isset($_GET['id'])||empty($_GET['id'])){
    echo'Morate izabrati proizvod';
}
require_once "modeli/baza.php";

$idproizvod=$_GET['id'];

$rezultat=$baza->query("SELECT * FROM proizvodi WHERE id='$idproizvod'");


$proizvod=$rezultat->fetch_assoc();

//var_dump($arrayProizvoda);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    

<div class="flex">
    <img src="img/salata1.jpg" alt="salata, salad" width="307px" height="300px">
    <h4 class="text-center h1 fw-bold text-danger"><?=$proizvod['ime']?></h4>
    <p class="text-center"><?=$proizvod['opis']?></p>
    <div class="miniFlex">
      <p class="fw-bold"><?=$proizvod['cena']?>:RSD</p>

      <?php if($proizvod['kolicina']>0): ?>
      <p class="fw-bold">Ima na stanju</p>
      <?php else:?>
        <p>Nema na stanju</p>
      <?php endif;?> 
        
        
    </div>
    
  </div>
  </div>
    
</body>
</html>