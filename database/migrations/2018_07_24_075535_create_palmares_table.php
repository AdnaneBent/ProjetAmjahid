<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePalmaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palmares', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('annee');
            $table->string('competition', 45);
            $table->string('resultat', 45);
            $table->string('categorie', 45);
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
        Schema::dropIfExists('palmares');
    }
}
