<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarBrand;

class CarBrandController extends Controller
{
    public function index()
    {
        $carBrands = CarBrand::all();
        return view('car_brands.index', compact('carBrands'));
    }

    public function create()
    {
        return view('car_brands.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);

        CarBrand::create($validated);
        return redirect()->route('car-brands.index')->with('success', 'Marque ajoutée.');
    }

    public function edit(CarBrand $carBrand)
    {
        return view('car_brands.edit', compact('carBrand'));
    }

    public function update(Request $request, CarBrand $carBrand)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);

        $carBrand->update($validated);
        return redirect()->route('car-brands.index')->with('success', 'Marque mise à jour.');
    }

    public function destroy(CarBrand $carBrand)
    {
        $carBrand->delete();
        return redirect()->route('car-brands.index')->with('success', 'Marque supprimée.');
    }
}
