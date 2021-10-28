<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deprt extends Model
{
    use HasFactory;
    protected $fillable =[
        'd_name',
        'nurse_id'
    ];

    protected $table= 'deprts';

    public function nurse(){
        return $this->belongsTo(nurse::class);
    }
}
