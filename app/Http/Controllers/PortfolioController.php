<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Models\Project;
use App\Models\UserVisit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class PortfolioController extends Controller
{

    public function index(Request $request){


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

