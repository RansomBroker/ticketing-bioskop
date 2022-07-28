<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('rating', ['1','2','3']);
            $table->text('synopsis');
            $table->string('genre');
            $table->text('producer');
            $table->text('production');
            $table->text('cast');
            $table->string('img');
            $table->string('url');
            $table->enum('upcoming', ['0','1']);
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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('films');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
};
