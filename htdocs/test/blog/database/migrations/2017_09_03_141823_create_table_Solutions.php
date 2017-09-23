<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSolutions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Solutions', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('collectNum');
            $table->integer('likeNum');
            $table->integer('userId');
            $table->string('fromWeb',255)->nullable();
            $table->text('content');
            $table->text('code');
            $table->timestamps();
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
        Schema::drop('Solutions');
    }
}
