<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class op extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
    ];
    protected $table ='ops';

    public function users(){
        return $this->belongsTo('App\Models\User');
    }
}
