<?php

namespace App\Http\Controllers\Car;

use App\Http\Filters\CarFilter;
use App\Http\Requests\Car\FilterRequest;
use App\Http\Requests\Car\StoreRequest;
use App\Http\Requests\Car\UpdateRequest;
use App\Models\Car;
use App\Models\Mark;

class SearchController extends BaseController
{
    public function search(FilterRequest $request)
    {
        $marks = Mark::all();
        $data = $request->validated();
        $filter = app()->make(CarFilter::class, ['queryParams' => array_filter($data)]);
        $cars = Car::filter($filter)->paginate(5);
        return view('car.index', compact('cars', 'marks'));
    }
}
