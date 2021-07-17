<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;


class CategoryController extends Controller
{
    //
    

    public function index()
    {
        return view('category.index');
    }

    public function create()
    {
        return view('category.add');
    }

    public function store(Request $request)
    {   
        
    }

    public function edit(){

    }

    public function delete(){

    }
}
