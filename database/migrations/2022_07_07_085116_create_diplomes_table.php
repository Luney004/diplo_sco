<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\PseudoTypes\True_;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplomes', function (Blueprint $table) {
            $table->id();
            $table-> string("niveau",20);
            $table->string("mois_obt");
            $table->integer("annee_obt",false,false);
            $table->string("serie",5);
            $table->string("prenom",50);
            $table->string("nom",50);
            $table->string("sexe",15);
            $table->integer("num_table",false,false);
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
        Schema::dropIfExists('diplomes');
    }
};
