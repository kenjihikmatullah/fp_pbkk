<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSnapshots extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_snapshots', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->text('description')->nullable();
            $table->smallInteger('weight');
            $table->smallInteger('stock')->default(0);
            $table->smallInteger('quantity')->default(1);
            $table->timestamps();

            $table->foreignId('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');

            $table->foreignId('order_id')
                ->references('id')
                ->on('orders')
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
        Schema::dropIfExists('product_snapshots');
    }
}
