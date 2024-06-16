<?php

namespace App\Http\Controllers\Car;

use App\Http\Requests\Car\StoreRequest;
use App\Http\Requests\Car\UpdateRequest;
use App\Models\Car;
use App\Models\Mark;

class CarController extends BaseController
{
    public function index()
    {
        $cars = Car::paginate(5);
        $marks = Mark::all();
        return view('car.index', compact('cars', 'marks'));
    }

    public function create()
    {
        $marks = Mark::all();
        return view('car.create', compact('marks'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

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

    public function update(UpdateRequest $request, Car $car)
    {
        $data = $request->validated();

        $this->service->update($car, $data);

        return redirect()->route('cars.show', compact('car'));
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index');
    }
}
