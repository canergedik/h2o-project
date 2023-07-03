<?php
namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\JsonResponse;

class IndexController extends Controller
{
   public function index():JsonResponse{
    $songs = Song::with('getArtist')->where('genre','pop')->get();
    /**The song and artist tables are combined with the with method and matching records are listed.
     * It works faster and more efficient than the old method.
    */
    foreach ($songs as $song) {
      echo " Song: " . $song->name;
      echo " By Artist: " .$song->getArtist->name ;
      echo " (Artist has ". $song->getArtist->total_songs." total songs)";
      echo "\n";
      }
    return new JsonResponse(['data'=>$songs]);
  
   }
   
}
