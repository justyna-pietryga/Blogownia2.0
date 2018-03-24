<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //it's also in ComposerServiceProvider to make it accessible via all sites in navbar
    public function getAll(){
        $categories = DB::table('categories')->get();

        return $categories;
    }
}
