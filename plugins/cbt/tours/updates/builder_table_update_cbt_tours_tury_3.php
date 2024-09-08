<?php namespace Cbt\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtToursTury3 extends Migration
{
    public function up()
{
    Schema::table('cbt_tours_tury', function($table)
    {
        $table->string('title', 255)->nullable();
        $table->string('slug', 255)->nullable();
        $table->text('desc')->nullable();
        $table->string('duration', 255)->nullable();
        $table->string('difficulty', 255)->nullable();
        $table->string('season', 255)->nullable();
        $table->text('attraction')->nullable();
        $table->text('requirement')->nullable();
        $table->boolean('is_active');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();
        $table->text('detail_desc')->nullable();
        $table->increments('id')->unsigned()->change();
    });
}

public function down()
{
    Schema::table('cbt_tours_tury', function($table)
    {
        $table->dropColumn('title');
        $table->dropColumn('slug');
        $table->dropColumn('desc');
        $table->dropColumn('duration');
        $table->dropColumn('difficulty');
        $table->dropColumn('season');
        $table->dropColumn('attraction');
        $table->dropColumn('requirement');
        $table->dropColumn('is_active');
        $table->dropColumn('created_at');
        $table->dropColumn('updated_at');
        $table->dropColumn('deleted_at');
        $table->dropColumn('detail_desc');
        $table->increments('id')->unsigned(false)->change();
    });
}
}