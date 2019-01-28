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
    'author_id', 'type', 'title', 'date', 'content', 'filename'
  ];

  /**
   * @return mixed
   */
  public function author() {
    return $this->belongsTo('App\Author', 'author_id');
  }

  /**
   * @return mixed
   */
  public function tags() {
    return $this->hasMany('App\Tag');
  }

  public function getFormattedTypeAttribute() {
    return ucwords(str_replace('_', ' ', $this->type));
  }
}
