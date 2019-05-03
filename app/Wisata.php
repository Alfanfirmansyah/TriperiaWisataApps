<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kategori;
use App\Lokasi;
class Wisata extends Model
{
    protected $table = 'datawisata';
    protected $primaryKey = 'wisataid';
    protected $fillable = [
      'wisataid', 'namawisata', 'deskripsiwisata', 'gambar', 'latitude', 'longitude', 'embedmaps', 'lokasi', 'kategoriid_fk', 'wilayahid_fk', 'created_by'
      ];
    public $timestamps = false;

    public function Kategori()
    {
      return $this->belongsTo(Kategori::class, 'kategoriid_fk', 'kategoriid');
    }

    public function Lokasi()
    {
      return $this->belongsTo(Lokasi::class, 'wilayahid_fk', 'datawilayahid');
    }

   
}
