
<?php 

class Food extends Product{
   public $ingredients;

   public function __construct(string $_name, string $_code, float $_price, Type_animal $_type_animal, array $_ingredients){
      parent::__construct($_name, $_code, $_price, $_type_animal, $_ingredients);
      $this->ingredients = $_ingredients;
   }
}

?>