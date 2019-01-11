<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('profiles', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('user_id');
      $table->foreign('user_id')->references('id')->on('users');
      $table->string('first_name');
      $table->string('last_name');
      $table->string('position');
      $table->string('filename');
      $table->timestamps();
      $table->softDeletes();
    });

    \App\Profile::create(['user_id' => '1', 'first_name' => 'Mann', 'last_name' => 'Yang', 'position' => 'Web Developer', 'filename' => 'sad']);
    \App\Profile::create(['user_id' => '2', 'first_name' => 'Russell John', 'last_name' => 'Santos', 'position' => 'Web Developer', 'filename' => 'sad']);
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('profiles');
  }
}
