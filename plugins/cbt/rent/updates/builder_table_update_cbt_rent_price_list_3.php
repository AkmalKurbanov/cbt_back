<?php namespace Cbt\Rent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtRentPriceList3 extends Migration
{
    public function up()
{
    Schema::table('cbt_rent_price_list', function($table)
    {
        $table->string('title')->nullable();
    });
}

public function down()
{
    Schema::table('cbt_rent_price_list', function($table)
    {
        $table->dropColumn('title');
    });
}
}
