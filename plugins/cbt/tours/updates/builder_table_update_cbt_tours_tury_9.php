<?php namespace Cbt\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtToursTury9 extends Migration
{
    public function up()
{
    Schema::table('cbt_tours_tury', function($table)
    {
        $table->string('map')->nullable();
    });
}

public function down()
{
    Schema::table('cbt_tours_tury', function($table)
    {
        $table->dropColumn('map');
    });
}
}
