<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'user_id',
    ];

    protected $table = 'comments';

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
