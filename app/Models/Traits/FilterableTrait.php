<?php

namespace App\Models\Traits;

use App\Http\Filters\FilterInterface;
use Illuminate\Database\Eloquent\Builder;

trait FilterableTrait
{
    public function scopeFilter(Builder $builder, FilterInterface $filter)
    {
        $filter->apply($builder);
        return $builder;
    }
}
