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
        Schema::create('affectations', function (Blueprint $table) {
            $table->string('codeMat');
            $table->integer('codeEmp');
            $table->date('dateDebutAffectation');
            $table->date('dateFinAffectation');
            $table->primary(['codeMat','codeEmp','dateDebutAffectation']);
            $table->foreign('codeMat')->references('codeMat')->on('Materiel')->onDelete('cascade');
            $table->foreign('codeEmp')->references('codeEmp')->on('Employe')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affectations');
    }
};
