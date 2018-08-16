<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAthletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athletes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre',60);
            $table->string('poids', 45);
            $table->string('taille',45);
            $table->string('rang',45);
            $table->string('categorie',45);
            $table->string('club',60);
            $table->string('champM',45);
            $table->string('champJ',45);
            $table->string('training',45);
            $table->string('image', 45);
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
        Schema::dropIfExists('athletes');
    }
}
