<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'datakategori';
    protected $primaryKey = 'kategoriid';
    protected $fillable = [
      'kategoriid', 'namakategori'
      ];
    public $timestamps = false;
}
