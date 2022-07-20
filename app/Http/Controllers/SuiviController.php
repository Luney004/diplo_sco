<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuiviController extends Controller
{
    public function follow()
    {
        return view("suivi");
    }
}
