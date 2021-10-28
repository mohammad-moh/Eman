<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    protected $table = 'doctors';

    public function patient()
    {
        return $this->hasMany(patients::class);
    }
}
