<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jef extends Model
{
    use HasFactory;
    protected $fillable = [
        'gname',
        'gtype',
        'gfile',
    ];

    

}
