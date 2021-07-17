<?php

namespace App\Http\Controllers;

use App\Http\Resources\PharmacologicalAgentResource;
use App\Models\PharmacologicalAgent;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        return PharmacologicalAgentResource::collection(PharmacologicalAgent::all());
    }

    public function show($id)
    {
        return PharmacologicalAgentResource::make(PharmacologicalAgent::find($id));
    }
}
