<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsCompletedToListItemsTable extends Migration
{
    public function up()
    {
        Schema::table('list_items', function (Blueprint $table) {
            $table->integer('is_completed')->default(0);
        });
    }

    public function down()
    {
        Schema::table('list_items', function (Blueprint $table) {
            $table->dropColumn('is_completed');
        });
    }
}
