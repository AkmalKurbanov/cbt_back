<?php namespace Cbt\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtToursCategories2 extends Migration
{
    public function up()
{
    Schema::table('cbt_tours_categories', function($table)
    {
        $table->dropColumn('desc');
    });
}

public function down()
{
    Schema::table('cbt_tours_categories', function($table)
    {
        $table->text('desc')->nullable();
    });
}
}
