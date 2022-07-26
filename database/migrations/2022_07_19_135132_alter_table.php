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
        Schema::table('orders', function (Blueprint $table) {
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table
                ->foreign('playing_id')
                ->references('id')
                ->on('playings')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table
                ->foreign('seat_id')
                ->references('id')
                ->on('seats')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('theaters', function (Blueprint $table) {
            $table
                ->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('studios', function (Blueprint $table) {
            $table
                ->foreign('theater_id')
                ->references('id')
                ->on('theaters')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('seats', function (Blueprint $table) {
            $table
                ->foreign('studio_id')
                ->references('id')
                ->on('studios')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('playings', function (Blueprint $table) {
            $table
                ->foreign('film_id')
                ->references('id')
                ->on('films')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table
                ->foreign('theater_id')
                ->references('id')
                ->on('theaters')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table
                ->foreign('studio_id')
                ->references('id')
                ->on('studios')
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
        //
    }
};
