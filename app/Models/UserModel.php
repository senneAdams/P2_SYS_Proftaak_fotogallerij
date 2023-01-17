<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'userID';

    protected function registerUser(array $data)
    {
        $user             = new UserModel();
        $user->username   = $data['username'];
        $user->password   = $data['password'];
        $user->authorname = $data['authorname'];
        $user->save();

        return true;
    }
}
