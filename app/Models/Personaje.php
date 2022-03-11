<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    use HasFactory;

    protected $fillable = ['genero','especie', 'episodio_id', 'nombre'];

    public function episodio()
    {
        return $this->hasMany(Episodio::class);
    }

}
