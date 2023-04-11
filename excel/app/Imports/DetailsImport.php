<?php

namespace App\Imports;

use App\Models\Detail;
use Maatwebsite\Excel\Concerns\ToModel;

class DetailsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Detail([
            //
        ]);
    }
}
