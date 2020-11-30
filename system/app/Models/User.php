<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $table = 'user';
    use HasFactory, Notifiable;

    function kategori(){
    	return $this->hasMany(kategori::class, 'id_user');
    }
    function produk(){
    	return $this->hasMany(produk::class, 'id_user');
    }

}
