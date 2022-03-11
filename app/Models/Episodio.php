<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['url','personaje_id'];

    public function personaje()
    {
        return $this->belongsTo(Personaje::class);
    }
}
