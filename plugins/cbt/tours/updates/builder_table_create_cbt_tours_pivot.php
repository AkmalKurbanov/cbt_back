<?php namespace Cbt\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCbtToursPivot extends Migration
{
    public function up()
{
    Schema::create('cbt_tours_pivot', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
    });
}

public function down()
{
    Schema::dropIfExists('cbt_tours_pivot');
}
}
