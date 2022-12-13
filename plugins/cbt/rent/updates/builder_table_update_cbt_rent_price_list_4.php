<?php namespace Cbt\Rent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtRentPriceList4 extends Migration
{
    public function up()
{
    Schema::table('cbt_rent_price_list', function($table)
    {
        $table->dropColumn('price_list');
    });
}

public function down()
{
    Schema::table('cbt_rent_price_list', function($table)
    {
        $table->text('price_list')->nullable();
    });
}
}
