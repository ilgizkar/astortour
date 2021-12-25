<?php

namespace App\Http\Controllers\Front;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function index(Request $request){

        return view('front.main');
    }
}
