<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabilidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilidads', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name', 100);
            $table->string('icono', 100);
            $table->text('link');

            $table->string('color', 100);
            $table->unsignedTinyInteger('orden');
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
        Schema::dropIfExists('habilidads');
    }
}
