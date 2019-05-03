<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Wisata;

class GambarWisata extends Model
{
     protected $table = 'gambarwisata';
    protected $primaryKey = 'gambarwisataid';
    protected $fillable = [
      'gambarwisataid', 'deskripsinama', 'gambarwisata', 'wisataid_fk'
      ];
    public $timestamps = false;

    public function Wisata()
    {
      return $this->belongsTo(Wisata::class, 'wisataid_fk', 'wisataid');
    }
}
