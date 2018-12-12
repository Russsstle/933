<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rate extends Model {
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
    'description', 'filename'
  ];

  /**
   * @return mixed
   */
  public function branches() {
    return $this->belongsToMany('App\Branch', 'branch_id');
  }

  /**
   * @return mixed
   */
  public function rate() {
    return $this->hasMany("App\Rate");
  }
}
