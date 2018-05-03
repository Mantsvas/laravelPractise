<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
      'name', 'description','price','quantity','category_id','manufacturer_id'
  ];
}
