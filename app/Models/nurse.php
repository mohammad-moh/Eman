<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nurse extends Model
{
    use HasFactory;
    protected $fillable = [
        'n_name'
    ];
    protected $table = 'nurses';

    public function deprts(){
        return $this->hasMany(deprt::class);
    }
}
