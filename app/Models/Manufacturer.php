<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url'
    ];

    public function pharmacological_agent()
    {
        return $this->hasMany(PharmacologicalAgent::class);
    }
}
