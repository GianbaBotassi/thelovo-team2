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

            $table-> string("nome", 64);
            $table-> string("indirizzo", 128);
            $table-> string("telefono", 20);
            $table-> string("email", 64);
            $table-> string("note") -> nullable();
            $table-> string("status", 16);
            $table-> date("data");
            $table-> decimal("totale");

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
        Schema::dropIfExists('orders');
    }
};
