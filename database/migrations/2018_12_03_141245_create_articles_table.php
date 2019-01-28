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
      $table->enum('type', ['news', 'features', 'upcoming_events', 'tips']);
      $table->string('title');
      $table->date('date');
      $table->text('content');
      $table->string('filename');
      $table->timestamps();
      $table->softDeletes();
    });

    // \App\Article::create(['author_id' => '1', 'title' => 'Laravel Is Life', 'date' => '2018-12-01', 'content' => 'Sad']);
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
