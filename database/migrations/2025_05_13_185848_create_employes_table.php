<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id('codeEmp');
            $table->string('nomEmp');
            $table->string('prenomEmp');
            $table->date('dateEmbauche');
            $table->date('dateNaissance');
            $table->string('poste');
            $table->integer('codeDep');
            $table->foreign('codeDep')->references('codeDep')->on('departements')->onDelete('cascade'); // suppression en cascade
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
