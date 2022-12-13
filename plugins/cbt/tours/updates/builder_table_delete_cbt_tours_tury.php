<?php namespace Cbt\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteCbtToursTury extends Migration
{
    public function up()
{
    Schema::dropIfExists('cbt_tours_tury');
}

public function down()
{
    Schema::create('cbt_tours_tury', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('title', 255)->nullable();
        $table->string('slug', 255)->nullable();
        $table->text('desc')->nullable();
        $table->string('duration', 255)->nullable();
        $table->string('difficulty', 255)->nullable();
        $table->string('season', 255)->nullable();
        $table->text('attraction')->nullable();
        $table->text('requirement')->nullable();
        $table->boolean('is_active');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();
        $table->text('detail_desc')->nullable();
        $table->string('sdsadsa', 255);
    });
}
}