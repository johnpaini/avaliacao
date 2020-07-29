<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Question extends Eloquent
{
    
 	    protected  $primaryKey = 'questao_id' ;
     	protected $table =  'questions';
 	    protected $fillable =  array('descricao', 'assunto','tipo', 'peso', 'imagem', 'user_id');

	    public function Template()
        {
            return $this->belongsTo('Template');
        }

		//oneMany
		//belongsToMany('Proof','ProfsQueations', 'questao_id', prova_id);
		//belongsTo('Proof')

		//

}

