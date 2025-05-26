<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technicien extends Model
{
    use HasFactory;
    protected $primaryKey ='codeTech';
    public $incrementing = false;
    //protected $table = "technicien";
    // php artisan make:migration create_technicien_table
    // php artisan make:migration createTechnicienTable

    protected $fillable = ['codeTech','nomTech','Tel'];

    /* Un technicien peut avoir plusieurs interventions */
    // NB : syntaxe hasMany(ModelCible::class, 'cle_etrangere', 'cle_locale')

    public function interventions(){
        return $this->hasMany(Intervention::class,'codeTech','codeTech');
    }
}
