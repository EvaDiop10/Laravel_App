<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietes', function (Blueprint $table) {
        $table->id();
            $table->string('nom_propriete');
            $table->string('superficie');
            $table->integer('nombre_etage');
            $table->string('montant');
            $table->string('adresse_propriete');
            $table->boolean('statut');
            $table->unsignedBigInteger('typeproprietes_id');
            $table->foreign('typeproprietes_id')->references('id')->on('typeproprietes');
            $table->timestamp('last_used_at')->nullable();
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
        //
    }
};
