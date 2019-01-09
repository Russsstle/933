<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model {

  /**
   * @var array
   */
  protected $fillable = [
    'title', 'description', 'filename', 'label_align'
  ];
}
