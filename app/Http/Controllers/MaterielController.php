<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiel;

class MaterielController extends Controller
{
    public function AfficherListeMateriels() {
        $materiels = Materiel::all();
        //$materiels = Materiel::with('employes')->get();
        return view('index', compact('materiels'));
    }

    public function create() {

        return view('create');
    }
    public function AjouterMateriel(Request $request) {
        $request->validate([
            'marque' => 'required|string|max:255',
            'categorie' => 'required|string|max:255',
            'dateDebutUtilisation' => 'required|date',
        ]);
        Materiel::create($request->all());
        return redirect()->route('materiels.index')->with('success', 'Matériel ajouté avec succès.');
    }

    public function SupprimerMateriel($id) {
        Materiel::destroy($id);
      /*   $materiel = Materiel::findOrFail($id);
        $materiel->delete() */
        return redirect()->route('materiels.index')->with('success', 'Matériel supprimé avec succès.');
    }

}
