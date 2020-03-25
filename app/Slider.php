<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
  protected $fillable = [
    'title', 'url', 'image', 'slider_parent_id',
  ];

  public function slider_parent(){
    return $this->belongsTo(SliderParent::class);
  }
}
