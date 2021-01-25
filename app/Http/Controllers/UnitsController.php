<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UnitsController extends Controller
{
    public function powerTech()
    {
        return view('pages.units.powerTech');
    }
    public function Elearning()
    {
        return view('pages.units.e-learning');
    }
    public function autotronics()
    {
        return view('pages.units.autotronics');
    }
    public function webDev()
    {
        return view('pages.units.webDev');
    }
}
