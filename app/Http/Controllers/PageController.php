<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'name' => 'required', 
            'subject' => 'min:3',
            'comments' => 'min:10',
            ]);

            $data = [
                'email' => $request->email,
                'subject' => $request->subject,
                'comments' => $request->comments,
                'name' => $request->name,
            ];
                
            Mail::send('emails.contact', $data, function ($comments) use ($data) {
               $comments->from($data['email']);
               $comments->to('dammy4did@gmail.com');
               $comments->subject($data['subject']);
            });

            return redirect()->back()->with('message', 'Message sent!');
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
