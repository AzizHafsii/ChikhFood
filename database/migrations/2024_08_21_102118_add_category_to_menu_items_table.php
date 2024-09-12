<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryToMenuItemsTable extends Migration
{
    public function up()
    {
        Schema::table('menu_items', function (Blueprint $table) {
            $table->string('category')->nullable(); // Add the category column
        });
    }

    public function down()
    {
        Schema::table('menu_items', function (Blueprint $table) {
            $table->dropColumn('category'); // Drop the category column if needed
        });
    }
}