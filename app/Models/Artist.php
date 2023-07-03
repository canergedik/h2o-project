<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Song;
class Artist extends Model {
    use HasFactory;
    protected $table = 'artist';



    public function getTotalSongsAttribute(){
        /**
         * Matches records with id in Article table and artist_id in Song table with HasOne method
         * returns the sum of matching records

         * */

        return $this->hasOne(Song::class,'artist_id','id')->count();

    }


}