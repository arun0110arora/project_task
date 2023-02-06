<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Project extends Model
{
    use HasFactory;

    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }

    public function create($data){

        $project = new Project;
        $project->project_name = $data['project_name'];
        $project->user_id = Auth::id();
        
        if($project->save()){
            return true;
        }else{
            return false;
        }
    }
}
