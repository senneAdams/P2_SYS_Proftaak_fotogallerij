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
        if (Auth::user()){
            $album = DB::table('album')->get();
            return view("uploadFoto")->with('album', $album);
        } else {
         return back();
        }
    }

    public function handlePhotoUpload(Request $request)
    {
        $validated = $request->validate([
            'photoName'   => 'required|min:3|max:32',
            'promptUsed'  => 'required|min:3|max:32',
            'image'       => 'required|image',
            'uploadTo'    => 'required',
            'websiteUsed' => 'required',
        ]);

        $path     = 'Album' . $validated['uploadTo'];
        $fileName = $validated['photoName'] . 'a' . $validated['uploadTo'] . 'd' . date('dmy') . '.' . $request->file('image')->extension();

        $request->image->move($path, $fileName); // image verplaatsen

        list($width, $height) = getimagesize($path . '/' . $fileName);

        $data = [
            'albumID'     => $validated['uploadTo'],
            'userID'      => Auth::id(),
            'promptUsed'  => $validated['promptUsed'],
            'websiteUsed' => $validated['websiteUsed'],
            'imageName'   => $validated['photoName'],
            'imageURL'    => $path . '/' . $fileName,
            'fotoHeight'  => $height,
            'fotoWidth'   => $width,
        ];

        $saveImage = ImageModel::saveImage($data);
        if ($saveImage) {
            return back()->with('status', "Foto uploaden success");
        } else {
            return back()->with('status', "Foto uploaden error");
        }
    }
}
