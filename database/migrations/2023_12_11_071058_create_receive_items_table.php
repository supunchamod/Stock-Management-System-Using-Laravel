<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_items', function (Blueprint $table) {
        $table->id();
        $table->string('item_code');
        $table->string('name');
        $table->string('received_by');
        $table->integer('quantity');
        $table->timestamps();

        $table->foreign('item_code')->references('item_code')->on('stocks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receive_items');
    }
};
