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
            $table->float('dimension_x');
            $table->float('dimension_y');
            $table->float('price');
            $table->enum('status', ['Pending', 'Completed', 'Cancelled'])->default('Pending');
            $table->enum('method_of_receiving', ['Pick-Up', 'Delivery']);
        });

        DB::table('orders')->insert([
            'client_name' => 'sean lim',
            'client_email' => 'sean@mail.com',
            'photo' => 'stringforimagedata',
            'product' => 'A4',
            'quantity' => 10,
            'dimension_x' => 21,
            'dimension_y' => 29.7,
            'price' => 0.00,
            'status' => 'Pending',
            'method_of_receiving' => 'Pick-Up',
        ]);
        DB::table('orders')->insert([
            'client_name' => 'sean lim',
            'client_email' => 'sean@mail.com',
            'photo' => 'stringforimagedata',
            'product' => 'A4',
            'quantity' => 10,
            'dimension_x' => 21,
            'dimension_y' => 29.7,
            'price' => 0.00,
            'status' => 'Completed',
            'method_of_receiving' => 'Pick-Up',
        ]);
        DB::table('orders')->insert([
            'client_name' => 'sean lim',
            'client_email' => 'sean@mail.com',
            'photo' => 'stringforimagedata',
            'product' => 'A4',
            'quantity' => 10,
            'dimension_x' => 21,
            'dimension_y' => 29.7,
            'price' => 0.00,
            'status' => 'Cancelled',
            'method_of_receiving' => 'Pick-Up',
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
