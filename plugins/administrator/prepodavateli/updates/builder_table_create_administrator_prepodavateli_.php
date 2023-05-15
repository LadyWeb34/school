<?php namespace Administrator\Prepodavateli\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateAdministratorPrepodavateli extends Migration
{
    public function up()
    {
        Schema::create('administrator_prepodavateli_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('position');
            $table->text('image');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('administrator_prepodavateli_');
    }
}
