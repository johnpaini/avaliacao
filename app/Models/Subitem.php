<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Subitem extends Eloquent
{
    
 protected  $primaryKey = 'subitem_id' ;
 protected $table =  'subitemofquestion';
 protected $fillable =  array('questao_id', 'descricao');

    public function Question(){
        return $this->BelongsTo('Question');
    }

}
