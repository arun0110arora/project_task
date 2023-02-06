@extends('layouts.app')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <a href="{{ route('project.create') }}" class="btn btn-create-project">
        Create Project
    </a>
    <div class="project-det">
        @foreach($projects as $project)
            <h4>Project Name: {{$project->project_name}}</h4>
            
            <a href="{{ route('project.create') }}" class="btn btn-create-task">
                Add Task
            </a>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Task Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($project->tasks) > 0)
                        @foreach($project->tasks as $task)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$tasks->task_name}}</td>
                                <td></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="">
                                        <button type="button" class="btn-warning">Edit</button>
                                        </a>&nbsp;
                                        <form action="" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn-danger" value="Delete"/>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr rowspan="4">No Task Found</tr>
                    @endif
                </tbody>
            </table>
        @endforeach
    </div>
    
@endsection