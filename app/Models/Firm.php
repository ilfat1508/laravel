<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
    use HasFactory;
    public function firms(){
        return $this->hasMany(Telik::class, 'teliks_id', 'id');
    }
}
