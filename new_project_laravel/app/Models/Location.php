<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {

    protected $table="location";

    protected $fillable=['num',
    'idCli',
    'matricule',
     'date_deb',
     'date_fin',];

}

?>
