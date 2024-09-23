<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    // Prikazuje popis automobila
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }
    
    // Prikazuje formu za dodavanje novog automobila
    public function create()
    {
        return view('cars.create');
    }

    // Sprema novi auto u bazu
    public function store(Request $request)
    {
        $request->validate([
            'CAR_NAME' => 'required',
            'FUEL_TYPE' => 'required',
            'CAPACITY' => 'required|numeric',
            'PRICE' => 'required|numeric',
            'CAR_IMG' => 'required|string',
            'AVAILABLE' => 'required|boolean'
        ]);

        Car::create($request->all());

        return redirect()->route('cars.index')->with('success', 'Auto uspješno dodan');
    }

    // Prikazuje formu za uređivanje odabranog automobila
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.edit', compact('car'));
    }

    // Ažurira postojeći auto u bazi
    public function update(Request $request, $id)
    {
        $request->validate([
            'CAR_NAME' => 'required',
            'FUEL_TYPE' => 'required',
            'CAPACITY' => 'required|numeric',
            'PRICE' => 'required|numeric',
            'CAR_IMG' => 'required|string',
            'AVAILABLE' => 'required|boolean'
        ]);

        $car = Car::findOrFail($id);
        $car->update($request->all());

        return redirect()->route('cars.index')->with('success', 'Auto uspješno ažuriran');
    }

    // Briše odabrani auto
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Auto uspješno obrisan');
    }
}
