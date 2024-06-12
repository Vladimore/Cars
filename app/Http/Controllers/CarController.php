<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Mark;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        $marks = Mark::all();
        return view('car.index', compact('cars', 'marks'));
    }

    public function create()
    {
        $marks = Mark::all();
        return view('car.create', compact('marks'));
    }

    public function store()
    {
        $data = request()->validate([
            'mark_id' => 'integer',
            'model' => 'required|string',
            'description' => 'string',
            'year' => 'required|integer',
            'price' => 'required|integer',
            'image' => 'string'
        ]);
        Car::create($data);
        return redirect()->route('cars.index');
    }

    public function show(Car $car)
    {
        $marks = Mark::all();
        return view('car.show', compact('car', 'marks'));
    }

    public function edit(Car $car)
    {
        $marks = Mark::all();
        return view('car.edit', compact('car', 'marks'));
    }

    public function update(Car $car)
    {
        $data = request()->validate([
           'mark_id' => 'integer',
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
