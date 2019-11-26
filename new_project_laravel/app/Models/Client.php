<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

    protected $table="client";

    protected $fillable=['id','nom', 'prenom',
    'sexe', 'mail', 'psw'];

    public function vehicules()
    {
    return $this->belongsToMany(Vehicule:class);
    }

}


?>
