<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'categorie_id','titre','description','image' 
    ];

    public function categorie(){
        return $this->belongsTo('App\Categorie');
    }
}
