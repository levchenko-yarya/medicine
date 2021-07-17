<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmacologicalAgent extends Model
{
    use HasFactory;

    protected $fillable = [
        'productName',
        'active_substance_id',
        'manufacturer_id',
        'price'
    ];
    protected $link = 'show-agent';
    protected $edit = 'edit-agent';

    public function link()
    {
        return route($this->link, $this);
    }

    public function edit()
    {
        return route($this->edit, $this);
    }

    public function active_substance()
    {
        return $this->belongsTo(ActiveSubstance::class);
    }

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
}
