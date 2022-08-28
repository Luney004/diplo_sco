<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Diplome;
use Illuminate\Http\Request;

class PostController extends Controller
{
     public function index()
    {
        $diplomes = Diplome::all() ;

        return view('dashboard', compact($diplomes));
    }
}
