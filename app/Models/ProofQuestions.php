<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class ProofQuestions extends Eloquent
{
    
 protected  $primaryKey = 'id' ;
 protected $table =  'proofsquestions';
 protected $fillable =  array('prova_id', 'questao_id');


    public function Question()
    {
        return $this->belongsToMany('Questao_id','Proof', 'questao_id', 'prova_id');
    }
    public function Proof()
    {
        return $this->belongsTo('Proof');
    }


}
