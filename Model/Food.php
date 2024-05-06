
<?php 

class Food extends Product{
   public $ingredients;

   public function __construct(string $_name, string $_code, float $_price, Type_animal $_type_animal, array $_ingredients){
      parent::__construct($_name, $_code, $_price, $_type_animal, $_ingredients);
      $this->setIngredients($_ingredients);
   }

   public function setIngredients($_ingredients){
      var_dump($_ingredients);

      foreach($_ingredients as $item){
         var_dump(strlen($item));

         if(strlen($item) < 4){
            throw new exception('è stato inserito un nome troppo corto!');
            
         }
      }
   }
}

?>