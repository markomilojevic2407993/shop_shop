<?php   

require_once "baza.php";

if(!isset($_GET['search'])||empty($_GET['search'])){
    die('niste uneli podatke');
}

$search=$_GET['search'];

$rezultat=$baza->query("SELECT * FROM proizvodi WHERE ime LIKE '%$search%' or opis LIKE '%$search%' ");


$proizvodi=$rezultat->fetch_all(MYSQLI_ASSOC);

if ($proizvodi==false) {
    echo 'Nothing found in the search.';
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
</head>
<body>


<div class="container">
    


<?php  foreach($proizvodi as $proizvod):  ?>
  <div class="col-md-4">
    
  
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
    <a href="products.php?id=<?= $proizvod['id']?>" type="submit" class="btn btn-warning text-danger">more products</a>
    
  </div>
  </div>
  <?php endforeach; ?>
  </div>
</div>
</div>
</body>
</html>