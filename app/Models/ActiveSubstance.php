<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveSubstance extends Model
{
    use HasFactory;

    protected $fillable = [
        'productName'
    ];
    protected $link = 'show-substance';
    protected $edit = 'edit-substance';

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
