<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gef extends Model
{
    use HasFactory;
    protected $fillable =[
        'body',
        'user_id',
    ];
    protected $table = 'gefs';

    public function users(){
        return $this->belongsTo('App\Models\User');
    }

}
