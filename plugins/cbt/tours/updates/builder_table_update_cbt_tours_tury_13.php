<?php namespace Cbt\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtToursTury13 extends Migration
{
    public function up()
{
    Schema::table('cbt_tours_tury', function($table)
    {
        $table->renameColumn('title', 'name');
    });
}

public function down()
{
    Schema::table('cbt_tours_tury', function($table)
    {
        $table->renameColumn('name', 'title');
    });
}
}
