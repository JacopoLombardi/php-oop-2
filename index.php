
<?php

require_once __DIR__ . '/Model/E-Commerce.php';
require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/Food.php';
require_once __DIR__ . '/Model/Toy.php';
require_once __DIR__ . '/Model/Accessory.php';
require_once __DIR__ . '/Model/Type_animal.php';

require_once __DIR__ . '/data/db.php';

$shop = new E_commerce('Negozio di Animali', 'negozio con prodotti per cani e gatti');

// filtro i prodotti per categoria, mettendoli in un array separato
$category_food = array_filter($db_product, fn ($product) => get_class($product) === 'Food');
$category_toy = array_filter($db_product, fn ($product) => get_class($product) === 'Toy');
$category_accessory = array_filter($db_product, fn ($product) => get_class($product) === 'Accessory');

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- BOOTSTRAP -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
   integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <link rel="stylesheet" href="./css/style.css">

   <title>E-Commerce</title>
</head>
<body>

   <div class="container  text-center  mt-5">
      <h1> <?php echo $shop->title ?> </h1>
      <p class="fs-4  mt-4"> <?php echo $shop->description ?> </p>

      <div class="d-flex  justify-content-center  flex-wrap  my-4">



         <!-- Food -->
         
         <?php foreach($category_food as $product): ?>   
            <div class="col-2  text-center  border  bg-light  rounded-4  p-4  m-2">

               <h4 class="border  rounded-5  bg-body-secondary  py-2"> <?php echo $product->type_animal->icon ?> </h4>
               <h5> <?php echo $product->name ?> </h5>
               <p>&euro; <?php echo $product->price ?> </p>

               <h6>ingredienti:</h6>
               <ul class="list-unstyled">
                  <?php foreach($product->ingredients as $ingredient): ?>
                     <li>- <?php echo $ingredient ?> </li>
                  <?php endforeach; ?>
               </ul>

            </div>
         <?php endforeach; ?>
         


         <!-- Toy -->
         <?php foreach($category_toy as $product): ?>
            <div class="col-2  text-center  border  bg-light  rounded-4  p-4  m-2">

               <h4 class="border  rounded-5  bg-body-secondary  py-2"> <?php echo $product->type_animal->icon ?> </h4>
               <h5> <?php echo $product->name ?> </h5>
               <p>&euro; <?php echo $product->price ?> </p>

               <h6>taglia:</h6>
               <p> <?php echo $product->size ?> </p>

            </div>
         <?php endforeach; ?>



         <!-- Accessory -->
         <?php foreach($category_accessory as $product): ?>
            <div class="col-2  text-center  border  bg-light  rounded-4  p-4  m-2">

               <h4 class="border  rounded-5  bg-body-secondary  py-2"> <?php echo $product->type_animal->icon ?> </h4>
               <h5> <?php echo $product->name ?> </h5>
               <p>&euro; <?php echo $product->price ?> </p>

               <h6>materiale:</h6>
               <p> <?php echo $product->material ?> </p>
            </div>
         <?php endforeach; ?>

      </div>
   </div>
   
</body>
</html>