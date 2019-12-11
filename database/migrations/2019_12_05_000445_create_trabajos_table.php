<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name', 100);
            $table->string('icono', 100);
            $table->string('empresa', 100);
            $table->text('description');
            $table->timestamp('inicio', 0)->nullable();
            $table->timestamp('fin', 0)->nullable();

            $table->string('color', 100);
            $table->unsignedTinyInteger('status');

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
        Schema::dropIfExists('trabajos');
    }
}
