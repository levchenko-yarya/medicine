<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgentPost;
use App\Models\ActiveSubstance;
use App\Models\Manufacturer;
use App\Models\PharmacologicalAgent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

    public function store(AgentPost $request)
    {
        $agent = new PharmacologicalAgent($request->validated());
        $agent->save();
        Log::info('add pharmacological_agent '.$agent);
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
        Log::info('update pharmacological_agent '.$agent);
        return redirect()->route('index-agent');
    }

    public function destroy($id)
    {
        PharmacologicalAgent::destroy($id);
        return redirect()->route('index-agent');
    }
}
