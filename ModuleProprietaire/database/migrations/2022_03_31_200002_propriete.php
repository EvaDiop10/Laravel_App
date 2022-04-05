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
            $table->unsignedBigInteger('type_proprietes_id');
            $table->foreign('type_proprietes_id')->references('id')->on('type_proprietes');
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
