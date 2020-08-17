<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('projects.index',[
         'projectos'=>Project::orderBy('created_at','DESC')->paginate()
      ]);

    }


    public function show($id){
       $project = Project::findOrFail($id);
       return view('projects.show',['project'=>$project]);
    }

    public function create(){

      return view('projects.create',[
        'project'=>new Project

      ]);
    }


    public function store(SaveProjectRequest $request){

     Project::create($request->validated());

      return redirect()->route('project.index')
                       ->with('flash','proyecto fue creado exitosamenete');

     }

    public function edit ($id){

       $project = Project::findOrFail($id);
       return view('projects.edit', ['project'=>$project]);

    }

     public function update (SaveProjectRequest $request , $id){

       $project = Project::find($id);
       $project->update($request->validated());
       return  redirect()->route('project.show',$project->id);
    }

     public function destroy($id){

      $project= Project::findOrFail($id)->delete();
      return redirect()->route('project.index')->with('flash','proyecto fue eliminado');

  }
}
