<?php

namespace App\Imports;

use App\Models\Car;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CarImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            if($row != null){
                Car::firstOrCreate(
                    [
                        'mark_id' => $row['aidi_marki'],
                        'model' => $row['model'],
                        'description' => $row['opisanie'],
                        'year' => $row['god'],
                        'price' => $row['cena'],
                        'image' => $row['kartinka']
                ],
                    [
                        'mark_id' => $row['aidi_marki'],
                        'model' => $row['model'],
                        'description' => $row['opisanie'],
                        'year' => $row['god'],
                        'price' => $row['cena'],
                        'image' => $row['kartinka']

                ]);
            }
        }
    }
}
