<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
     protected $table = 'datawilayah';
    protected $primaryKey = 'datawilayahid';
    protected $fillable = [
      'datawilayahid', 'namawilayah'
      ];
}
