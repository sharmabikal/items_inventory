<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->timestamps();
            $table->string('items_name');
            $table->string('items_quantity');
            $table->string('desk_officer');
            $table->string('entry_date');
            $table->unsignedBigInteger('item_category_id');
            $table->foreign('item_category_id')->references('id')->on('category')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
