<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Comments', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('fromUser');
            $table->integer('toUser')->nullable();
            $table->integer('articleId')->nullable();
            $table->integer('solutionId')->nullable();
            $table->integer('parentId')->default(0);
            $table->text('content');
            $table->dateTime('publishTime');
            $table->engine = 'MyISAM';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Comments');
    }
}
