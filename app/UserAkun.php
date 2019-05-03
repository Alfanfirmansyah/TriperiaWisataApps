<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAkun extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
    'id', 'name', 'email', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'
      ];
}
