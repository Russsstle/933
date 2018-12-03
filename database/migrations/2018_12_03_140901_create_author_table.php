<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('author', function (Blueprint $table) {
      $table->increments('author_id');
      $table->string('authorname');
      $table->unsignedInteger('branch_id');
      $table->string('position');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('author');
  }
}
