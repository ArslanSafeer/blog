<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use App\ProjectUser;

class ProjectController extends Controller
{
    
public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(isset($request->datefrom) && isset($request->dateto)) {
            $projects = Project::with('project_parent')->whereDate('started_date', '>=', $request->datefrom)->whereDate('started_date', '<=', $request->dateto)->get();
                return view('layouts.project.index', compact('projects'));
            
        }
        $projects = Project::with('project_parent')->get();
        return view('layouts.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['project']=Project::all();
        $arr['projectuser']=ProjectUser::all();
        return view('layouts.project.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Project $project)
    {
        $project->name=$request->name;
        $project->detail=$request->detail;
        $project->started_date=$request->started_date;
        $project->parent_id=$request->parent_id;
        $project->initiated_by_id=$request->initiated_by_id;
        $project->current_initiated_by=$request->current_initiated_by;
        $project->save();
        return redirect()->route('layouts.project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $arr['project']=$project;
        $arr['projectuser']=ProjectUser::all();
        return view ('layouts.project.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->name=$request->name;
        $project->detail=$request->detail;
        $project->started_date=$request->started_date;
        $project->parent_id=$request->parent_id;
        $project->initiated_by_id=$request->initiated_by_id;
        $project->current_initiated_by=$request->current_initiated_by;
        $project->save();
        return redirect()->route('layouts.project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::destroy($id);
        return redirect()->route('layouts.project.index');
        
    }

}
