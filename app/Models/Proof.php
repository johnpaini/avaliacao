<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Proof extends Eloquent
{
    
 protected  $primaryKey = 'prova_id' ;
 protected $table =  'proofs';
 protected $fillable =  array('tipo_de_prova', 'user_id');

}
