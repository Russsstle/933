<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model {

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'price'
  ];

  /**
   * @return mixed
   */
  public function services() {
    return $this->belongsToMany('App\Service', 'service_id');
  }
}
