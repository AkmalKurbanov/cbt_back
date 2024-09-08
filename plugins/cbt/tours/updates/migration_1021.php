<?php namespace Cbt\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration1021 extends Migration
{
      public function up()
    {
        Schema::create('cbt_tours_pivot', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tour_id')->unsigned();
            $table->integer('category_id')->unsigned();
            
            $table->index('tour_id','tour_category_tour_idx');
            $table->index('category_id','tour_category_category_idx');
            
            $table->foreing('tour_id','tour_category_tour_fk')->on('cbt_tours_tury')->references('id');
            $table->foreing('category_id','tour_category_category_fk')->on('cbt_tours_categories')->references('id');
        });
    }

    public function down()
    {
        Schema::drop('cbt_tours_pivot');
    }
}