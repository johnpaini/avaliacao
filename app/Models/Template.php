<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Template extends Eloquent
{
    
 protected  $primaryKey = 'gabarito_id' ;
 protected $table =  'templates';
  protected $fillable =  array('questao_id', 'subitem_id', 'resposta');


    public function Question()
    {
        return $this->belongsTo('Question');
    }
    public function Subitem()
    {
        return $this->belongsTo('Subitem');
    }


}
