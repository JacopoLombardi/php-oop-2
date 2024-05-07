
<?php 

class Food extends Product{
   public $ingredients;

   public function __construct(string $_name, string $_code, float $_price, Type_animal $_type_animal, array $_ingredients){
      parent::__construct($_name, $_code, $_price, $_type_animal, $_ingredients);
      $this->setIngredients($_ingredients);
   }

   // se si inserisce un ingrediente con meno di 4 lettere il sito si blocca
   public function setIngredients($_ingredients){
      foreach($_ingredients as $item){
         if(strlen($item) < 4){
            throw new Exception('è stato inserito un nome troppo corto!');
         }
      }
      $this->ingredients = $_ingredients;
   }
}

?>