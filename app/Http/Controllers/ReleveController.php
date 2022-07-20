<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReleveController extends Controller
{
    public function askreleve()
    {
        return view("demandereleve");
    }
}
