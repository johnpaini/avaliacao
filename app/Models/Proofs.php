<?php
/**
 * Created by PhpStorm.
 * User: John Paini
 * Date: 19/08/2016
 * Time: 21:12
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
class Proofs extends Eloquent
{
    protected  $primaryKey = 'prova_id' ;
    protected $table =  'proofs';
    protected $fillable =  array('titulo','tipo_de_prova', 'user_id');

}