<?php namespace Cbt\Rent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtRentPriceList extends Migration
{
    public function up()
{
    Schema::rename('cbt_rent_', 'cbt_rent_price_list');
}

public function down()
{
    Schema::rename('cbt_rent_price_list', 'cbt_rent_');
}
}
