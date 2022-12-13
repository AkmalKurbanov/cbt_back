<?php namespace Cbt\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtToursCategories extends Migration
{
    public function up()
{
    Schema::rename('cbt_tours_', 'cbt_tours_categories');
}

public function down()
{
    Schema::rename('cbt_tours_categories', 'cbt_tours_');
}
}
