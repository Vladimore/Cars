<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use App\Models\Mark;

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

    public function store(CarRequest $request)
    {
        $data = $request->validated();
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

    public function update(CarRequest $request, Car $car)
    {
        $data = $request->validated();
        $car->update($data);
        return redirect()->route('cars.show', compact('car'));
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index');
    }
}
