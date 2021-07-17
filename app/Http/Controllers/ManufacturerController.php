<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function index()
    {
        return view('manufacturer/index', [
            'manufacturers' => Manufacturer::all()
        ]);
    }

    public function create()
    {
        return view('manufacturer/add');
    }

    public function store(Request $request)
    {
        $manufacturer = new Manufacturer();
        $manufacturer->companyName = $request->input('companyName');
        $manufacturer->url = $request->input('url');
        $manufacturer->save();
        return redirect()->route('index-manufacturer');
    }

    public function show(Manufacturer $manufacturer)
    {
        return view('manufacturer/show', [
            'manufacturer' => $manufacturer
        ]);
    }

    public function edit(Manufacturer $manufacturer)
    {
        return view('manufacturer/edit', [
            'manufacturer' => $manufacturer
        ]);
    }

    public function update(Request $request, Manufacturer $manufacturer)
    {
        $manufacturer->fill($request->all());
        $manufacturer->save();
        return redirect()->route('index-manufacturer');
    }

    public function destroy($id)
    {
        Manufacturer::destroy($id);
        return redirect()->route('index-manufacturer');
    }
}
