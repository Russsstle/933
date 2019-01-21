<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partnership extends Model {
  /**
   * @var array
   */
  protected $fillable = [
    'name', 'email', 'position', 'school', 'organization', 'organization_type', 'logo'
  ];
}
