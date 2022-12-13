<?php namespace Cbt\Rent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCbtRentPriceList extends Migration
{
    public function up()
{
    Schema::create('cbt_rent_price_list', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->text('price_list');
    });
}

public function down()
{
    Schema::dropIfExists('cbt_rent_price_list');
}
}
