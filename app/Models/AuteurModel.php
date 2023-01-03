<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuteurModel extends Model
{
    use HasFactory;

    protected $table = 'auteur';
    protected $primaryKey = 'auteurID';
}
