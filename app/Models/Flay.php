<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flay extends Model
{
    use HasFactory;

    protected $fillable = [
        'fy1',
        'fy2',
        'fy3',
    ];

}
