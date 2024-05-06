
<?php 

class Toy extends Product{
   public $size;

   public function __construct(string $_name, string $_code, float $_price, Type_animal $_type_animal, string $_size){
      parent::__construct($_name, $_code, $_price, $_type_animal, $_size);
      $this->size = $_size;
   }
}

?>