<?php namespace Administrator\Prepodavateli\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAdministratorPrepodavateli extends Migration
{
    public function up()
    {
        Schema::table('administrator_prepodavateli_', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('administrator_prepodavateli_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
