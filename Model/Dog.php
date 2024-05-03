
<?php

class Dog extends Product{
   
   public function __construct(string $_animal, string $_type, string $_name){
      parent::__construct($_animal, $_type, $_name);
   }

}
?>