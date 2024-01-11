<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameToListItemsTable extends Migration
{
    public function up()
    {
        Schema::table('list_items', function (Blueprint $table) {
            $table->string('name');
        });
    }

    public function down()
    {
        Schema::table('list_items', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }
}
