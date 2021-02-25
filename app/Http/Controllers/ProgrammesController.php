<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProgrammesController extends Controller
{
    public function programme1()
    {
        $images = \File::allFiles(public_path('images'));

        return View('pages.programmes.programme1')->with(array('images'=>$images));
    }
}
