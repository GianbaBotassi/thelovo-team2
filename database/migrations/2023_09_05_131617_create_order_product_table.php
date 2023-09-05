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
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // creazione delle chiavi esterne all'interno della tabella ponte
            $table->foreignId('order_id')->constrained();
            $table->foreignId('product_id')->constrained();

            // aggiunta della colonna quantità del prodotto, come default 1,
            // a seconda dell'esigenza al massimo si aggiunge uno
            $table->integer('quantity')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // drop delle chiavi esterne e delle relative colonne
        Schema::table('order_product', function (Blueprint $table) {
            $table->dropForeign('order_product_order_id_foreign');
            $table->dropForeign('order_product_product_id_foreign');

            $table->dropColumn('order_id');
            $table->dropColumn('product_id');
        });

        Schema::dropIfExists('order_product');
    }
};
