<?php

namespace App\Http\Controllers;

use App\Models\Star;

class StarController extends Controller
{
       public function list() {
        $stars = Star::all();
        return view('list', ['stars' => $stars]);
    }

}
