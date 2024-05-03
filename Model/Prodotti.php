
<?php

class Products{
   public $foods;
   public $toys;
   public $beds;
   public $type;

   public function __construct(string $_foods, string $_toys, string $_beds, string $_type){
      $this->foods = $_foods;
      $this->toys = $_toys;
      $this->beds = $_beds;
      $this->type = $_type;
   }



}

?>