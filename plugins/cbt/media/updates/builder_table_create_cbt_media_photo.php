<?php namespace Cbt\Media\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCbtMediaPhoto extends Migration
{
    public function up()
{
    Schema::create('cbt_media_photo', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->text('title');
        $table->smallInteger('desc');
    });
}

public function down()
{
    Schema::dropIfExists('cbt_media_photo');
}
}
