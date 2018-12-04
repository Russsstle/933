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
      $table->string('first_name');
      $table->string('last_name');
      $table->string('position');
      $table->timestamps();
      $table->softDeletes();
    });
    \App\Author::create(['user_id' => '1', 'first_name' => 'Mann', 'last_name' => 'Yang', 'position' => 'Web Developer']);
    \App\Author::create(['user_id' => '2', 'first_name' => 'Russell John', 'last_name' => 'Santos', 'position' => 'Web Developer']);
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
