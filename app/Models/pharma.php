<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pharma extends Model
{
    use HasFactory;
    protected $fillable =[
        'name'
    ];
    protected $table ='pharmas';

    public function pationt()
    {
        return $this->hasMany(pationt::class);
    }
}
