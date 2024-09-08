<?php namespace Cbt\Media\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtMediaVideo extends Migration
{
    public function up()
{
    Schema::table('cbt_media_video', function($table)
    {
        $table->string('preview');
        $table->string('title')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
    });
}

public function down()
{
    Schema::table('cbt_media_video', function($table)
    {
        $table->dropColumn('preview');
        $table->text('title')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
    });
}
}
