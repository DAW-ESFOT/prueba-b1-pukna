<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGenreIdColumnMovie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies',
            function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
    }
}
