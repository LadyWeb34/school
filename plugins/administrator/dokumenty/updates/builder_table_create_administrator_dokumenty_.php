<?php namespace Administrator\Dokumenty\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateAdministratorDokumenty extends Migration
{
    public function up()
    {
        Schema::create('administrator_dokumenty_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('file');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('administrator_dokumenty_');
    }
}
