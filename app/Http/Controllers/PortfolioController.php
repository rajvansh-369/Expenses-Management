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

        $storedIPs = Session::get('stored_ips', []);

        // dd(in_array($request->ip(), $storedIPs));
        $userIpAddress = $request->ip();;
        // $userIpAddress = "137.96.143.251";
        // dd($userIpAddress);
        if (!in_array($request->ip(), $storedIPs)) {

            $geoData = Http::get('http://ip-api.com/json/' . $userIpAddress)->json();
            // if ($geoData && $geoData['status'] === 'success') {

                UserVisit::create($geoData);
                $storedIPs[] = $request->ip();
                Session::put('stored_ips', $storedIPs);

            // }


        }

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

