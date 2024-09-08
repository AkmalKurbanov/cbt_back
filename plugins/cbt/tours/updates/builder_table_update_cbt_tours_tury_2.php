<?php namespace Cbt\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtToursTury2 extends Migration
{
    public function up()
{
    Schema::table('cbt_tours_tury', function($table)
    {
        $table->string('sdsadsa');
    });
}

public function down()
{
    Schema::table('cbt_tours_tury', function($table)
    {
        $table->dropColumn('sdsadsa');
    });
}
}
