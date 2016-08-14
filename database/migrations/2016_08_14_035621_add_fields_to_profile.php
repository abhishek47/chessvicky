<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('profiles', function($table) {
            $table->integer('games_won')->default(0);
            $table->integer('games_lost')->default(0);
            $table->integer('games_drawn')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('profiles', function($table) {
            $table->drop_column('games_won');
            $table->drop_column('games_lost');
            $table->drop_column('games_drawn');
        });
    }
}
