<?php namespace Cbt\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtToursTury14 extends Migration
{
    public function up()
{
    Schema::table('cbt_tours_tury', function($table)
    {
        $table->string('title');
    });
}

public function down()
{
    Schema::table('cbt_tours_tury', function($table)
    {
        $table->dropColumn('title');
    });
}
}
