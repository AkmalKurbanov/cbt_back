<?php namespace Cbt\Rent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteCbtRentPriceList extends Migration
{
    public function up()
{
    Schema::dropIfExists('cbt_rent_price_list');
}

public function down()
{
    Schema::create('cbt_rent_price_list', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->text('price_list');
    });
}
}
