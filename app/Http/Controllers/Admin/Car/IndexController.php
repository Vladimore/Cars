<?php

namespace App\Http\Controllers\Admin\Car;

use App\Http\Controllers\Car\BaseController;
use App\Models\Car;
use App\Models\Mark;

class IndexController extends BaseController
{
    public function index()
    {
        $cars = Car::paginate(5);
        $marks = Mark::all();
        return view('admin.car.index', compact('cars', 'marks'));
    }

}
