<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MmsLog;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $AllMms = MmsLog::all();

        return view('home', ["AllMms" => $AllMms]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getMms() {
        $AllMms = MmsLog::all();

        return view('mms-log', ["AllMms" => $AllMms]);
    }

}
