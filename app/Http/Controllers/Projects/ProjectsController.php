<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/20/18
 * Time: 2:29 PM
 */

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project\Project;


class ProjectsController extends Controller
{
    private $title = 'Projects';

    public function create()
    {
        $projects = Project::all();
        $title = $this->title;

        return view('projects.create', compact('projects','title'));
    }

    public function store()
    {
        $this->validate(request(),[
           'name' => 'required|unique:projects',
           'description' => 'required'
        ]);

        Project::Create([
            'name' => request('name'),
            'description' => request('description')
        ]);

        return ['message','Project Created!'];
    }
}