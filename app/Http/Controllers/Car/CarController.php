<?php

namespace App\Http\Controllers\Car;

use App\Http\Filters\CarFilter;
use App\Http\Requests\Car\FilterRequest;
use App\Http\Requests\Car\StoreRequest;
use App\Http\Requests\Car\UpdateRequest;
use App\Models\Car;
use App\Models\Mark;

class CarController extends BaseController
{
    public function index(FilterRequest $request)
    {
        $cars = Car::paginate(10);
        $marks = Mark::all();
        return view('car.index', compact('cars', 'marks'));
    }

    public function search(FilterRequest $request)
    {
        $marks = Mark::all();
        $data = $request->validated();
        $filter = app()->make(CarFilter::class, ['queryParams' => array_filter($data)]);
        $cars = Car::filter($filter)->paginate(10);
        dd($cars);
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
