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
        Schema::create('interventions', function (Blueprint $table) {
            $table->id('codeInter');
            $table->date('dateInter');
            $table->integer('codeEmp');
            $table->foreign('codeEmp')->references('codeEmp')->on('employes')->onDelete('cascade');
            $table->string('detailsInter');
            $table->integer('codeTech');
            $table->foreign('codeTech')->references('codeTech')->on('techniciens')->onDelete('cascade');
            $table->string('syntheseReparation');
            $table->date('dateFinIntervention');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interventions');
    }
};
