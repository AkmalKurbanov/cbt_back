<?php namespace Cbt\Rent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtRentKit2 extends Migration
{
    public function up()
{
    Schema::table('cbt_rent_kit', function($table)
    {
        $table->text('price_list');
    });
}

public function down()
{
    Schema::table('cbt_rent_kit', function($table)
    {
        $table->dropColumn('price_list');
    });
}
}
