<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $table = "artist"; 
   
    protected $primaryKey = 'artist_id'; 
   
    protected $fillable = ['artist_id', 'artist_name'];

    public function album() {
        return $this->hasMany(Album::class);
    }
}
