<?php   



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
    
<h1 class="text-center">Enter the item you want to sell. </h1>
<h2 class="text-center">To do this You must be a registered member.</h2>



<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="modeli/getProductLogick.php"  method="get">
                <input type="text" name="ime" placeholder="Enter the product name." required>
                <input type="text" name="opis" placeholder="Enter the product description." required>
                <input type="text" name="slika" placeholder="Upload a product image." required>
                <input type="number" name="cena" placeholder="Enter the price of the product." required>
                <input type="number" name="kolicina" placeholder="Quantity of the product for sale." required>
                <button type="submit" class="btn btn-primary">List the product</button>
            </form>
        </div>    
    </div>  
</div>


</body>
</html>