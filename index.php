
<?php

require_once __DIR__ . '/data/db.php';

require_once __DIR__ . '/Model/E-Commerce.php';
require_once __DIR__ . '/Model/Prodotti.php';
require_once __DIR__ . '';
require_once __DIR__ . '';


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

   <div class="container  border  mt-5">
      <h1>Negozio di Animali</h1>

      <div>



      </div>
   </div>


   
</body>
</html>