<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ghi extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
    ];
    protected $table= 'ghis';

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
