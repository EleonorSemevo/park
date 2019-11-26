<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model {

    protected $table="vehicule";

    protected $fillable=['matricule','marque', 'nom',
    'etat'];

public function clients()
{
return this->belongsToMaNY(Client:class);
}
}

?>
