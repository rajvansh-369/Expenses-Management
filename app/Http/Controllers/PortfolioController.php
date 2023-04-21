<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends Controller
{
  
    public function index(){


        $projects = Project::all();

            return view('portfolio.index' , compact('projects'));
    }


    public function sendMessage(Request $request){

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('snhlrj8@gmail.com')->send(new ContactUs($data));

        return True;
    }
}

