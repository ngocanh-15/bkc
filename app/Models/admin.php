<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class admin extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = ['id','name','email','password','phone','address','admin'];

    protected $hidden = ['password'];
}
