<?php

namespace App\Imports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\ToModel;

class CategoriesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Category([
            'id' => $row[0],
            'name' => $row[1],
            'url_key' => $row[2],
            'description' => $row[3],
            'image' => $row[4],
            'parent_id' => $row[5],
        ]);
    }
}
