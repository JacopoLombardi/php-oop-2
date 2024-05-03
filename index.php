
<?php

require_once __DIR__ . '/Model/E-Commerce.php';
require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/Cat.php';
require_once __DIR__ . '/Model/Dog.php';

require_once __DIR__ . '/data/db.php';

$shop = new E_commerce('Negozio di Animali', 'negozio con prodotti per cani e gatti');

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- BOOTSTRAP -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
   integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

   <title>E-Commerce</title>
</head>
<body>

   <div class="container  text-center  mt-5">
      <h1> <?php echo $shop->title ?> </h1>
      <p class="fs-4  mt-4"> <?php echo $shop->description ?> </p>

      <div class="d-flex  justify-content-center  flex-wrap  my-4">

         <?php foreach($db_product as $product): ?>
            <div class="col-2  text-center  border  bg-light  rounded-4  p-4  m-2">

               <h5> <?php echo $product->animal ?> </h5>
               <p> <?php echo $product->type ?> </p>
               <p> <?php echo $product->name ?> </p>

            </div>
         <?php endforeach ?>

      </div>
   </div>
   
</body>
</html>