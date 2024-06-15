<?php

namespace App\Models;

use App\Models\Traits\FilterableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory;
    use FilterableTrait;
    use SoftDeletes;

    protected $table = 'cars';
    protected $guarded = false;
}
