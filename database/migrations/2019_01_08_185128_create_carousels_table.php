<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarouselsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('carousels', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title');
      $table->string('description');
      $table->enum('label_align', ['left', 'center', 'right']);
      $table->string('filename');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('carousels');
  }
}
