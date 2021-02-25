<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectsController extends Controller
{
    public function project_18_20()
    {
        return view('pages.projects.18-20_project');
    }

    public function project_15_17()
    {
        return view('pages.projects.15-17_project');
    }

    public function project_12_14()
    {
        return view('pages.projects.12-14_project');
    }

    public function project_09_11()
    {
        return view('pages.projects.09-11_project');
    }
}
