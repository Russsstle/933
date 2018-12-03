<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('users', function (Blueprint $table) {
      $table->increments('id');
      $table->string('username')->unique();
      $table->string('email_address')->unique();
      $table->string('password');
      $table->string('remember_token')->nullable();
      $table->timestamps();
      $table->softDeletes();
    });
    \App\User::create(['username' => 'neonspectrum', 'email_address' => 'youngskymann@gmail.com', 'password' => '1234']);
    \App\User::create(['username' => 'rustle', 'email_address' => 'rjohnsantos19@gmail.com', 'password' => '123']);
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('user');
  }
}
