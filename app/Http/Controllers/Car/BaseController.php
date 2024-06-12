<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Services\Car\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
