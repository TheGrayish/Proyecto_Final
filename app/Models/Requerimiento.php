<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requerimiento extends Model
{
    use HasFactory;
    public $timesamps = false;

    public function gray()
    {
        return $this->belongsTo(Gray::class);
    }
}
