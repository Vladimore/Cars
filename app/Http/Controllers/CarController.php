<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('car.index', compact('cars'));
    }

    public function create()
    {
        return view('car.create');
    }

    public function store()
    {
        $data = request()->validate([
            'mark' => 'string',
            'model' => 'string',
            'description' => 'string',
            'year' => 'integer',
            'price' => 'integer',
            'image' => 'string'
        ]);
        Car::create($data);
        return redirect()->route('cars.index');
    }

    public function show(Car $car)
    {
        return view('car.show', compact('car'));
    }

    public function edit(Car $car)
    {
        return view('car.edit', compact('car'));
    }

    public function update(Car $car)
    {
        $data = request()->validate([
           'mark' => 'string',
           'model' => 'string',
           'description' => 'string',
           'year' => 'integer',
           'price' => 'integer',
           'image' => 'string'
        ]);
        $car->update($data);
        return redirect()->route('cars.show', compact('car'));
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index');
    }
}
