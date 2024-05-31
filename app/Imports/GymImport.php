<?php

namespace App\Imports;

use App\Models\Gym;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GymImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Gym([
            'name' => $row['name'],
            'description' => $row['description'],
            'contact' => $row['contact'],
            'location' => $row['location'],
            'featured' => $row['featured'],
            'fees' => $row['fees'],
            'timing_from' => $row['timing_from'],
            'timing_to' => $row['timing_to'],
        ]);
    }
}
