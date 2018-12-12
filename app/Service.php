<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model {
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
    'title', 'description', 'filename'
  ];

  /**
   * @return mixed
   */
  public function branches() {
    return $this->belongsTo('App\Branch', 'branch_id')->withTrashed();
  }

  /**
   * @return mixed
   */
  public function rates() {
    return $this->hasMany("App\Rate");
  }
}
