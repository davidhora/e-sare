<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 45);
            $table->string('sigla', 10);
            $table->string('email', 30);
            $table->string('campus', 25);
            $table->integer('fk_secretario')->unsigned();
            $table->foreign('fk_secretario')->references('id')-> on('secretarios');
            $table->integer('fk_usuario')->unsigned();
            $table->foreign('fk_usuario')->references('id')-> on('users');
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
        Schema::drop('departamentos');
    }
}
