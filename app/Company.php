<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $fillable = [
      'name', 'description','country','adress'
  ];
  public function products()
  {
    return $this->hasMany('App\Product','manufacturer_id');
  }
}
