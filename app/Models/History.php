
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class History extends Eloquent
{
    
 protected  $primaryKey = 'history_id' ;
 protected $table =  'historys';
 protected $fillable =  array('prova_id', 'user_id', 'datacopia');
 
}
