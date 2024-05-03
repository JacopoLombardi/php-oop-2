
<?php

class Product{
   public $animal;
   public $type;
   public $name;

   public function __construct(string $_animal, string $_type, string $_name){
      $this->animal = $_animal;
      $this->type = $_type;
      $this->name = $_name;
   }

}
?>