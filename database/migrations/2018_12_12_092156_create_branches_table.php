<?php

use App\Branch;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('branches', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->timestamps();
      $table->softDeletes();
    });

    Branch::create(['name' => 'Main']);
    Branch::create(['name' => 'Creatives']);
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('branches');
  }
}
