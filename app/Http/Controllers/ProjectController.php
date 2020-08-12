<?php

namespace App\Http\Controllers;

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

}
