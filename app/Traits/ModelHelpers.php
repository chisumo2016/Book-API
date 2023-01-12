<?php
  namespace App\Traits;

  trait ModelHelpers
  {
      public function matches(self $model):bool  //self will be the user class
      {
        return $this->id === $model->id;
      }
  }
