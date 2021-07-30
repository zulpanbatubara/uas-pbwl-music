<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;

    protected $table = "track"; 
   
    protected $primaryKey = 'track_id'; 
    
    protected $foreignKey = ['artist_name', 'album_name']; 

    protected $fillable = ['track_id', 'track_name', 'artist_name', 'album_name'];
}

