<?php

namespace App\Repository\Eloquent;

use App\Models\Product;
use App\Repository\UserRepositoryInterface;
use App\Repository\Eloquent\BaseRepository;
// use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Collection;


class UserRepository extends BaseRepository implements UserRepositoryInterface
{

   /**
    * UserRepository constructor.
    *
    * @param Product $model
    */
   public function __construct(Product $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */
   public function all(): Collection
   {
       return $this->model->all();    
   }
}
?>