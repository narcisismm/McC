<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Students', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('userName',20)->unique();
            $table->string('email',255)->unique();
            $table->string('password',20);
            $table->string('school',50);
            $table->string('avatar',255);
            $table->string('grade',10);
            $table->text('introduction');
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
        Schema::drop('Students');
    }
}
