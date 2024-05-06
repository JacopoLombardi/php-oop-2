
<?php

class Product{
   public $name;
   public $code;
   public $price;
   public $type_animal;

   public function __construct(string $_name, string $_code, float $_price, Type_animal $_type_animal){
      $this->name = $_name;
      $this->code = $_code;
      $this->price = $_price;
      $this->type_animal = $_type_animal;
   }
}

?>