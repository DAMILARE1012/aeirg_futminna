<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GalleryController extends Controller
{
    //
    public function ai4ce_events()
    {
        $images = \File::allFiles(public_path('assets/images/gallery/ai4ce_events'));

        return view('pages.gallery.ai4ce_events')->with(array('images'=>$images));
    }

    public function exhibition_room()
    {
        $images = \File::allFiles(public_path('assets/images/gallery/exhibition_room'));

        return view('pages.gallery.exhibition_room')->with(array('images'=>$images));
    }

    public function aeirg_retreat()
    {
       
        $images = \File::allFiles(public_path('assets/images/gallery/aeirg_retreat'));
        

        return view('pages.gallery.aeirg_retreat')->with(array('images'=>$images));
    }
}
