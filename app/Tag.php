<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'content'
  ];

  /**
   * @return mixed
   */
  public function articles() {
    return $this->belongsTo('App\Article');
  }
}
