<?php namespace Cbt\Faq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCbtFaq extends Migration
{
    public function up()
{
    Schema::table('cbt_faq_', function($table)
    {
        $table->smallInteger('is_active');
    });
}

public function down()
{
    Schema::table('cbt_faq_', function($table)
    {
        $table->dropColumn('is_active');
    });
}
}
