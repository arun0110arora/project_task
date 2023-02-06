<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){

        $projects = Project::with('tasks')
                    ->get();
        // echo "<pre>"; print_r($projects); die;
        
        return view('project.index', compact('projects'));
    }

    public function create(Request $request){

        if($request->isMethod('post')){
            $request->validate([
                'project_name' => 'required'
            ]);

            $data = $request->all();
            $create = Project::create($data);

            if($create){
                return redirect()->route('project.list')->with('message', 'Project created successfully');
            }else{
                return redirect()->route('project.list')->with('message', 'Something went wrong!');
            }
        }

        return view('project.create');
    }
}
