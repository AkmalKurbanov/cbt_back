<?php namespace Cbt\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtToursTury6 extends Migration
{
    public function up()
{
    Schema::table('cbt_tours_tury', function($table)
    {
        $table->string('place', 10)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
    });
}

public function down()
{
    Schema::table('cbt_tours_tury', function($table)
    {
        $table->smallInteger('place')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
    });
}
}