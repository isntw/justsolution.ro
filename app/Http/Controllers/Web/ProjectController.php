<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;

class ProjectController extends Controller {

    public function index() {
        $projects = Project::all();

        return view('web.projects.index')->with('projects', $projects);
    }

}
