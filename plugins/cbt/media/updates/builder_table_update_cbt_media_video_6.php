<?php namespace Cbt\Media\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtMediaVideo6 extends Migration
{
    public function up()
{
    Schema::table('cbt_media_video', function($table)
    {
        $table->string('preview')->nullable();
    });
}

public function down()
{
    Schema::table('cbt_media_video', function($table)
    {
        $table->dropColumn('preview');
    });
}
}
