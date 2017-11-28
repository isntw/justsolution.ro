<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebController extends Controller {

    public function work() {
        return view('web.work');
    }

    public function services() {
        return view('web.services');
    }

    public function pricing() {
        return view('web.pricing');
    }

    public function about() {
        return view('web.about');
    }

    public function contact() {
        return view('web.contact');
    }

}
