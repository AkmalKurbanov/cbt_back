<?php namespace Cbt\Media\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtMediaVideo8 extends Migration
{
    public function up()
{
    Schema::table('cbt_media_video', function($table)
    {
        $table->renameColumn('preview', 'img');
    });
}

public function down()
{
    Schema::table('cbt_media_video', function($table)
    {
        $table->renameColumn('img', 'preview');
    });
}
}
