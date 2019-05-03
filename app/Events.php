<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UserAkun;

class Events extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'eventid';
    protected $fillable = [
    'eventid', 'judulevent', 'juduldeskripsi', 'deskripsi', 'gambar', 'tanggalevent','tanggaleventakhir','created_at', 'updated_at', 'created_by'
      ];

       public function UserAkun()
    {
      return $this->belongsTo(UserAkun::class, 'created_by', 'id');
    }
}
