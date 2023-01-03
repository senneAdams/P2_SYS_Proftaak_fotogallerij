<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    public function showAlbum1(){
        $album = DB::table('image')->where('albumID',1)->get();
        return view("album1")->with('album',$album);
    }
    public function showAlbum2(){
        $album = DB::table('image')->where('albumID',2)->get();
        return view("album2")->with('album',$album);
    }
    public function showAlbum3(){
        $album = DB::table('image')->where('albumID',3)->get();
        return view("album3")->with('album',$album);
    }
}
