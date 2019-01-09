<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partnership extends Model {
  //protected $table = "partnerships";

  protected $fillable = [
    'name', 'email', 'position', 'school', 'organization', 'organization_type'
  ];
}
