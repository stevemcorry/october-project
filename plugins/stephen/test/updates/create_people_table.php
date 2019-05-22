<?php namespace Stephen\Test\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePeopleTable extends Migration
{
    public function up()
    {
        Schema::create('stephen_test_people', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->text('first_name');
            $table->text('last_name');
            $table->text('occupation');
            $table->integer('age');
        });
    }

    public function down()
    {
        Schema::dropIfExists('stephen_test_people');
    }
}
