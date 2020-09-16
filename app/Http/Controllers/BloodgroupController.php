<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bloodgroup;
class BloodgroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloodgroups =Bloodgroup::all();
        //dd($items);
        return view('backend.bloodgroups.index',compact('bloodgroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('backend.bloodgroups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            "bloodtype" =>'required',
            "unit" =>'required'
        ]);

        //Data insert
        $bloodgroup = new Bloodgroup;
        $bloodgroup->bloodtype =$request->bloodtype;
        $bloodgroup->unit =$request->unit;
        $bloodgroup->save();

        //redirect
        return redirect()->route('bloodgroups.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view('backend.bloodgroups.edit',compact('bloodgroup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bloodgroup $bloodgroup)
    {
              return view('backend.bloodgroups.edit',compact('bloodgroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Bloodgroup $bloodgroup)
    {
        $request->validate([
            "bloodtype" =>'required',
            "unit" =>'required'

    ]);
        //data update
        $bloodgroup->bloodtype =$request->bloodtype;
        $bloodgroup->unit =$request->unit;
        $bloodgroup->save();

        //redirect
        return redirect()->route('bloodgroups.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bloodgroup $bloodgroup)
    {
        $bloodgroup->delete();
        return redirect()->route('bloodgroups.index');    
    }
}
