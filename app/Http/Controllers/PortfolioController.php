<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
  
    public function index(){


        $projects = Project::all();

            return view('portfolio.index' , compact('projects'));
    }
}
