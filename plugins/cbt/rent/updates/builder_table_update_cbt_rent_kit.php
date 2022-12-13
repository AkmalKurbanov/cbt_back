<?php namespace Cbt\Rent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtRentKit extends Migration
{
    public function up()
{
    Schema::table('cbt_rent_kit', function($table)
    {
        $table->boolean('is_active');
    });
}

public function down()
{
    Schema::table('cbt_rent_kit', function($table)
    {
        $table->dropColumn('is_active');
    });
}
}
