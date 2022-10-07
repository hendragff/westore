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
        Schema::create('transaction_detail', function(Blueprint $table){
            $table->id();
            $table->integer('trans_id');//nyambung ke transaction ngikut id
            $table->integer('item_id');//nyambung ke items id
            $table->integer('item_qtt');//item quantity
            $table->integer('trans_desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
