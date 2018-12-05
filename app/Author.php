<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model {
  use SoftDeletes;
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
    'user_id', 'display_name'
  ];

  /**
   * @return mixed
   */
  public function articles() {
    return $this->belongsTo('App\Article', 'article_id');
  }

  /**
   * @return mixed
   */
  public function users() {
    return $this->belongsTo('App\User', 'user_id');
  }
}
