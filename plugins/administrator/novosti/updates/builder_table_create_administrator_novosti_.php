<?php namespace Administrator\Novosti\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateAdministratorNovosti extends Migration
{
    public function up()
    {
        Schema::create('administrator_novosti_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('image');
            $table->string('slug');
            $table->boolean('status');
            $table->text('content');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('administrator_novosti_');
    }
}
