<?php namespace Cbt\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtToursTury10 extends Migration
{
    public function up()
{
    Schema::table('cbt_tours_tury', function($table)
    {
        $table->integer('sort_order')->default(1);
    });
}

public function down()
{
    Schema::table('cbt_tours_tury', function($table)
    {
        $table->dropColumn('sort_order');
    });
}
}
