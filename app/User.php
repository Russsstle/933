<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
  use Notifiable;
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
    'username', 'email_address', 'password'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token'
  ];

  /**
   * @return mixed
   */
  public function authors() {
    return $this->hasOne("App\Author");
  }

  /**
   * @return mixed
   */
  public function profiles() {
    return $this->hasOne("App\Profile");
  }

  /**
   * @param $password
   */
  protected function setPasswordAttribute($password) {
    $this->attributes['password'] = bcrypt($password);
  }
}
