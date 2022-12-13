<?php namespace Cbt\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCbtTours extends Migration
{
    public function up()
{
    Schema::create('cbt_tours_', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('title')->nullable();
        $table->string('slug')->nullable();
        $table->boolean('is_active');
        $table->text('desc')->nullable();
        $table->integer('parent_id')->nullable();
        $table->integer('nest_left')->nullable();
        $table->integer('nest_right')->nullable();
        $table->integer('nest_depth')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('cbt_tours_');
}
}
