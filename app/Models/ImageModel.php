<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Image;

class ImageModel extends Model
{
    use HasFactory;

    protected $table = 'image';
    protected $primaryKey = 'imageID';

    protected function saveImage(array $data)
    {
        $image              = new ImageModel();
        $image->albumID     = $data['albumID'];
        $image->userID      = $data['userID'];
        $image->promptUsed  = $data['promptUsed'];
        $image->websiteUsed = $data['websiteUsed'];
        $image->imageName   = $data['imageName'];
        $image->imageURL    = $data['imageURL'];
        $image->fotoHeight  = $data['fotoHeight'];
        $image->fotoWidth   = $data['fotoWidth'];

        $image->save();
        return true;
    }

}
