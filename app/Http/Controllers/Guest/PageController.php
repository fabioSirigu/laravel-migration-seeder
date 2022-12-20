<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;


class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function trains()
    {
        //$houses = House::all(); // returns all houses in order
        $trains = Train::all();
        /* dd($trains); */
        return view('trains', compact('trains'));
    }
}
