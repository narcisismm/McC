<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableQuestionWebs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('QuestionWebs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('questionId');
            $table->string('webUrl',255);
            $table->string('webName',100);
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
        Schema::drop('QuestionWebs');
    }
}
