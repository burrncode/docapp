<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speciality;
use App\Insurer;

class WelcomeController extends Controller
{
    public function index()
    {
    	// get the specialities list
    	$specialities = Speciality::all();
    	$insurers 	  = Insurer::all();

    	return view('welcome', compact('specialities', 'insurers'));
    }
}
