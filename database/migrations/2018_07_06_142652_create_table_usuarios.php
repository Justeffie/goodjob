<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->rememberToken();
          $table->string('name',100);
          $table->string('apellido', 100);
          $table->string('usuario', 200);
          $table->string('email', 200);
          $table->string('password', 200);
          $table->date('nacimiento');
          $table->string('foto_perfil', 200)->nullable();
        });
        }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
