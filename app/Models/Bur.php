<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bur extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function  category(){
        return $this->belongsTo(Burcat::class, 'category_id','id');

    }
    public function invs(){
        return $this->belongsToMany(Inv::class, 'bur_invs', 'bur_id', 'inv_id');
    }
}
