<?php

namespace App\Http\Controllers;

use App\Models\ActiveSubstance;
use Illuminate\Http\Request;

class ActiveSubstanceController extends Controller
{
    public function index()
    {
        return view('substance/index', [
            'substances' => ActiveSubstance::all()
        ]);
    }

    public function create()
    {
        return view('substance/add');
    }

    public function store(Request $request)
    {
        $substance = new ActiveSubstance();
        $substance->productName = $request->input('productName');
        $substance->save();
        return redirect()->route('index-substance');
    }

    public function show(ActiveSubstance $activeSubstance)
    {
        return view('substance/show', [
            'substance' => $activeSubstance
        ]);
    }

    public function edit(ActiveSubstance $activeSubstance)
    {
        return view('substance/edit', [
            'substance' => $activeSubstance
        ]);
    }

    public function update(Request $request, ActiveSubstance $activeSubstance)
    {
        $activeSubstance->fill($request->all());
        $activeSubstance->save();
        return redirect()->route('index-substance');
    }

    public function destroy($id)
    {
        ActiveSubstance::destroy($id);
        return redirect()->route('index-substance');
    }
}
