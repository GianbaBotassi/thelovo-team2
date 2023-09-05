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
        Schema::create('restaurant_typology', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreignId('restaurant_id')->constrained();
            $table->foreignId('typology_id')->constrained();
        });
    }




    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restaurant_typology', function (Blueprint $table) {
            $table->dropForeign('restaurant_typology_restaurant_id_foreign');
            $table->dropForeign('restaurant_typology_typology_id_foreign');

            $table->dropColumn('restaurant_id');
            $table->dropColumn('typology_id');
        });

        Schema::dropIfExists('restaurant_typology');
    }
};
