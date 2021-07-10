<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmacologicalAgent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'active_substance_id',
        'manufacturer_id',
        'price'
    ];

    public function active_substance()
    {
        return $this->belongsTo(ActiveSubstance::class);
    }

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
}
