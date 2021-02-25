<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function programmes()
    {
        return view('pages.programme');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function projects()
    {
        return view('pages.projects');
    }

    public function units()
    {
        return view('pages.units');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function seminars()
    {
        return view('pages.seminars.seminar');
    }

    public function trainings()
    {
        return view('pages.trainings');
    }

    public function internship()
    {
        return view('pages.internship');
    }
}
