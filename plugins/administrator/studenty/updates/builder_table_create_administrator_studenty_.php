<?php namespace Administrator\Studenty\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateAdministratorStudenty extends Migration
{
    public function up()
    {
        Schema::create('administrator_studenty_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('position');
            $table->date('year');
            $table->text('content');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('administrator_studenty_');
    }
}
