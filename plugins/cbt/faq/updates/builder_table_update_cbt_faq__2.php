<?php namespace Cbt\Faq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtFaq2 extends Migration
{
    public function up()
{
    Schema::table('cbt_faq_', function($table)
    {
        $table->smallInteger('is_active')->default(1)->change();
    });
}

public function down()
{
    Schema::table('cbt_faq_', function($table)
    {
        $table->smallInteger('is_active')->default(null)->change();
    });
}
}
