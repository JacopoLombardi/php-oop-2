
<?php 

class Accessory extends Product{
   public $material;

   public function __construct(string $_name, string $_code, float $_price, Type_animal $_type_animal, string $_material){
      parent::__construct($_name, $_code, $_price, $_type_animal, $_material);
      $this->material = $_material;
   }
}

?>