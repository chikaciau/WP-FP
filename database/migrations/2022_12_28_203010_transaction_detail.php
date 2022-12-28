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
        Schema::create('transactionDetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('product_id')->nullable()
            ->constrained()
            ->onUpdate('cascade')
            ->nullOnDelete();
            $table->string('product_name');
            $table->Integer('qty');
            $table->bigInteger('sub_total');
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
        Schema::dropIfExists('transactionDetails');
    }
};
