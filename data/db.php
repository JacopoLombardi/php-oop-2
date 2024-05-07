
<?php

$db_product =

   [
      new Food('croccantini', '1222333221', 5.99, new Type_animal('cane', '<i class="fa-solid fa-dog"></i>'), ['manzo', 'avena']),

      new Toy('pallina', '555533424', 2.99, new Type_animal('cane', '<i class="fa-solid fa-dog"></i>'), 'M'),

      new Accessory('cuccia', '345254312', 12.99, new Type_animal('cane', '<i class="fa-solid fa-dog"></i>'), 'plastic'),

      new Food('salmone', '536634556', 7.29, new Type_animal('cat', '<i class="fa-solid fa-cat"></i>'), ['salmone tagliato'])
   ]

?>