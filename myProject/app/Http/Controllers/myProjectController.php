<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myProjectController extends Controller
{
    public function index() {
        return view('home');
    }
    public function experience() {
        return view('experience');
    }
    public function education() {
        return view('education');
    }
    public function skills() {
        return view('skills');
    }
    public function interests() {
        return view('interests');
    }

    public function contact() {
        return view('contact');
    }
    
    public function formContact(Request $request){
        return view('contact', ['data' => $request]);
    }
}

