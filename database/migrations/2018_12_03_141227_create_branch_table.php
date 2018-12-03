<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('branch', function (Blueprint $table) {
      $table->increments('branch_id');
      $table->string('branch_location');
      $table->string('address');
      $table->integer('contactnumber');
      $table->timestamps();
      $table->softDeletes();
    });
    Schema::table('author', function ($table) {
      $table->foreign('branch_id')->references('branch_id')->on('branch');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('branch');
  }
}
