<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebController extends Controller {

    public function index() {
        return view('web.index');
    }
    public function work() {
        return view('web.work');
    }

}
