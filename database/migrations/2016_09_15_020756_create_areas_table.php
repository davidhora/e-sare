<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('areas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 45);
            $table->integer('fk_departamento')->unsigned();
            $table->foreign('fk_departamento')->references('id')->on('departamentos');
            $table->integer('fk_usuario')->unsigned();
            $table->foreign('fk_usuario')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('areas');
    }

}
