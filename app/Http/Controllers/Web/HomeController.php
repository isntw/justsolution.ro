<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;

class HomeController extends Controller {

    public function index() {
        $projects = Project::orderBy('id', 'desc')->limit(HOME_PAGE_ENTRIES)->get();
        return view('web.home.index')->with('projects', $projects);
    }

}
