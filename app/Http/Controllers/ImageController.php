<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ImageModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function show()
    {
        $album = DB::table('album')->get();

        return view("uploadFoto")->with('album', $album);
    }

    public function handlePhotoUpload(Request $request)
    {

        $validated = $request->validate([
            'photoName'  => 'required|min:3|max:32',
            'promptUsed' => 'required|min:3|max:32',
            'image'      => 'required',
            'uploadTo'   => 'required',
        ]);


        // foto

        $path     = 'Album' . $validated['uploadTo'];
        $fileName = 'Album' . $validated['uploadTo'] . 'd' . date('dmy') . '.' . $request->file('image')->extension();

        $request->image->move($path, $fileName);


        list($width,$height) = getimagesize($path . '/' .$fileName);

        $image          = new ImageModel();
        $image->albumID = $validated['uploadTo'];
        $image->userID = Auth::id();
        $image->promptUsed = $validated['promptUsed'];
        $image->imageName  = $validated['photoName'];
        $image->imageURL   = $path . '/' . $fileName;
        $image->fotoHeight = $height;
        $image->fotoWidth =  $width;

        $image->save();
        return back()->with('status',"Foto uploaden success");
    }
}
