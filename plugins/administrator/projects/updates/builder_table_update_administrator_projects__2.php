<?php namespace Administrator\Projects\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAdministratorProjects2 extends Migration
{
    public function up()
    {
        Schema::table('administrator_projects_', function($table)
        {
            $table->string('color');
        });
    }
    
    public function down()
    {
        Schema::table('administrator_projects_', function($table)
        {
            $table->dropColumn('color');
        });
    }
}
