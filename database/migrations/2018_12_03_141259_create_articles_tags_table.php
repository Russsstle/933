<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTagsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('tags', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('article_id');
      $table->foreign('article_id')->references('id')->on('articles');
      $table->string('content');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('article_tag');
  }
}
