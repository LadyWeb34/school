<?php namespace Administrator\Dokumenty\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAdministratorDokumenty extends Migration
{
    public function up()
    {
        Schema::table('administrator_dokumenty_', function($table)
        {
            $table->boolean('status');
        });
    }
    
    public function down()
    {
        Schema::table('administrator_dokumenty_', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
