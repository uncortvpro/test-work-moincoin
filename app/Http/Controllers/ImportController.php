<?php

namespace App\Http\Controllers;

use App\Imports\CategoriesImport;
use App\Imports\ProductsImport;
use App\Models\Migration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function importCategories(){
        $migrate = Migration::where('migration','categories_migrate')->first();
            if(!isset($migrate->id)) {

                Excel::import(new CategoriesImport(), storage_path() . '/category.csv');
                $migration = new Migration();
                $migration->migration = "categories_migrate";
                $migration->batch = 5;
                $migration->save();
            }
        return response()->redirectTo('/');

    }
    public function importProducts()
    {
        $migrate = Migration::where('migration','products_migrate')->first();
        if(!isset($migrate->id)) {
            ini_set('memory_limit', '1000M');
            Excel::import(new ProductsImport(), storage_path() . '/product.csv');
            $migration = new Migration();
            $migration->migration = "products_migrate";
            $migration->batch = 6;
            $migration->save();
        }
        return response()->redirectTo('/');

    }
}
