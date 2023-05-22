<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index()
    {
        if (auth()->check()) {
            // User is authenticated
            $categories = Category::with('subcategories')->get();
            return view('home', compact('categories'));
        } else {
            // User is a guest
            $categories = Category::with('subcategories')->get();
            return view('home', compact('categories'));
        }
    }
    

    public function admin()
    {

        return view('admin.home');
    }
    
    
}
