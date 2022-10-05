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
        Schema::create('shoppings', function (Blueprint $table) {
            $table->bigIncrements('shopping_id');
            $table->string('mustbuy')->length(100)->nullable();
        });

        Schema::table('shoppings', function (Blueprint $table) {
            $table->foreignId('user_id')
                    ->constrained('users')
                    ->onUpdate('cascade')
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
        Schema::dropIfExists('shoppings');
        Schema::table('shoppings', function(Blueprint $table){
            $table->dropForeign('shoppings_user_id_foreign');
            $table->dropColum('user_id');
        });
    }
};
