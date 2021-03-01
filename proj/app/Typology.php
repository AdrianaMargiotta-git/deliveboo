<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typology extends Model
{
  // inseriamo dati da compilare
  protected $fillable = [
    'type'
  ];

  // relazione many to many
  public function users() {

   return $this-> belongsToMany(User::class);

  }
}
