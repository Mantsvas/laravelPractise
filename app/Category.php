<?php

namespace App;
use App\Categories;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

  
  protected $fillable = [
      'name', 'description'
  ];
}
