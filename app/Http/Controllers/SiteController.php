<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    //
    public function index(){
    	//return "index delegados";
    	return view('sitio/index');
    }

}
