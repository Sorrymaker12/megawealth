<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('transaction_id')->primary();
            $table->timestamp('transaction_date');
            $table->uuid('id');
            $table->string('type_of_sales');
            $table->string('building_type');
            $table->integer('price');
            $table->string('location');
            $table->string('image_path');

            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
