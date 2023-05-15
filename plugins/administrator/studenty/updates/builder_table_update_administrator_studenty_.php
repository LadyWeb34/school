<?php namespace Administrator\Studenty\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAdministratorStudenty extends Migration
{
    public function up()
    {
        Schema::table('administrator_studenty_', function($table)
        {
            $table->text('image');
        });
    }
    
    public function down()
    {
        Schema::table('administrator_studenty_', function($table)
        {
            $table->dropColumn('image');
        });
    }
}
