<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('articles', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('author_id');
      $table->foreign('author_id')->references('id')->on('authors');
      $table->string('title');
      $table->date('date');
      $table->text('content');
      $table->timestamps();
      $table->softDeletes();
    });
    // \App\Author::create(['user_id' => '1', 'title' => 'Laravel Is Life', 'date' => '12-19-2018', 'content' => 'Sad']);
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('article');
  }
}
