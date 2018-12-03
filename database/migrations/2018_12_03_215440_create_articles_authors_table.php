<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesAuthorsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('articles_authors', function (Blueprint $table) {
      $table->unsignedInteger('article_id');
      $table->foreign('article_id')->references('id')->on('articles');
      $table->unsignedInteger('author_id');
      $table->foreign('author_id')->references('id')->on('authors');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('articles_authors');
  }
}
