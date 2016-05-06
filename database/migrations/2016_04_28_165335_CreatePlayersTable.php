<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayersTable extends Migration
{
    /**
      * Run the migrations.
      *
      * @return void
      */
     public function up()
     {
         Schema::create('players', function (Blueprint $table) {
             $table->increments('id')->index();
             $table->string('name');
             $table->string('position');
             $table->string('college');
             $table->integer('height');
             $table->integer('weight');
             $table->float('speed')->nullable();
             $table->longText('notes');
             $table->json('urls')->default('{}');
             $table->boolean('visited')->default(false);
             $table->integer('projected')->default(7);
             $table->boolean('drafted')->default(false);
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
        Schema::drop('players');
    }
}
