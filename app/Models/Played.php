<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Played extends Model
{
    use HasFactory;

    protected $table = "played"; 
    
    protected $foreignKey = ['artist_name', 'album_name', 'track_name']; 

    protected $fillable = ['artist_name', 'album_name', 'track_name', 'played_name'];
}

