<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model {
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
    'name'
  ];

  /**
   * @return mixed
   */
  public function services() {
    return $this->hasMany('App\Service');
  }
}
