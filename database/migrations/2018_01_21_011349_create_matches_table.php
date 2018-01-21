<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('winning_deck_id')->unsigned();
            $table->integer('losing_deck_id')->unsigned();
            $table->integer('winning_deck_games');
            $table->integer('losing_deck_games');
            $table->string('notes')->nullable();
            $table->string('winning_decklist')->nullable();
            $table->string('losing_decklist')->nullable();
            $table->integer('competition_level')->unsigned();
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
        Schema::dropIfExists('matches');
    }
}
