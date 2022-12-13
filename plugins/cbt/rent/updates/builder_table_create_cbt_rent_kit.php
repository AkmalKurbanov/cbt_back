<?php namespace Cbt\Rent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCbtRentKit extends Migration
{
    public function up()
{
    Schema::create('cbt_rent_kit', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('title')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('cbt_rent_kit');
}
}
