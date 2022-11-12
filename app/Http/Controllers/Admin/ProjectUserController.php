<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProjectUser;
use App\Project;

class ProjectUserController extends Controller
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
    public function index()
    {
        $arr['projectuser']=ProjectUser::all();
        return view('layouts.projectuser.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['project']=Project::all();
        return view('layouts.projectuser.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ProjectUser $projectuser)
    {
        $projectuser->user_name=$request->user_name;
        $projectuser->user_email=$request->user_email;
        $projectuser->projects_id=$request->projects_id;
        $projectuser->save();
        return redirect()->route('layouts.projectuser.index');
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
    public function edit(ProjectUser $projectuser)
    {
         $arr['projectuser']=$projectuser;
         $arr['project']=Project::all();
        return view ('layouts.projectuser.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectUser $projectuser)
    {
        $projectuser->user_name=$request->user_name;
        $projectuser->user_email=$request->user_email;
        $projectuser->projects_id=$request->projects_id;
        $projectuser->save();
        return redirect()->route('layouts.projectuser.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        projectuser::destroy($id);
        return redirect()->route('layouts.projectuser.index');
    }
}
