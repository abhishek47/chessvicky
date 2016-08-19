<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivegamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livegames', function (Blueprint $table) {
            $table->increments('id');
            $table->string('game_id');
            $table->string('user1_id');
            $table->string('user2_id');
            $table->integer('winner_id')->default(0);
            
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
        Schema::drop('livegames');
    }
}
