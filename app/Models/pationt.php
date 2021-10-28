<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pationt extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'pharma_id',
    ];
    protected $table = 'pationts';

    public function pharmacy()
    {
        return $this->belongsTo(pharma::class);
    }

}
