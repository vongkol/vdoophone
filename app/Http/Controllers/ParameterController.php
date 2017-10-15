<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class ParameterController extends Controller
{
    // index
    public function index()
    {
        if (Auth::user()==null)
        {
            return redirect('/login');
        }
        return view('parameters.index');
    }
}
