<?php namespace Cbt\Media\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtMediaVideo2 extends Migration
{
    public function up()
{
    Schema::table('cbt_media_video', function($table)
    {
        $table->string('title', 255)->nullable()->change();
        $table->text('desc')->nullable()->change();
        $table->string('link', 255)->nullable()->change();
        $table->string('preview', 255)->nullable()->change();
    });
}

public function down()
{
    Schema::table('cbt_media_video', function($table)
    {
        $table->string('title', 255)->nullable(false)->change();
        $table->text('desc')->nullable(false)->change();
        $table->string('link', 255)->nullable(false)->change();
        $table->string('preview', 255)->nullable(false)->change();
    });
}
}
