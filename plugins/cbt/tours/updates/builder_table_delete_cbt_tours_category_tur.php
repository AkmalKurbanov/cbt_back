<?php namespace Cbt\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteCbtToursCategoryTur extends Migration
{
    public function up()
{
    Schema::dropIfExists('cbt_tours_category_tur');
}

public function down()
{
    Schema::create('cbt_tours_category_tur', function($table)
    {
        $table->engine = 'InnoDB';
        $table->integer('category_id')->unsigned();
        $table->integer('role_id')->unsigned();
    });
}
}