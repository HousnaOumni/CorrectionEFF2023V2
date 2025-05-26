<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class EmployeController extends Controller
{
    public function AfficherListeEmployes() {
        $employes = Employe::with('departement')->withCount(['materiels'])->get();
        return view('employes', compact('employes'));
    }

    public function ConsulterDetailsMateriels($id) {
        // NB : 'affectations.materiel'
        //Employe a plusieurs Affectation → via affectations()
        //Chaque Affectation est liée à un Materiel → via materiel()
        $employe = Employe::with(['materiels' => function ($query) {
            $query->orderBy('dateDebutUtilisation', 'desc');
        }])->findOrFail($id);
        return view('details', compact('employe'));
    }

}
