<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'companyName',
        'url'
    ];
    protected $link = 'show-manufacturer';
    protected $edit = 'edit-manufacturer';

    public function link()
    {
        return route($this->link, $this);
    }
    public function edit()
    {
        return route($this->edit, $this);
    }

    public function pharmacological_agent()
    {
        return $this->hasMany(PharmacologicalAgent::class);
    }
}
