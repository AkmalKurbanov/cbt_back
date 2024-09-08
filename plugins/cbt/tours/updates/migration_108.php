<?php namespace Cbt\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration108 extends Migration
{
    public function up()
    {
  Schema::create('cbt_tours_tury', function($table)
{                 
     $table->id();
        $table->integer('category_id');
        $table->foreign('category_id')->references('id')->on('categorys')->onDelete('cascade');
        $table->string('name');
        $table->string('slug');
        $table->double('price');
        $table->integer('qty');
        $table->text('description');
        $table->timestamps();
});
    }

    public function down()
    {
        Schema::dropIfExists('cbt_tours_tury');
    }
}