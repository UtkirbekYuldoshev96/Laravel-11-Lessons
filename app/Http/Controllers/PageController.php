<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Bosh sahifa
    public function main()
    {
        return view('main');
    }

    public function welcome()
    {
        return view('welcome', [
            "name" => "Nurislom",
            'list' => [1,2,3,4,5,6],
        ]);
    }
}
