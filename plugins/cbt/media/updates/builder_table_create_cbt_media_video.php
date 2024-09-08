<?php namespace Cbt\Media\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCbtMediaVideo extends Migration
{
    public function up()
{
    Schema::create('cbt_media_video', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->text('title');
        $table->text('desc');
        $table->string('link');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('cbt_media_video');
}
}
