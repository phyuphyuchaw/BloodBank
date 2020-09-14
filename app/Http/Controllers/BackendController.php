<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
<<<<<<< HEAD
   public function dashboardfun($value='')
=======

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
>>>>>>> 252a2600eede5f8d5a653dcd4591bbd33c2c941e
    {
        return view('backend.dashboard');
    }
<<<<<<< HEAD
=======

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

	public function dashboardfun($value='')
	{
    return view('backend.dashboard');
	}
>>>>>>> 252a2600eede5f8d5a653dcd4591bbd33c2c941e
}
