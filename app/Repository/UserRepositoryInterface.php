<?php
namespace App\Repository;

use App\Models\Product;
// use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Collection;

interface UserRepositoryInterface
{
   public function all(): Collection;
}
?>