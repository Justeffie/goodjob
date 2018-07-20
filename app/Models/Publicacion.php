<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Publicacion;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;


class Publicacion extends Model
{
    protected $table = 'publicaciones';

public function publicacion() {
  return $this->hasMany(Publicacion::class, 'id_usuario', 'id');
  }
}
