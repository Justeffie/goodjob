<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
Use App\Models\Publicacion;

class Amistades extends Model
{
    protected $table = 'amistades';

    public function publicaciones() {
      return $this->hasMany(Publicacion::class, 'id_amigo', 'id');
    }
}
