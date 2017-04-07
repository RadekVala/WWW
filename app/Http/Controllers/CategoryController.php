<?php

namespace App\Http\Controllers;

use App\Contents;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($param)
    {

        $selectedCategory =  Category::where('name',$param)->first();
        $ContentArray = null;
        if($selectedCategory){
            $ContentArray = $selectedCategory->contents()->get();
        }

        return view('category',[ 'title' => $param, 'ContentArray' => $ContentArray ]);
    }
}
