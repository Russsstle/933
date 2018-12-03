<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model {
  /**
   * @var array
   */
  protected $dates = ['deleted_at'];

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'position'
  ];

  /**
   * @return mixed
   */
  public function articles() {
    return $this->belongsToMany('App\Article');
  }
}
