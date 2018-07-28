<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Models\CategoriasPublicacion;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;


class Publicacion extends Model
{
    protected $table = 'publicaciones';
    protected $fillable = array('imagen', 'descripcion', 'me_gustas', 'id_categoria', 'id_usuario');
    protected $guarded = [];

    public function categorias() {
      return $this->hasOne(CategoriasPublicacion::class, 'id', 'id_categoria');
    }

    /*public function publicacion() {
      return $this->hasMany(Publicacion::class, 'id_usuario', 'id');
    }*/

}
