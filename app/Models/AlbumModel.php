<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AlbumModel extends Model
{
    use HasFactory;

    protected $table = 'album';
    protected $primaryKey = 'albumID';

    protected function getAlbumData($albumID){
        return DB::table('image')->where('albumID', $albumID)->join('user', 'image.userID', '=', 'user.userID')->get();
    }

}
