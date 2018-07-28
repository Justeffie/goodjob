<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Publicacion;
use App\Models\Amistades;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Usuario extends Model implements Authenticatable

{
  protected $table = 'users';
  use Notifiable;
  use AuthenticableTrait;



  protected $fillable = array('name', 'apellido', 'usuario', 'email', 'nacimiento','password', 'foto_perfil');

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];

    public function publicacion() {
      return $this->hasMany(Publicacion::class, 'id_usuario', 'id');
    }

    public function amigos() {
      return $this->belongsToMany(Amistades::class,'amistades', 'id_usuario', 'id');
    }
}
