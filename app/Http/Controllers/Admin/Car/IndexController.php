<?php

namespace App\Http\Controllers\Admin\Car;

use App\Http\Controllers\Car\BaseController;
use App\Http\Requests\Car\StoreRequest;
use App\Http\Requests\Car\UpdateRequest;
use App\Models\Car;
use App\Models\Mark;

class IndexController extends BaseController
{
    public function index()
    {
        return view('admin.car.index');
    }

}
