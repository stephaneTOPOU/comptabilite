<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function projet()
    {
        return view('frontend.projet');
    }
}
