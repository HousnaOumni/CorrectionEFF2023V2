<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterielController;
use App\Http\Controllers\EmployeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/materiels', [MaterielController::class, 'AfficherListeMateriels'])->name('materiels.index');
Route::post('/materiels', [MaterielController::class, 'AjouterMaterielstore'])->name('materiels.store');
Route::delete('/materiels/{id}', [MaterielController::class, 'SupprimerMateriel'])->name('materiels.destroy'); //obligatoire
Route::get('/materiels/create', [MaterielController::class, 'create'])->name('materiels.create'); //obligatoire

Route::get('/employes', [EmployeController::class, 'AfficherListeEmployes'])->name('employes.index');
Route::get('/employes/{id}/details', [EmployeController::class, 'ConsulterDetailsMateriels'])->name('employes.show');
