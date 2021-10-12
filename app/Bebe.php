<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bebe extends Model
{
    protected $fillable = [
        'nom','prenom','sexe','user_id', 'parent2','contact','dat_naiss'
        ,'debut_fonction','contrat', 'nounou', 'photo' 
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
