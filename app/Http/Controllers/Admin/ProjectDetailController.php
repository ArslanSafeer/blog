<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProjectDetail;
use App\Project;

class ProjectDetailController extends Controller
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
          $projectdetail = ProjectDetail::whereDate('date', '>=', $request->datefrom)->whereDate('date', '<=', $request->dateto)->get();
                return view('layouts.projectdetail.index', compact('projectdetail'));
            
        }


        $arr['projectdetail']=ProjectDetail::all();
        return view('layouts.projectdetail.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['project']=Project::all();
        return view('layouts.projectdetail.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ProjectDetail $projectdetail)
    {
        $projectdetail->date=$request->date;
        $projectdetail->attended_by=$request->attended_by;
        $projectdetail->detail=$request->detail;
        $projectdetail->projects_id=$request->projects_id;
        $projectdetail->save();
        return redirect()->route('layouts.projectdetail.index');
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
    public function edit(ProjectDetail $projectdetail)
    {
        $arr['projectdetail']=$projectdetail;
        $arr['project']=Project::all();
        return view ('layouts.projectdetail.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectDetail $projectdetail)
    {
        $projectdetail->date=$request->date;
        $projectdetail->attended_by=$request->attended_by;
        $projectdetail->detail=$request->detail;
        $projectdetail->projects_id=$request->projects_id;
        $projectdetail->save();
        return redirect()->route('layouts.projectdetail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        projectdetail::destroy($id);
        return redirect()->route('layouts.projectdetail.index');
    }
}
