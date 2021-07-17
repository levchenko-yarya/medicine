<?php

namespace App\Http\Controllers;

use App\Models\ActiveSubstance;
use App\Models\Manufacturer;
use App\Models\PharmacologicalAgent;
use Illuminate\Http\Request;

class PharmacologicalAgentController extends Controller
{
    public function index()
    {
        return view('pharmacological/index', [
            'agents' => PharmacologicalAgent::all()
        ]);
    }

    public function create()
    {
        return view('pharmacological/add', [
            'substances' => ActiveSubstance::all(),
            'manufacturers' => Manufacturer::all()
        ]);
    }

    public function store(Request $request)
    {
        $agent = new PharmacologicalAgent();
        $agent->productName = $request->input('productName');
        $agent->active_substance_id = $request->input('active_substance_id');
        $agent->manufacturer_id = $request->input('manufacturer_id');
        $agent->price = $request->input('price');
        $agent->save();
        return redirect()->route('index-agent');
    }

    public function show(PharmacologicalAgent $agent)
    {
        return view('pharmacological/show', [
            'agent' => $agent
        ]);
    }

    public function edit(PharmacologicalAgent $agent)
    {
        return view('pharmacological/edit', [
            'agent' => $agent,
            'substances' => ActiveSubstance::all(),
            'manufacturers' => Manufacturer::all()
        ]);
    }

    public function update(Request $request, PharmacologicalAgent $agent)
    {
        $agent->fill($request->all());
        $agent->save();
        return redirect()->route('index-agent');
    }

    public function destroy($id)
    {
        PharmacologicalAgent::destroy($id);
        return redirect()->route('index-agent');
    }
}
