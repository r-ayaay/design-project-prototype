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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('client_name', 50);
            $table->string('client_email', 50);
            $table->string('photo');
            $table->string('product');
            $table->string('quantity');
            $table->integer('dimension_x');
            $table->integer('dimension_y');
            $table->float('price');
            $table->string('status');
            $table->string('method_of_recieving');
        });

        DB::table('order')->insert([
            'client_name' => 'sean lim',
            'client_email' => 'sean@mail.com',
            'photo' => '',
            'product' => 'A4',
            'quantity' => '10',
            'dimension_x' => '21',
            'dimension_y' => '29.7',
            'price' => '',
            'status' => 'pending',
            'method_of_recieving' => 'pickup',

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
