<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        
        // for ($i=1; $i < 7; $i++) { 
        //     $cat = new Category();
        //     $cat->title = "Категория $i";
        //     $cat->save();
        // }
        

        return view('admin.index');
    }
}
