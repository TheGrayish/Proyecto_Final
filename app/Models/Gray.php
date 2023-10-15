<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gray extends Model
{
    use HasFactory;
    
    public function requerimientos()
    {   
            
            return $this->hasMany(Requerimiento::class);
    }
}
