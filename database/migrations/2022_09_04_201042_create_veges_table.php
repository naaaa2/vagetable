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
        Schema::create('veges', function (Blueprint $table) {
            $table->bigIncrements('vege_id');
            $table->boolean('vege_name')->length(30);
            $table->date('date_purchase');
            $table->boolean('method')->length(2);
            $table->boolean('quantity');
        });

        Schema::table('veges', function (Blueprint $table) {
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
        Schema::dropIfExists('veges');
        Schema::table('veges', function(Blueprint $table){
            $table->dropForeign('veges_user_id_foreign');
            $table->dropColum('user_id');
        });
    }

    public $timestamps = false;

};
