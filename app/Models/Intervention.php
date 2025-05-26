<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $primaryKey = 'codeInter';
    protected $fillable = ['codeInter','dateInter','codeEmp','detailsInter','codeTech','syntheseReparation','dateFinIntervention'];

    /* L'intervention est liée à un employé */
    public function employe(){
        return $this->belongsTo(Employe::class,'codeEmp','codeEmp');
    }

    /* L'intervention est réalisée par un technicien */
    public function technicien(){
        return $this->belongsTo(Technicien::class,'codeTech','codeTech');
    }
}
