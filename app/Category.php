<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [
      'chid', 'fa_name', 'en_name',
  ];

  public function product(){
    return $this->hasMany(Product::class);
  }
}
