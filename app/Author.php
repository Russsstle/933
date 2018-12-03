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
    'first_name', 'last_name', 'position'
  ];

  /**
   * @return mixed
   */
  public function articles() {
    return $this->belongsTo('App\Article');
  }

  /**
   * @return mixed
   */
  public function users() {
    return $this->belongsTo('App\User');
  }
}
