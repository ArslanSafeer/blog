<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Income;

class IncomeController extends Controller
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
        $arr['income']=Income::all();
        return view('layouts.income.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.income.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Income $income)
    {
        $income->income_from=$request->income_from;
        $income->income_detail=$request->income_detail;
        $income->amount=$request->amount;
        $income->date=$request->date;
        $income->save();
        return redirect()->route('layouts.income.index');
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
    public function edit(Income $income)
    {
        $arr['income']=$income;
        return view ('layouts.income.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Income $income)
    {
        $income->income_from=$request->income_from;
        $income->income_detail=$request->income_detail;
        $income->amount=$request->amount;
        $income->date=$request->date;
        $income->save();
        return redirect()->route('layouts.income.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Income::destroy($id);
        return redirect()->route('layouts.income.index');
    }
}
