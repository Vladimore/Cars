<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class CarFilter extends AbstractFilter
{
    public const MARK_ID = 'mark_id';
    public const MODEL = 'model';
    public const DESCRIPTION = 'description';
    public const YEAR = 'year';
    public const PRICE = 'price';

    protected function getCallbacks(): array
    {
        return [
            self::MARK_ID => [$this, 'markId'],
            self::MODEL => [$this, 'model'],
            self::DESCRIPTION => [$this, 'description'],
            self::YEAR => [$this, 'year'],
            self::PRICE => [$this, 'price']
        ];
    }

    public function markId(Builder $builder, $value)
    {
        $builder->where(self::MARK_ID, 'like', $value);
    }

    public function model(Builder $builder, $value)
    {
        $builder->where(self::MODEL, 'like', "%{$value}%");
    }

    public function description(Builder $builder, $value)
    {
        $builder->where(self::DESCRIPTION, 'like', "%{$value}%");
    }

    public function year(Builder $builder, $value)
    {
        $builder->where(self::YEAR, $value);
    }

    public function price(Builder $builder, $value)
    {
        $builder->where(self::PRICE, '<', $value);
    }
}
