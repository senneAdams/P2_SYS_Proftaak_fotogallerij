<?php

namespace App\Http\Controllers;

use App\Models\AlbumModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    public function showAlbum1()
    {
        $album = AlbumModel::getAlbumData(1);

        return view("album1")->with('album', $album);
    }

    public function showAlbum2()
    {
        $album = AlbumModel::getAlbumData(2);

        return view("album2")->with('album', $album);
    }

    public function showAlbum3()
    {
        $album = AlbumModel::getAlbumData(3);

        return view("album3")->with('album', $album);
    }
}
