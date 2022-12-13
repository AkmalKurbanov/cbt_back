<?php namespace Cbt\Rent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtRent extends Migration
{
    public function up()
{
    Schema::table('cbt_rent_', function($table)
    {
        $table->text('price_list')->nullable()->change();
    });
}

public function down()
{
    Schema::table('cbt_rent_', function($table)
    {
        $table->text('price_list')->nullable(false)->change();
    });
}
}
