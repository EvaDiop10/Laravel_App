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
        Schema::create('proprietaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom')->nullable();
            $table->string('sexe')->nullable();
            $table->string('civilite')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('cni')->unique();
            $table->integer('telephone')->unique();
            $table->string('adresse');
            $table->string('photo')->nullable();
            $table->string('nationalite');
            $table->string('code_proprietaire');
            $table->unsignedBigInteger('type_proprietaires_id');
            $table->foreign('type_proprietaires_id')->references('id')->on('type_proprietaires');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
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
