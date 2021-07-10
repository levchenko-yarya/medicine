<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveSubstance extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function pharmacological_agent()
    {
        return $this->hasMany(PharmacologicalAgent::class);
    }
}
