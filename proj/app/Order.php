<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
    'name',
    'lastname',
    'mobile',
    'status',
    'address',
    'price'
  ];

  // relazione many to many
  public function dishes() {

   return $this-> belongsToMany(Dish::class);

  }
}
