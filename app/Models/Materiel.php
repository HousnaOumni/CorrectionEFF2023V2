<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;
    protected $primaryKey = 'codeMat';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['codeMat','marque','categorie','dateDebutUtilisation'];

    /* Un matériel peut être affecté à plusieurs employés */
    public function employes(){
        return $this->belongsToMany(Employe::class,'affectations','codeMat','codeEmp')->withPivot('dateDebutAffectation','dateFinAffectation');
    }
}
