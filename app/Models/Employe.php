<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $primaryKey = 'codeEmp';
    public $incrementing = false;
    protected $fillable = ['codeEmp','nomEmp','prenomEmp','dateEmbauche','dateNaissance','poste','codeDep'];

     /* Un employé appartient à un département */
    public function departement(){
        return $this->belongsTo(Departement::class,'codeDep','codeDep');
    }

     /* Un employé peut être affecté à plusieurs matériels */
    public function materiels(){
        return $this->belongsToMany(Materiel::class,'affectations','codeEmp','codeMat')->withPivot('dateDebutAffectation','dateFinAffectation');
    }

      /* Un employé peut avoir plusieurs interventions */
    // NB : syntaxe hasMany(ModelCible::class, 'cle_etrangere', 'cle_locale')

    public function interventions(){
        return $this->hasMany(Intervention::class,'codeEmp','codeEmp');
    }

     // Rappel
    /* return $this->belongsToMany(
        ModèleCible::class,     // Le modèle lié
        'nom_table_pivot',      // (optionnel) nom de la table pivot
        'cle_etrangere_locale', // (optionnel) clé étrangère du modèle actuel dans la table pivot
        'cle_etrangere_cible'   // (optionnel) clé étrangère du modèle lié dans la table pivot
    )->withPivot('autres_champs'); // (optionnel) pour accéder à des colonnes supplémentaires de la table pivot*/
}
