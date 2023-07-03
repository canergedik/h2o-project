<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;
class Song extends Model
{
     use HasFactory;
     protected $table = 'song';   

    public function getArtist(){
        /**
         * Matches records with id in Article table and artist_id in Song table with HasOne method
         * Returns matching records
         * */
        return $this->hasOne(Artist::class,'id','artist_id');
    }   
}