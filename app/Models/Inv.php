<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inv extends Model
{
    use HasFactory;
    public function burs()
    {
        return $this->belongsToMany(Bur::class, 'bur_invs', 'inv_id', 'bur_id');
    }
}
