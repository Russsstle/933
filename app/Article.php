<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model {
  use SoftDeletes;
  /**
   * @var array
   */
  protected $dates = ['deleted_at', 'date'];

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'author_id', 'title', 'date', 'content', 'filename'
  ];

  /**
   * @return mixed
   */
  public function authors() {
    return $this->belongsTo('App\Author', 'author_id');
  }

  /**
   * @return mixed
   */
  public function tags() {
    return $this->hasMany('App\Tag');
  }
}
