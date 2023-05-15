<?php namespace Administrator\Studenty\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAdministratorStudenty2 extends Migration
{
    public function up()
    {
        Schema::table('administrator_studenty_', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('administrator_studenty_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
