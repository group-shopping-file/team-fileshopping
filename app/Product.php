<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
      'name', 'producer_id', 'category_id', 'type_id', 'price', 'status', 'special',
      'sales_number', 'discount', 'image', 'file', 'body', 'download_number', 'click_number',
  ];

  public function producer(){
      return $this->belongsTo(Producer::class);
  }
  public function category(){
      return $this->belongsTo(Category::class);
  }
  public function type(){
      return $this->belongsTo(Type::class);
  }
  public function basket(){
      return $this->hasMany(Basket::class);
  }
  public function comment(){
      return $this->hasMany(Comment::class);
  }
  public function rating(){
      return $this->hasMany(Rating::class);
  }
  public function factor(){
      return $this->belongsToMany(Factor::class);
  }
}
