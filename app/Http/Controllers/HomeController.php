<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Returns homepage.
     * 
     * 
     */
    function index()
    {
        // $items = DB::table('items')
        // ->get();

        return view('home');
    }
}
