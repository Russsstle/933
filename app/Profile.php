<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model {
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
    'user_id', 'first_name', 'last_name', 'position', 'filename'
  ];

  /**
   * @return mixed
   */
  public function user() {
    return $this->belongsTo('App\User', 'user_id');
  }

  /**
   * @return mixed
   */
  public function getNameAttribute() {
    return $this->first_name . ' ' . $this->last_name;
  }
}
