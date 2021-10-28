<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modo extends Model
{
    use HasFactory;
    
    //Create the array fillable for the names of the columns of Table
    protected $fillable =[
        'name',
        'user_id',
    ];

    //create the table name of the table in DB
    protected $table = 'modos';

    // create function that create the relationship between the tables
     public function user(){
         return $this->belongsTo('App\Models\User');
     }
}
