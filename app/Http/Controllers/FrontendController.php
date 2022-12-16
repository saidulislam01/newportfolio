<?php

namespace App\Http\Controllers;

use App\Models\Main;
use App\Models\Portfolio;
use App\Models\Services;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $main = Main::first();
        $services = Services::all();
        $portfolios = Portfolio::all();

        return view('frontend.index', compact('main','services','portfolios'));
    }
}
