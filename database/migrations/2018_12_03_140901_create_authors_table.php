<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('authors', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('user_id');
      $table->foreign('user_id')->references('id')->on('users');
      $table->string('display_name');
      $table->timestamps();
      $table->softDeletes();
    });
    \App\Author::create(['user_id' => '1', 'display_name' => 'Manny Young']);
    \App\Author::create(['user_id' => '2', 'display_name' => 'Russell John Santos']);
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
