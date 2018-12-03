<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('article', function (Blueprint $table) {
      $table->increments('article_id');
      $table->string('title');
      $table->integer('author_id')->unsigned();
      $table->foreign('author_id')->references('author_id')->on('author');
      $table->date('date');
      $table->text('content');
      $table->timestamps();
      $table->softDeletes();
    });
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
