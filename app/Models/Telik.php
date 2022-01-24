<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Telik extends Model
{
    use HasFactory;
    use SoftDeletes;


    public function teliks()
    {
        return $this->belongsTo(Firm::class, 'teliks_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'telik_tags', 'telik_id', 'tag_id');

    }
}
