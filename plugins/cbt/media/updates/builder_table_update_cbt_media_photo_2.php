<?php namespace Cbt\Media\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtMediaPhoto2 extends Migration
{
    public function up()
{
    Schema::table('cbt_media_photo', function($table)
    {
        $table->text('title')->nullable()->change();
        $table->smallInteger('desc')->nullable()->change();
    });
}

public function down()
{
    Schema::table('cbt_media_photo', function($table)
    {
        $table->text('title')->nullable(false)->change();
        $table->smallInteger('desc')->nullable(false)->change();
    });
}
}
