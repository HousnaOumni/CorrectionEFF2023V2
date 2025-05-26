<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    use HasFactory;
    protected $fillable = ['codeMat','codeEmp','dateDebutAffectation','dateFinAffectation'];

     /* Relation : cette affectation appartient à un employé */
    public function employe(){
        return $this->belongsTo(Employe::class, 'codeEmp','codeEmp');
        // 'codeEmp' = clé étrangère dans cette table
        // 'codeEmp' = clé primaire dans la table 'employes'
    }

    /* Relation : cette affectation concerne un matériel */
    public function materiel(){
        return $this->belongsTo(Materiel::class, 'codeMat','codeMat');
    }

}
