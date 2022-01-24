<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mash extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function  brands(){
        return $this->belongsTo(Brand::class, 'brands_id','id');

    }
}
