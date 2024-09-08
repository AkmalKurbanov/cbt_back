<?php namespace Cbt\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration106 extends Migration
{
    public function up()
    {
        Schema::create('cbt_tours_categories', function($table)
{
    $table->integer('id')->unsigned();
    $table->string('title')->unsigned();
});
    }

    public function down()
    {
         Schema::drop('cbt_tours_categories');
    }
}