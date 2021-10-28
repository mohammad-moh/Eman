<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gitt extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'user_id',
    ];
    protected $table ='gitts';

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
