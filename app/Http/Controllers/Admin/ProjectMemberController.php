<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProjectMember;

class ProjectMemberController extends Controller
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
        $arr['projectmember']=ProjectMember::all();
        return view('layouts.projectmember.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.projectmember.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ProjectMember $projectmember)
    {
        $projectmember->name=$request->name;
        $projectmember->phone_no=$request->phone_no;
        $projectmember->email=$request->email;
        $projectmember->save();
        return redirect()->route('layouts.projectmember.index');
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
    public function edit(ProjectMember $projectmember)
    {
        $arr['projectmember']=$projectmember;
        return view ('layouts.projectmember.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectMember $projectmember)
    {
        $projectmember->name=$request->name;
        $projectmember->phone_no=$request->phone_no;
        $projectmember->email=$request->email;
        $projectmember->save();
        return redirect()->route('layouts.projectmember.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        projectmember::destroy($id);
        return redirect()->route('layouts.projectmember.index');
    }
}
