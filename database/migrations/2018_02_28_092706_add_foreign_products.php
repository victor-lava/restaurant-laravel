<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {

            $table->foreign('category')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');

            $table->foreign('manufacturer')
                    ->references('id')
                    ->on('manufacturers')
                    ->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('products', function (Blueprint $table) {

            $table->dropForeign('products_category_foreign');
            $table->dropForeign('products_manufacturer_foreign');

        });

    }
}
