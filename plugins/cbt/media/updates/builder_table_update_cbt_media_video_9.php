<?php namespace Cbt\Media\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtMediaVideo9 extends Migration
{
    public function up()
{
    Schema::table('cbt_media_video', function($table)
    {
        $table->dropColumn('img');
    });
}

public function down()
{
    Schema::table('cbt_media_video', function($table)
    {
        $table->string('img', 255)->nullable();
    });
}
}
