<?php namespace Cbt\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCbtToursTury extends Migration
{
    public function up()
{
    Schema::create('cbt_tours_tury', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('title')->nullable();
        $table->string('slug')->nullable();
        $table->text('desc')->nullable();
        $table->string('duration')->nullable();
        $table->string('difficulty')->nullable();
        $table->string('season')->nullable();
        $table->text('attraction')->nullable();
        $table->text('requirement')->nullable();
        $table->boolean('is_active');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('cbt_tours_tury');
}
}
