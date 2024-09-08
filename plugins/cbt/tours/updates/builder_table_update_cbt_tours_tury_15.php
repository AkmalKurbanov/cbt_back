<?php namespace Cbt\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtToursTury15 extends Migration
{
    public function up()
    {
        Schema::table('cbt_tours_tury', function($table)
        {
            $table->string('title', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('cbt_tours_tury', function($table)
        {
            $table->string('title', 255)->nullable(false)->change();
        });
    }
}
