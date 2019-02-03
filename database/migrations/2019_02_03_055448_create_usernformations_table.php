<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsernformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_UserInf');
            $table->string('nick');
            $table->integer('age');
            $table->integer('dni');
            $table->double('height');
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
        Schema::dropIfExists('usernformations');
    }
}
