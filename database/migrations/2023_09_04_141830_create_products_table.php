<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string("nome");
            $table->string("descrizione")->nullable();
            $table->string("ingredienti")->nullable();
            $table->decimal("prezzo");
            $table->tinyInteger("is_visible")->default(1);
            $table->tinyInteger("is_delete")->default(0);
            $table->string("image")->nullable();

            $table->foreignId("restaurant_id")->constrained();

            // Inserito DB::raw perchè importava in db timestamp null
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table("products", function (Blueprint $table) {
            $table->dropForeign('products_restaurant_id_foreign');
            $table->dropColumn("restaurant_id");
        });

        Schema::dropIfExists('products');
    }
};
